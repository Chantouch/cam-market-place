<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\SubCategory;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Validator;
use Vinkla\Hashids\HashidsManager;
use Illuminate\Support\Facades\DB;

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
                if (!$sub_category) {
                    return back()->with('error', 'Your category can not add to our system right now. Plz try again later.');
                }
            } else {
                $create = Category::create($data);
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

            $validator = Validator::make($data, Category::rules(), Category::messages());
            if ($validator->fails()) {
                return back()->withInput()->withErrors($validator);
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
