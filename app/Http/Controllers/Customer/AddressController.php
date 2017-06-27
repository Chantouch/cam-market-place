<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\BaseController;
use App\Model\Address;
use App\Model\City;
use App\Model\Country;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Vinkla\Hashids\HashidsManager;

class AddressController extends BaseController
{

    public $hashid;

    /**
     * AddressController constructor.
     * @param HashidsManager $hashid
     */
    public function __construct(HashidsManager $hashid)
    {
        parent::__construct();
        $this->middleware('auth:customer');
        $this->hashid = $hashid;
    }

    /**
     * @return mixed
     */
    public function auth()
    {
        return auth()->guard('customer');
    }

    /**
     * @return mixed
     */
    public function id()
    {
        return $this->auth()->id();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addresses = Address::where('customer_id', $this->id())->get();
        return view('customer.address.index', compact('addresses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::whereNull('country_id')->whereNull('city_id')->pluck('name', 'id')->toArray();
        $cities = City::whereNotNull('country_id')->whereNull('city_id')->pluck('name', 'id')->toArray();
        return view('customer.address.create', compact('countries', 'cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $notification_error = [
                'message' => 'Thanks! Your address could not be saved.',
                'alert-type' => 'error'
            ];
            $notification_success = [
                'message' => 'Thanks! Your address added successfully.',
                'alert-type' => 'success'
            ];
            DB::beginTransaction();
            $data = $request->all();
            $validator = Validator::make($data, Address::rules(), Address::messages());
            if ($validator->fails()) {
                return back()->withInput()->withErrors($validator);
            }
            $data['customer_id'] = $this->id();
            $create = Address::create($data);
            if (!$create) {
                DB::rollBack();
                return redirect()->back()->withInput()->with($notification_error);
            }
            DB::commit();
            return redirect()->route('customers.addresses.index')->with($notification_success);
        } catch (ModelNotFoundException $exception) {
            DB::rollBack();
            return redirect()->back()->withInput()->with($notification_error);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Address $address
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $decoded = $this->hashid->decode($id);
            $id = @$decoded[0];
            if ($id === null) {
                return redirect()->back()->with('error', 'We can not find address with that id, please try the other');
            }
            $countries = Country::whereNull('country_id')->whereNull('city_id')->pluck('name', 'id')->toArray();
            $cities = City::whereNotNull('country_id')->whereNull('city_id')->pluck('name', 'id')->toArray();
            $address = Address::find($id);
            return view('customer.address.edit', compact('countries', 'cities', 'address'));
        } catch (ModelNotFoundException $exception) {
            return redirect()->back()->with('error', 'We can not find address with that id, please try the other');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $decoded = $this->hashid->decode($id);
            $id = @$decoded[0];
            if ($id === null) {
                return redirect()->back()->with('error', 'We can not find address with that id, please try the other');
            }
            $data = $request->all();
            $notification_error = [
                'message' => 'Thanks! Your address could not be saved.',
                'alert-type' => 'error'
            ];
            $notification_success = [
                'message' => 'Thanks! Your address updated successfully.',
                'alert-type' => 'success'
            ];
            DB::beginTransaction();
            $validator = Validator::make($data, Address::rules(), Address::messages());
            if ($validator->fails()) {
                return back()->withInput()->withErrors($validator);
            }
            $address = Address::find($id);
            $update = $address->update($data);
            if (!$update) {
                DB::rollBack();
                return redirect()->back()->with($notification_error);
            }
            DB::commit();
            return redirect()->route('customers.addresses.index')->with($notification_success);
        } catch (ModelNotFoundException $exception) {
            return redirect()->back()->with('error', 'We can not proceed with your transaction, please try again later.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $decoded = $this->hashid->decode($id);
            $id = @$decoded[0];
            if ($id === null) {
                return redirect()->back()->with('error', 'We can not find address with that id, please try the other');
            }

            $notification_error = [
                'message' => 'Thanks! Your address could not be saved.',
                'alert-type' => 'error'
            ];
            $notification_success = [
                'message' => 'Thanks! Your address updated successfully.',
                'alert-type' => 'success'
            ];
            DB::beginTransaction();
            $address = Address::find($id);
            $delete = $address->delete();
            if (!$delete) {
                DB::rollBack();
                return redirect()->back()->with($notification_error);
            }
            DB::commit();
            return redirect()->route('customers.addresses.index')->with($notification_success);
        } catch (ModelNotFoundException $exception) {
            return redirect()->back()->with('error', 'We can not proceed with your transaction, please try again later.');
        }
    }
}
