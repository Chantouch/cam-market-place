<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Image;
use App\Model\SubCategory;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Validator;
use Vinkla\Hashids\HashidsManager;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Images;
use File;

class CategoryController extends Controller
{
    public $hashid;

    public function __construct(HashidsManager $hashid)
    {
        $this->hashid = $hashid;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::where('status', 1)->paginate(10);
        return view('backend.pages.catalog.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('status', 1)->orderBy('id')->pluck('name', 'id');
        return view('backend.pages.catalog.category.create', compact('categories'));
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
            $validator = Validator::make($data, Category::rules(), Category::messages());
            if ($validator->fails()) {
                return back()->withInput()->withErrors($validator);
            }
            if ($request->has('category_id')) {
                $sub_category = SubCategory::create($data);
                $this->upload_image($request, $sub_category);
                if (!$sub_category) {
                    return back()->with('error', 'Your category can not add to our system right now. Plz try again later.');
                }
            } else {
                $create = Category::create($data);
                $this->upload_image($request, $create);
                if (!$create) {
                    return back()->with('error', 'Your category can not add to our system right now. Plz try again later.');
                }
            }
            return redirect()->route('admin.catalogs.categories.index')->with('success', 'Category added successfully.');
        } catch (ModelNotFoundException $exception) {
            return back()->with('error', 'Your category can not add to our system right now. Plz try again later.');
        }
    }

    /**
     * @param $request
     * @param $category
     */
    public function upload_image($request, $category)
    {
        if ($request->hasFile('img_name')) {
            $path = 'uploads/img/category/';
            $destinationPath = public_path($path);
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }
            $file = $request->file('img_name');
            $image_large = Images::make($file)->resize(870, 323);
            //to remove space from string
            $product_name = preg_replace(array('/\s+/', '/[.,&"]/', '/[^a-zA-Z0-9]+/'), '_', html_entity_decode(strtolower($request->name)));
            $fileName = uniqid($product_name . '_') . '_' . time() . '.' . $file->getClientOriginalExtension();
            $image_large->save($destinationPath . $fileName, 100);
            $images = new Image();
            $images->img_name = $fileName;
            $category->images()->save($images);
            if (!$category->images()->save($images))
                throw new ModelNotFoundException();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\ $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $decoded = $this->hashid->decode($id);
        $id = @$decoded[0];
        if ($id === null) {
            return redirect()->route('admin.catalogs.categories.index')->with('error', 'We can not find category with that id, please try the other');
        }
        $category = Category::find($id);
        if ($category->category_id !== null)
            $category = SubCategory::with('category')->find($id);
        return view('backend.pages.catalog.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\ $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $decoded = $this->hashid->decode($id);
        $id = @$decoded[0];
        if ($id === null) {
            return redirect()->route('admin.catalogs.categories.index')->with('error', 'We can not find category with that id, please try the other');
        }
        $category = Category::find($id);
        if ($category->category_id !== null)
            $category = SubCategory::with('category')->find($id);
        $categories = Category::where('status', 1)->orderBy('id')->pluck('name', 'id');
        return view('backend.pages.catalog.category.edit', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Model\ $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $data = $request->all();
            $decoded = $this->hashid->decode($id);
            $id = @$decoded[0];
            if ($id === null) {
                return redirect()->route('admin.catalogs.categories.index')->with('error', 'We can not find category with that id, please try the other');
            }
            $category = Category::find($id);
            if ($category->category_id !== null)
                $category = SubCategory::with('category')->find($id);
            $validator = Validator::make($data, Category::rules($id), Category::messages());
            if ($validator->fails()) {
                return back()->withInput()->withErrors($validator);
            }
            if ($request->hasFile('img_name')) {
                $path = 'uploads/img/category/';
                $destinationPath = public_path($path);
                if (!file_exists($destinationPath)) {
                    mkdir($destinationPath, 0777, true);
                }
                $file = $request->file('img_name');
                $image_large = Images::make($file)->resize(870, 323);
                //to remove space from string
                $product_name = preg_replace(array('/\s+/', '/[.,&"]/', '/[^a-zA-Z0-9]+/'), '_', html_entity_decode(strtolower($request->name)));
                $fileName = uniqid($product_name . '_') . '_' . time() . '.' . $file->getClientOriginalExtension();
                $ids = array();
                foreach ($category->images as $image) {
                    $old_file = [$category->path . $image->img_name];
                    if (File::exists($category->path)) {
                        File::delete($old_file);
                    }
                    $ids[] = $image->id;
                }
                Image::whereIn('id', $ids)->delete();
                $image_large->save($destinationPath . $fileName, 100);
                $data['path'] = $path;
                $image = Image::FirstOrNew(['img_name' => $fileName]);
                $category->images()->save($image);
                if (!$category->images()->save($image))
                    throw new ModelNotFoundException();
            }
            $update = $category->update($data);
            if (!$update) {
                DB::rollBack();
                return back()->with('error', 'Your category can not add to your system right now. Plz try again later.');
            }
            DB::commit();
            return redirect()->route('admin.catalogs.categories.index')->with('success', 'Category added successfully.');
        } catch (ModelNotFoundException $exception) {
            return back()->with('error', 'Your category can not add to your system right now. Plz try again later.');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\ $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $decoded = $this->hashid->decode($id);
        $id = @$decoded[0];
        if ($id === null) {
            return redirect()->route('admin.catalogs.categories.index')->with('error', 'We can not find category with that id, please try the other');
        }
        $category = Category::find($id);
        if ($category->category_id !== null)
            $category = SubCategory::with('category')->find($id);
        $delete = $category->delete();
        if (!$delete) {
            return back()->with('error', 'Your category can not delete from your system right now. Plz try again later.');
        }
        return redirect()->route('admin.catalogs.categories.index')->with('success', 'Category deleted successfully');
    }
}
