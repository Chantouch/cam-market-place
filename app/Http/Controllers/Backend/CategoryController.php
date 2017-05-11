<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\SubCategory;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::where('status', 1)->paginate(10);
        return view('backend.pages.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('status', 1)->orderBy('id')->pluck('name', 'id');
        return view('backend.pages.category.create', compact('categories'));
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
            return redirect()->route('admin.categories.index')->with('success', 'Category added successfully.');
        } catch (ModelNotFoundException $exception) {
            return back()->with('error', 'Your category can not add to our system right now. Plz try again later.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Category $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('backend.pages.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $categories = Category::where('status', 1)->orderBy('id')->pluck('name', 'id');
        return view('backend.pages.category.edit', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Model\Category $category
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Category $category)
    {
        try {
            $data = $request->all();
            $validator = Validator::make($data, Category::rules(), Category::messages());
            if ($validator->fails()) {
                return back()->withInput()->withErrors($validator);
            }
            $update = $category->update($data);
            if (!$update) {
                return back()->with('error', 'Your category can not add to your system right now. Plz try again later.');
            }
            return redirect()->route('admin.categories.index')->with('success', 'Category added successfully.');
        } catch (ModelNotFoundException $exception) {
            return back()->with('error', 'Your category can not add to your system right now. Plz try again later.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $delete = $category->delete();
        if (!$delete) {
            return back()->with('error', 'Your category can not delete from your system right now. Plz try again later.');
        }
        return redirect()->route('admin.categories.index')->with('success', 'Category deleted successfully');
    }
}
