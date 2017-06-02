<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Category;
use App\Model\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('web');
    }

    /**
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($slug)
    {
        $categories = Category::with('sub_category')->where('status', 1)->whereNull('category_id')->get();
        $product = Product::with('categories', 'city')->where('slug', $slug)->first();
        return view('front.pages.product.view', compact('product', 'categories'));
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
        return view('front.pages.product.category', compact('category', 'categories','products'));
    }
}
