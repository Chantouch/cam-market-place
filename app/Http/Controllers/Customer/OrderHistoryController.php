<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

class OrderHistoryController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth:customer');
    }

    
}
