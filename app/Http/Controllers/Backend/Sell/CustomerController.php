<?php

namespace App\Http\Controllers\Backend\Sell;

use App\Model\City;
use App\Model\Commune;
use App\Model\Country;
use App\Model\Customer;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Vinkla\Hashids\HashidsManager;

class CustomerController extends Controller
{

    public $hashid;

    public $route = 'admin.sells.customers.';

    function __construct(HashidsManager $hashid)
    {
        $this->middleware('auth:admin');
        $this->hashid = $hashid;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::orderBy('created_at')->paginate(20);
        return view('backend.sell.customer.index', compact('customers'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::with('cities')->whereNull('country_id')
            ->whereNull('city_id')->pluck('name', 'id')->toArray();
        $communes = Commune::with('city')
            ->whereNotNull('country_id')
            ->whereNotNull('city_id')->pluck('name', 'id')->toArray();
        $cities = City::with('country')->whereNotNull('country_id')
            ->whereNull('city_id')->pluck('name', 'id')->toArray();
        return view('backend.sell.customer.create', compact('countries', 'communes', 'cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->all();
            $validator = Validator::make($data, Customer::rules(), Customer::messages());
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $customer = Customer::with('addresses')->create($data);
            if (!$customer) {
                DB::rollBack();
                return redirect()->back()->with('error', 'Customer can not create');
            }
            DB::commit();
            return redirect()->route($this->route . 'index')->with('success', 'Customer created successfully');
        } catch (ModelNotFoundException $exception) {
            throw new ModelNotFoundException();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Customer|\Illuminate\Database\Eloquent\Builder|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $decoded = $this->hashid->decode($id);
        $id = @$decoded[0];
        if ($id === null) {
            return redirect()->route($this->route . 'index')->with('error', 'Customer not found');
        }
        $customer = Customer::with('purchases', 'purchases.purchase_items', 'addresses')->find($id);
        $sale = $customer->purchases->groupBy('customer_id');
        //return $sale;
        return view('backend.sell.customer.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $decoded = $this->hashid->decode($id);
        $id = @$decoded[0];
        if ($id === null) {
            return redirect()->route($this->route . 'index')->with('error', 'Customer not found');
        }
        $countries = Country::with('cities')->whereNull('country_id')
            ->whereNull('city_id')->pluck('name', 'id')->toArray();
        $communes = Commune::with('city')
            ->whereNotNull('country_id')
            ->whereNotNull('city_id')->pluck('name', 'id')->toArray();
        $cities = City::with('country')->whereNotNull('country_id')
            ->whereNull('city_id')->pluck('name', 'id')->toArray();
        $customer = Customer::with('addresses')->find($id);
        //return $customer;
        return view('backend.sell.customer.edit', compact('customer', 'countries', 'cities', 'communes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $decoded = $this->hashid->decode($id);
            $id = @$decoded[0];
            if ($id === null) {
                return redirect()->route($this->route . 'index')->with('error', 'Customer not found');
            }
            $data = $request->all();
            $validator = Validator::make($data, Customer::rules($id), Customer::messages());
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $customer = Customer::with('addresses')->find($id);
            $update = $customer->update($data);
            if (!$update) {
                DB::rollBack();
                return redirect()->back()->with('error', 'Customer not found');
            }
            DB::commit();
            return redirect()->route($this->route . 'index')->with('success', 'Customer updated successfully');
        } catch (ModelNotFoundException $exception) {
            throw new ModelNotFoundException();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $decoded = $this->hashid->decode($id);
            $id = @$decoded[0];
            if ($id === null) {
                return redirect()->route($this->route . 'index')->with('error', 'Customer not found');
            }
            $customer = Customer::with('addresses')->find($id);
            $customer->delete();
            return redirect()->route($this->route . 'index')->with('success', 'Customer deleted successfully');
        } catch (ModelNotFoundException $exception) {
            throw new ModelNotFoundException();
        }
    }
}
