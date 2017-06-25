<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\BaseController;

class HomeController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth:partner');
    }

    /**
     * @return mixed
     */
    public function auth()
    {
        return auth()->guard('partner');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $user = $this->auth()->user();
        return view('partner.dashboard', compact('user'));
    }
}
