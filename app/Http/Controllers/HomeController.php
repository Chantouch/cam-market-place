<?php

namespace App\Http\Controllers;

use App\Model\HomeSlider;
use App\Model\Category;
use App\Model\Product;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

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
            $categories = Category::with('sub_category')->where('status', 1)->whereNull('category_id')->get();
            $products = Product::with('category')->where('status',1)->get();
            return view('front.pages.index', compact('sliders'), compact('categories','products'));
        } catch (ModelNotFoundException $exception) {
            return response()->json(['error' => 'can not get sliders']);
        }
    }
}
