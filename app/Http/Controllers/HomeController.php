<?php

namespace App\Http\Controllers;

use App\Model\HomeSlider;
use App\Model\Category;
use App\Model\Product;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('web');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $sliders = HomeSlider::with('image_slider')->where('status', '1')->whereNull('parent_id')->first();
            $categories = Category::with('sub_category', 'products')->where('status', 1)->whereNull('category_id')->get();
            $category_list = Category::with('sub_category')->where('status', 1)
                ->whereNull('category_id')->orderByDesc('name')
                ->pluck('name', 'id');
            $products = Product::with('categories')->where('status', 1)->get();
            return view('front.pages.index', compact('sliders'), compact('categories', 'products', 'category_list'));
        } catch (ModelNotFoundException $exception) {
            return response()->json(['error' => 'can not get sliders']);
        }
    }

    public function search_product(Request $request)
    {
        $categories = Category::with('sub_category')->where('status', 1)
            ->whereNull('category_id')->orderByDesc('name')
            ->get();
        $category_list = Category::with('sub_category')->where('status', 1)
            ->whereNull('category_id')->orderByDesc('name')
            ->pluck('name', 'id');
        $products = Product::with('categories', 'city')->get();
        $category = $request->get('category');
        $product_name = $request->get('name');
        $items = Product::with('categories', 'city');
        if ($product_name) {
            $items->where(function ($q) use ($product_name) {
                $q->where('name', 'like', '%' . $product_name . '%');
            });
        }

        if ($category) {
            $product_id = DB::table('products_categories')->where('category_id', $category)->select('product_id')->pluck('product_id');
            $items->whereIn('id', $product_id);
        }

        $items = $items->orderBy('created_at', 'ASC')->get();
        //$products->paginate(10);
        Session::flash('_old_input', [$request->name, $request->category_id]);
        return view('front.pages.product.content-search', compact('categories', 'items', 'products', 'category_list'));
    }
}
