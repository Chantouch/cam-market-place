<?php

namespace App\Http\Controllers\Customer;

use App\Model\Category;
use App\Model\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:customer');
    }

    public function index()
    {
        $user = $this->auth()->user();
        $categories = Category::with('sub_category', 'products')->where('status', 1)->whereNull('category_id')->get();
        return view('customer.pages.cart', compact('categories', 'user'));
    }

    public function auth()
    {
        return auth()->guard('customer');
    }
}