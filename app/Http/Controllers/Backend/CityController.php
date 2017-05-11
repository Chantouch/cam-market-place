<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\City;
use App\Model\Country;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Validator;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::where('status', 1)->whereNotNull('country_id')->whereNull('city_id')->paginate(10);
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
     * @param  \App\Model\City $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        return view('backend.pages.city.show', compact('city'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\City $city
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)
    {
        $countries = Country::where('status', 1)->where('country_id', null)->pluck('name', 'id');
        return view('backend.pages.city.edit', compact('city','countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Model\City $city
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
        try {
            $data = $request->all();
            $validator = Validator::make($data, City::rules(), City::messages());
            if ($validator->fails()) {
                return back()->withInput()->withErrors($validator);
            }
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
    public function destroy(City $city)
    {
        $delete = $city->delete();
        if (!$delete) {
            return back()->with('error', 'Your city can not delete from your system right now. Plz try again later.');
        }
        return redirect()->route('admin.cities.index')->with('success', 'City deleted successfully');
    }
}
