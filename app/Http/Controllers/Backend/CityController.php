<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\City;
use App\Model\Country;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Validator;
use Vinkla\Hashids\HashidsManager;

class CityController extends Controller
{
    public $hashid;

    public function __construct(HashidsManager $hashid)
    {
        $this->hashid = $hashid;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::whereNotNull('country_id')->whereNull('city_id')->paginate(10);
        return view('backend.pages.city.index', compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::where('status', 1)->where('country_id', null)->pluck('name', 'id');
        return view('backend.pages.city.create', compact('countries'));
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
            $data = $request->all();
            $validator = Validator::make($data, City::rules(), City::messages());
            if ($validator->fails()) {
                return back()->withInput()->withErrors($validator);
            }
            $create = City::create($data);
            if (!$create) {
                return back()->with('error', 'Your country can not add to our system right now. Plz try again later.');
            }
            return redirect()->route('admin.cities.index')->with('success', 'Country added successfully.');
        } catch (ModelNotFoundException $exception) {
            return back()->with('error', 'Your country can not add to our system right now. Plz try again later.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $decoded = $this->hashid->decode($id);
        $id = @$decoded[0];
        if ($id === null) {
            return redirect()->route('admin.cities.index')->with('error', 'We can not find city with that id, please try the other');
        }
        $city = City::whereNotNull('country_id')->whereNull('city_id')->find($id);
        return view('backend.pages.city.show', compact('city'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $decoded = $this->hashid->decode($id);
        $id = @$decoded[0];
        if ($id === null) {
            return redirect()->route('admin.cities.index')->with('error', 'We can not find employee with that id, please try the other');
        }
        $countries = City::where('status', 1)->where('country_id', null)->pluck('name', 'id');
        $city = City::whereNotNull('country_id')->whereNull('city_id')->find($id);
        return view('backend.pages.city.edit', compact('city', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $decoded = $this->hashid->decode($id);
            $id = @$decoded[0];
            if ($id === null) {
                return redirect()->route('admin.cities.index')->with('error', 'We can not find city with that id, please try the other');
            }
            $data = $request->all();
            $validator = Validator::make($data, City::rules(), City::messages());
            if ($validator->fails()) {
                return back()->withInput()->withErrors($validator);
            }
            $city = City::whereNotNull('country_id')->whereNull('city_id')->find($id);
            $update = $city->update($data);
            if (!$update) {
                return back()->with('error', 'Your country can not add to your system right now. Plz try again later.');
            }
            return redirect()->route('admin.cities.index')->with('success', 'Country added successfully.');
        } catch (ModelNotFoundException $exception) {
            return back()->with('error', 'Your country can not add to your system right now. Plz try again later.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\City $city
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $decoded = $this->hashid->decode($id);
            $id = @$decoded[0];
            if ($id === null) {
                return redirect()->route('admin.cities.index')->with('error', 'We can not find city with that id, please try the other');
            }
            $city = City::whereNotNull('country_id')->whereNull('city_id')->find($id);
            $delete = $city->delete();
            if (!$delete) {
                return back()->with('error', 'Your city can not delete from your system right now. Plz try again later.');
            }
            return redirect()->route('admin.cities.index')->with('success', 'City deleted successfully');
        } catch (ModelNotFoundException $exception) {
            return redirect()->route('admin.cities.index')->with('error', 'We can not find city with that id, please try the other');
        }
    }
}
