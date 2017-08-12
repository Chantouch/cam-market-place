<?php

namespace App\Http\Controllers\Backend;

use App\Model\Customer;
use App\Model\Partner;
use App\Model\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $fromDateStartOfWeek = Carbon::now()->subDay()->startOfWeek()->toDateString(); // or ->format(..)
        #$fromDateStartOfMonth = Carbon::now()->subDay()->startOfMonth()->toDateString(); // or ->format(..)
        #$fromDateStartLastWeek = Carbon::now()->subWeek()->startOfWeek()->toDateString();
        #$tillDateLastWeek = Carbon::now()->subWeek()->endOfWeek()->toDateString();
        $tillDateOfWeek = Carbon::now()->subDay()->toDateString();
        #$tillDateOfMonth = Carbon::now()->subDay()->endOfMonth()->toDateString();
        $this_week_customers = Customer::with('addresses')
            ->whereBetween(DB::raw('date(created_at)'), [$fromDateStartOfWeek, $tillDateOfWeek])
            ->count();
        $this_week_partner = Partner::with('products')
            ->whereBetween(DB::raw('date(created_at)'), [$fromDateStartOfWeek, $tillDateOfWeek])
            ->count();
        $total_products_available = Product::with('categories')
            ->where('status', '=', 1)->sum('qty');
        #$this_month_meetings = Meeting::whereBetween(DB::raw('date(meeting_date)'), [$fromDateStartOfMonth, $tillDateOfMonth])->count();
        #$last_week_meetings = Meeting::whereBetween(DB::raw('date(meeting_date)'), [$fromDateStartLastWeek, $tillDateLastWeek])->count();
        #$this_week_missions = Mission::whereBetween(DB::raw('date(start_date)'), [$fromDateStartOfWeek, $tillDateOfWeek])->count();
        #$this_month_missions = Mission::whereBetween(DB::raw('date(start_date)'), [$fromDateStartOfMonth, $tillDateOfMonth])->count();
        #$last_week_missions = Mission::whereBetween(DB::raw('date(start_date)'), [$fromDateStartLastWeek, $tillDateLastWeek])->count();
        return view('backend.dashboard', compact('this_week_customers', 'this_week_partner','total_products_available'));
    }
}
