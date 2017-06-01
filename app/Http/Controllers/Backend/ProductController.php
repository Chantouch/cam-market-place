<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\City;
use App\Model\Currency;
use App\Model\Language;
use App\Model\Product;
use App\Model\Tag;
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
        $currencies = Currency::where('status', 1)->orderBy('name', 'desc')->pluck('name', 'id');
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
                            $image_large = Images::make($file)->resize(1024, 1024);
                            $image_small = Images::make($file)->resize(500, 500);
                            $image_thumb = Images::make($file)->resize(100, 100);
                            //to remove space from string
                            $product_name = preg_replace('/\s+/', '_', strtolower($request->name));
                            $fileName = uniqid($product_name . '_') . '_' . time() . '.' . $file->getClientOriginalExtension();
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
//                if (isset($request->tags)) {
//                    //$tags = explode(',', $request->tags[0]);
//                    $tags = $request->tags;
//                    foreach ($tags as $tag) {
//                        $data['tags'] = $tag;
//                        $tgs = new Tag($data);
//                        $create->tags()->save($tgs);
//                        if (!$create->tags()->save($tgs))
//                            throw new ModelNotFoundException();
//                    }
//                }
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
        $decoded = $this->hashid->decode($id);
        $id = @$decoded[0];
        if ($id === null) {
            return redirect()->route('admin.catalogs.products.index')->with('error', 'We can not find product with that id, please try the other');
        }
        $cities = City::where('status', 1)->whereNotNull('country_id')->whereNull('city_id')->orderBy('name', 'desc')->pluck('name', 'id');
        $currencies = Currency::where('status', 1)->orderBy('name', 'desc')->pluck('name', 'id');
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

//        $tag = Tag::all();
//        $tags = array();
//        foreach ($tag as $tg) {
//            $tags[$tg->tags] = $tg->tags;
//        }

        $discount_types = \Helper::discount_types();
        $product = Product::with('city')->with('currency')->with('languages')->find($id);
        return view('backend.pages.catalog.product.edit',
            compact('product', 'cities', 'currencies', 'discount_types', 'languages', 'categories')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Model\Product $id
     * @return \Illuminate\Http\RedirectResponse
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
                    $image_large = Images::make($file)->resize(1024, 1024);
                    $image_small = Images::make($file)->resize(500, 500);
                    $image_thumb = Images::make($file)->resize(100, 100);
                    //to remove space from string
                    $product_name = preg_replace('/\s+/', '_', strtolower($request->name));
                    $fileName = uniqid($product_name . '_') . '_' . time() . '.' . $file->getClientOriginalExtension();
                    $image_large->save($destinationPath . '/large/' . $fileName, 100);
                    $image_small->save($destinationPath . '/small/' . $fileName, 100);
                    $image_thumb->save($destinationPath . '/thumb/' . $fileName, 100);
                    $data['img_path'] = $path;
                    $images = Image::FirstOrNew(['img_name' => $fileName]);
                    $product->images()->save($images);
                    if (!$product->images()->save($images))
                        throw new ModelNotFoundException();
                }
                if (!empty($product->images['img_name'])) {
                    $product->images['img_name'] = $picture;
                } else {
                    unset($product->images['img_name']);
                }
            }
//            if ($request->has('tags')) {
//                //$tags = explode(',', $request->tags[0]);
//                $tags = $request->tags;
//                foreach ($tags as $tag) {
//                    $data['tags'] = $tag;
//                    $tgs = Tag::firstOrNew(array('tags' => $tag));
//                    $product->tags()->save($tgs);
//                    if (!$product->tags()->save($tgs))
//                        throw new ModelNotFoundException();
//                }
//            }
            if (empty($product->code) || $product->code == null) {
                $records = Product::count();
                $current_id = 1;
                if (!$records == 0) {
                    $current_id = Product::orderBy('id', 'DESC')->first()->id + 1;
                }
                $product_code = 'REF' . str_pad($current_id, 8, '0', STR_PAD_LEFT);
                $data['code'] = $product_code;
            }

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
