<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Category;
use App\Model\Product;
use App\Http\Controllers\BaseController;

class ProductController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('web');
    }

    /**
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($slug)
    {
        $product = Product::with('categories', 'city')->where('slug', $slug)->first();
        return view('front.pages.product.view', compact('product'));
    }

    /**
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function category($slug)
    {
        $categories = Category::with('sub_category')->where('status', 1)->whereNull('category_id')->get();
        $category = Category::with('sub_category', 'products')->where('slug', $slug)->first();
        $products = Product::with('categories', 'city')->get();
        $category_list = Category::with('sub_category')->where('status', 1)
            ->whereNull('category_id')->orderByDesc('name')
            ->pluck('name', 'id');
        return view('front.pages.product.category', compact('category', 'categories', 'products', 'category_list'));
    }
}
