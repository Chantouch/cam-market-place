<?php

namespace App\Http\Controllers;

use App\Model\Category;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    /**
     * BaseController constructor.
     */
    public function __construct()

    {
        $category_list = Category::with('sub_category')->where('status', 1)
            ->whereNull('category_id')->orderByDesc('name')
            ->pluck('name', 'id');
        $categories = Category::with('sub_category', 'products')->where('status', 1)->whereNull('category_id')->get();
        View::share('category_list', $category_list);
        View::share('categories', $categories);
    }
}
