<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Category;
use App\Model\Product;
use App\Http\Controllers\BaseController;
use DB;

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
        $category = Category::with('sub_category', 'products')->where('slug', $slug)->firstOrFail();
        $products = Product::with('categories', 'city')->get();
        $items = Product::with('categories', 'city');
        if ($category) {
            $product_id = DB::table('products_categories')->where('category_id', $category->id)->select('product_id')->pluck('product_id');
            $items->whereIn('id', $product_id);
        }
        $items = $items->orderBy('created_at', 'ASC')->paginate(15);
        return view('front.pages.product.category', compact('category', 'products', 'items'));
    }
}