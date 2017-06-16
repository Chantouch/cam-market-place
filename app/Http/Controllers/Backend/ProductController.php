<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\City;
use App\Model\Currency;
use App\Model\Language;
use App\Model\PriceConverter;
use App\Model\Product;
use App\Model\Tag;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Vinkla\Hashids\HashidsManager;
use Validator;
use DB;
use Intervention\Image\ImageManagerStatic as Images;
use App\Model\Image;
use File;

class ProductController extends Controller
{
    public $hashid;

    public function __construct(HashidsManager $hashid)
    {
        $this->hashid = $hashid;
        $this->middleware('auth:admin');
    }

    public function auth()
    {
        return auth()->user();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $products = Product::paginate(10);
            return view('backend.pages.catalog.product.index', compact('products'));
        } catch (ModelNotFoundException $exception) {
            return redirect()->route('admin.home')->with('error', 'There is something wrong with your request.');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::where('status', 1)->whereNotNull('country_id')->whereNull('city_id')->orderBy('name', 'desc')->pluck('name', 'id');
        $currencies = Currency::where('status', 1)->orderBy('name', 'desc')->select(['name', 'code', 'id'])->get();
        $languages = Language::where('status', 1)->orderBy('name', 'desc')->pluck('name', 'id');
        $categories = Category::where('status', 1)->orderBy('name', 'desc')->pluck('name', 'id');
        $tags = Tag::orderBy('tags', 'desc')->pluck('tags', 'id');
        $discount_types = \Helper::discount_types();
        return view('backend.pages.catalog.product.create',
            compact('cities', 'languages', 'currencies', 'categories', 'discount_types', 'tags')
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        try {
            $data = $request->all();
            $validator = Validator::make($data, Product::rules(), Product::messages());
            if ($validator->fails()) {
                return back()->withInput()->withErrors($validator);
            }
            $data['user_id'] = $this->auth()->id;
            $path = 'uploads/product/img/';
            $data['img_path'] = $path;
            $records = Product::count();
            $current_id = 1;
            if (!$records == 0) {
                $current_id = Product::orderBy('id', 'DESC')->first()->id + 1;
            }
            $product_code = 'REF' . str_pad($current_id, 8, '0', STR_PAD_LEFT);
            $data['code'] = $product_code;
            $create = Product::create($data);
            if ($create) {
                if (isset($request->currency_id)) {
                    $target_currencies = Currency::all();
                    foreach ($target_currencies as $target_currency) {
                        $converter = \Helper::currencyConverterXe($request->get('currency_code'), $target_currency->code, $create->price);
                        if (!count($create->price_converter)) {
                            PriceConverter::create([
                                'product_id' => $create->id,
                                'currency_id' => $target_currency->id,
                                'amount' => $converter,
                            ]);
                        }
                    }
                }

                if (isset($request->language_id)) {
                    $create->languages()->attach($request->language_id);
                }
                if (isset($request->category_id)) {
                    $create->categories()->attach($request->category_id);
                }
                if (isset($request->img_name)) {
                    if ($request->hasFile('img_name')) {
                        $destinationPath = public_path($path);
                        $path_large = public_path($path . 'large/');
                        $path_small = public_path($path . 'small/');
                        $path_thumb = public_path($path . 'thumb/');
                        if (!file_exists($destinationPath)) {
                            mkdir($destinationPath, 0777, true);
                            mkdir($path_large, 0777, true);
                            mkdir($path_small, 0777, true);
                            mkdir($path_thumb, 0777, true);
                        }
                        $files = $request->file('img_name');
                        foreach ($files as $file) {
                            if ($file->isValid()) {
                                $validator = Validator::make($data, Image::rules(), Image::messages());
                                if ($validator->fails()) {
                                    return back()->withInput()->withErrors($validator);
                                }
                                $image_large = Images::make($file)->resize(1024, 1024);
                                $image_small = Images::make($file)->resize(500, 500);
                                $image_thumb = Images::make($file)->resize(100, 100);
                                //to remove space from string
                                $product_name = preg_replace('/\s+/', '_', strtolower($request->name));
                                $fileName = time() . '.' . $file->getClientOriginalExtension();
                                $image_large->save($destinationPath . '/large/' . $fileName, 100);
                                $image_small->save($destinationPath . '/small/' . $fileName, 100);
                                $image_thumb->save($destinationPath . '/thumb/' . $fileName, 100);
                                $images = new Image();
                                $images->img_name = $fileName;
                                $create->images()->save($images);
                                if (!$create->images()->save($images))
                                    throw new ModelNotFoundException();
                            }
                        }
                    }
                }
                if (isset($request->tags)) {
                    $trimmed_array = explode(',', $request->tags);
                    $tags = array_map('trim', $trimmed_array);
                    foreach ($tags as $tag) {
                        $data['tags'] = $tag;
                        $tgs = Tag::firstOrNew(array('tags' => $tag));;
                        $create->tags()->save($tgs);
                        //if (!$create->tags()->save($tgs))
                        //    throw new ModelNotFoundException();
                    }
                }
            } else {
                DB::rollback();
                return back()->with('error', 'Your product can not add to our system right now. Plz try again later.');
            }
            return redirect()->route('admin.catalogs.products.index')->with('success', 'Product added successfully.');
        } catch (ModelNotFoundException $exception) {
            return back()->with('error', 'Your product can not add to our system right now. Plz try again later.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Product $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $decoded = $this->hashid->decode($id);
        $id = @$decoded[0];
        if ($id === null) {
            return redirect()->route('admin.catalogs.products.index')->with('error', 'We can not find product with that id, please try the other');
        }
        $product = Product::find($id);
        return view('backend.pages.catalog.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Product $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $decoded = $this->hashid->decode($id);
            $id = @$decoded[0];
            if ($id === null) {
                return redirect()->route('admin.catalogs.products.index')->with('error', 'We can not find product with that id, please try the other');
            }
            $cities = City::where('status', 1)->whereNotNull('country_id')->whereNull('city_id')->orderBy('name', 'desc')->pluck('name', 'id');
            //$currencies = Currency::where('status', 1)->orderBy('name', 'desc')->pluck('code', 'id');
            $currencies = Currency::where('status', 1)->orderBy('name', 'desc')->select(['name', 'code', 'id'])->get();
            $language = Language::all();
            $languages = array();
            foreach ($language as $lg) {
                $languages[$lg->id] = $lg->name;
            }

            $category = Category::all();
            $categories = array();
            foreach ($category as $cat) {
                $categories[$cat->id] = $cat->name;
            }
            $discount_types = \Helper::discount_types();
            $product = Product::with('city')->with('currency')->with('languages')->find($id);
            return view('backend.pages.catalog.product.edit',
                compact('product', 'cities', 'currencies', 'discount_types', 'languages', 'categories')
            );
        } catch (ModelNotFoundException $exception) {
            return redirect()->route('admin.catalogs.products.index')->with('error', 'We can not find product with that id, please try the other');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Model\Product $id
     * @return bool|\Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        try {
            $data = $request->all();
            $decoded = $this->hashid->decode($id);
            $id = @$decoded[0];
            if ($id === null) {
                return redirect()->route('admin.catalogs.products.index')->with('error', 'We can not find product with that id, please try the other');
            }
            $validator = Validator::make($data, Product::rules(), Product::messages());
            if ($validator->fails()) {
                return back()->withInput()->withErrors($validator);
            }
            $product = Product::find($id);
            if ($product->user_id == null || empty($product->user_id)) {
                $data['user_id'] = $this->auth()->id;
            }

            if (isset($request->currency_id)) {
                $currency_id = PriceConverter::pluck('currency_id')->toArray();
                $product_id = PriceConverter::pluck('product_id')->toArray();
                $target_currencies = Currency::take(2)->get();
                $array_inserts = [];
                if (count($product->price_converter) > 0) {
                    foreach ($target_currencies as $target_currency) {
                        $converter = \Helper::currencyConverterXe($request->get('currency_code'), $target_currency->code, $product->price);
                        if (in_array($_unique_currency = $target_currency['id'], $currency_id) && in_array($_unique_product = $product['id'], $product_id)) {
                            $price_converter = PriceConverter::where('product_id', $_unique_product)
                                ->where('currency_id', $_unique_currency)->first();
                            if (is_null($price_converter)) {
                                return false;
                            }
                            $array_insert = [
                                'product_id' => $product->id,
                                'currency_id' => $target_currency->id,
                                'amount' => $converter,
                                'updated_at' => Carbon::now(),
                            ];
                            $price_converter->update($array_insert);
                            continue;
                        }
                        $array_inserts = [
                            'product_id' => $product->id,
                            'currency_id' => $target_currency['currency_id'],
                            'amount' => $converter,
                            'updated_at' => Carbon::now(),
                        ];
                        $currency_id[] = $target_currency['currency_id'];
                        $product_id[] = $product->id;
                    }
                    if (!empty($array_inserts)) {
                        $insert_success = PriceConverter::insert($array_inserts);
                        if (!$insert_success) {
                            return redirect()->back()->with('error', 'Unable to process your request right now, Please contact to System admin @070375783');
                        }
                    }
                }
            }

            if ($request->hasFile('img_name')) {
                $path = 'uploads/product/img/';
                $destinationPath = public_path($path);
                $path_large = public_path($path . 'large/');
                $path_small = public_path($path . 'small/');
                $path_thumb = public_path($path . 'thumb/');
                if (!file_exists($destinationPath) || !file_exists($path_large)) {
                    mkdir($destinationPath, 0777, true);
                    mkdir($path_large, 0777, true);
                    mkdir($path_small, 0777, true);
                    mkdir($path_thumb, 0777, true);
                }
                $picture = '';
                $files = $request->file('img_name');
                foreach ($files as $file) {
                    if ($file->isValid()) {
                        $validator = Validator::make($data, Image::rules(), Image::messages());
                        if ($validator->fails()) {
                            return back()->withInput()->withErrors($validator);
                        }
                        $image_large = Images::make($file)->resize(1024, 1024);
                        $image_small = Images::make($file)->resize(500, 500);
                        $image_thumb = Images::make($file)->resize(100, 100);
                        //to remove space from string
                        $product_name = preg_replace('/\s+/', '_', strtolower($request->name));
                        $fileName = time() . '.' . $file->getClientOriginalExtension();
                        $image_large->save($destinationPath . '/large/' . $fileName, 100);
                        $image_small->save($destinationPath . '/small/' . $fileName, 100);
                        $image_thumb->save($destinationPath . '/thumb/' . $fileName, 100);
                        $data['img_path'] = $path;
                        $images = Image::FirstOrNew(['img_name' => $fileName]);
                        $product->images()->save($images);
                        if (!$product->images()->save($images))
                            throw new ModelNotFoundException();
                    }
                }
                if (!empty($product->images['img_name'])) {
                    $product->images['img_name'] = $picture;
                } else {
                    unset($product->images['img_name']);
                }
            }

            if ($request->has('tags')) {
                //$trim = trim($request->tags, " ");
                $trimmed_array = explode(',', $request->tags);
                $tags = array_map('trim', $trimmed_array);
                //$tags = $request->tags;
                $ids = array();
                foreach ($product->tags as $tg) {
                    $ids[] = $tg->id;
                }
                DB::table('taggables')
                    ->whereIn('tag_id', $ids)
                    ->delete();
                foreach ($tags as $tag) {
                    $data['tags'] = $tag;
                    $tgs = Tag::firstOrNew(array('tags' => $tag));
                    //$tgs = Tag::firstOrCreate(['tags'=> $tag]);
                    $product->tags()->save($tgs);
                    //if (!$product->tags()->saveMany([$tgs]))
                    //    throw new ModelNotFoundException();
                }
            }
            if (empty($product->code) || $product->code == null) {
                $records = Product::count();
                $current_id = 1;
                if (!$records == 0) {
                    $current_id = Product::orderBy('id', 'DESC')->first()->id + 1;
                }
                $product_code = 'REF' . str_pad($current_id, 8, '0', STR_PAD_LEFT);
                $data['code'] = $product_code;
            }
            $data['currency_id'] = $request->currency_id;
            $product->update($data);
            if ($product) {
                if (isset($request->language_id)) {
                    $product->languages()->sync($request->language_id);
                } else {
                    $product->languages()->sync(array());
                }
                if (isset($request->category_id)) {
                    $product->categories()->sync($request->category_id);
                } else {
                    $product->categories()->sync(array());
                }
            }
            return redirect()->route('admin.catalogs.products.index')->with('success', 'Product updated successfully.');
        } catch (ModelNotFoundException $exception) {
            return back()->with('error', 'Your product can not add to your system right now. Plz try again later.');
        }
    }

    public function tags_to_array($string)
    {
        $trimmed_array = explode(',', $string);
        $tags = array_map('trim', $trimmed_array);

        // Create an empty array
        $result = array();

        foreach ($tags as $tag) {
            // Create a new tag if it doesn't exist and push it to the collection
            $result[] = Tag::firstOrCreate(['name' => trim($tag)]);
        }

        return $result;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Product $id
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $decoded = $this->hashid->decode($id);
        $id = @$decoded[0];
        if ($id === null) {
            return redirect()->route('admin.catalogs.products.index')->with('error', 'We can not find product with that id, please try the other');
        }
        $product = Product::find($id);
        if ($request->ajax()) {
            $ids = array();
            foreach ($product->images as $photo) {
                $old_file = [$product->img_path . $photo->img_name];
                if (File::exists($product->img_path)) {
                    File::delete($old_file);
                }
                $ids[] = $photo->id;
            }
            $product->categories()->detach();
            $product->languages()->detach();
            Image::whereIn('id', $ids)->delete();
            $delete = $product->forceDelete();
            if (!$delete) {
                return response()->json(['error', 'Your product can not delete from your system right now. Plz try again later.']);
            }
            return redirect()->route('admin.catalogs.products.index')->with('success', 'Product deleted successfully');
        } else {
            $ids = array();
            foreach ($product->images as $image) {
                $old_file = [
                    $product->img_path . 'large/' . $image->img_name,
                    $product->img_path . 'small/' . $image->img_name,
                    $product->img_path . 'thumb/' . $image->img_name
                ];
                if (File::exists($product->img_path)) {
                    File::delete($old_file);
                }
                $ids[] = $image->id;
            }
            $product->categories()->detach();
            $product->languages()->detach();
            Image::whereIn('id', $ids)->delete();
            $delete = $product->forceDelete();
            if (!$delete) {
                return back()->with('error', 'Your product can not delete from your system right now. Plz try again later.');
            }
        }
        return redirect()->route('admin.catalogs.products.index')->with('success', 'Product deleted successfully');
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy_image(Request $request, $id)
    {
        if ($request->ajax()) {
            $decoded = $this->hashid->decode($id);
            $id = @$decoded[0];
            if ($id === null) {
                return response()->json(['error' => 'Can not find this image id']);
            }
            $image = Image::with('imageable')->find($id);
            $product = $image->imageable->first();
            $old_file = [
                $product->img_path . 'large/' . $image->img_name,
                $product->img_path . 'small/' . $image->img_name,
                $product->img_path . 'thumb/' . $image->img_name
            ];
            if (File::exists($product->img_path)) {
                File::delete($old_file);
            }
            //$product->images()->detach();
            $image->delete();
            return response()->json(['message' => 'Successfully deleted image']);
        }
        return response()->json(['error' => 'Error deleted image']);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
     */
    public function duplicate($id)
    {
        $decoded = $this->hashid->decode($id);
        $id = @$decoded[0];
        if ($id === null) {
            return response()->json(['error' => 'Can not find this image id']);
        }
        $product = Product::find($id);
        $new_product = $product->replicate();
        $new_product->save();
        return redirect()->route('admin.catalogs.products.edit', $new_product->hashid)->with('success', 'Product copied successfully.');
    }
}
