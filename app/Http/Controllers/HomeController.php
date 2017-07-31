<?php

namespace App\Http\Controllers;

use App\Model\Advertise;
use App\Model\HomeSlider;
use App\Model\Product;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;

class HomeController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
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
            $products = Product::with('categories')->where('status', 1)->get();
            $banners = Advertise::with('owner','image')->where('active', 1)->get();
            return view('front.pages.index', compact('sliders','products','banners'));
        } catch (ModelNotFoundException $exception) {
            return response()->json(['error' => 'can not get sliders']);
        }
    }

    public function search_product(Request $request)
    {
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
        $count_items = $items->count();
        $items = $items->orderBy('created_at', 'ASC')->paginate(10);
        $items->appends([
            'name' => $product_name, 'category' => $category
        ]);
        Session::flash('_old_input', [$request->name, $request->category_id]);
        return view('front.pages.product.content-search', compact('count_items', 'items', 'products'));
    }
}
