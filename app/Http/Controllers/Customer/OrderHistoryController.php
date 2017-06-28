<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\BaseController;
use App\Model\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderHistoryController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth:customer');
    }

    /**
     * @return mixed
     */
    public function auth()
    {
        return Auth::guard('customer')->user();
    }

    public function index()
    {
        $histories = Purchase::where('customer_id', $this->auth()->id)->get();
        return view('customer.order.index', compact('histories'));
    }
}
