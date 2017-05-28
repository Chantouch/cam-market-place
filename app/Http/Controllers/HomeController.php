<?php

namespace App\Http\Controllers;

use App\Model\HomeSlider;
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
        $sliders = HomeSlider::with('image_slider')->whereNull('parent_id')->firstOrFail();
        return view('front.pages.index',compact('sliders'));
    }
}
