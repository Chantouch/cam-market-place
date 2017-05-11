<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\City;
use App\Model\Commune;
use App\Model\Country;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Validator;

class CommuneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $communes = Commune::where('status', 1)->whereNotNull('country_id')->whereNotNull('city_id')->paginate(1);
        return view('backend.pages.commune.index', compact('communes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::where('status', 1)->where('country_id', null)->pluck('name', 'id');
        $cities = City::where('status', 1)->where('country_id', !null)->where('city_id', null)->pluck('name', 'id');
        return view('backend.pages.commune.create', compact('countries', 'cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        try {
            $data = $request->all();
            $validator = Validator::make($data, Commune::rules(), Commune::messages());
            if ($validator->fails()) {
                return back()->withInput()->withErrors($validator);
            }
            $create = Commune::create($data);
            if (!$create) {
                return back()->with('error', 'Your commune can not add to our system right now. Plz try again later.');
            }
            return redirect()->route('admin.communes.index')->with('success', 'Country added successfully.');
        } catch (ModelNotFoundException $exception) {
            return back()->with('error', 'Your commune can not add to our system right now. Plz try again later.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Commune $commune
     * @return \Illuminate\Http\Response
     */
    public function show(Commune $commune)
    {
        $countries = Country::where('status', 1)->where('country_id', null)->pluck('name', 'id');
        $cities = City::where('status', 1)->where('country_id', !null)->where('city_id', null)->pluck('name', 'id');
        return view('backend.pages.commune.show', compact('commune', 'countries', 'cities'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Commune $commune
     * @return \Illuminate\Http\Response
     */
    public function edit(Commune $commune)
    {
        $countries = Country::where('status', 1)->where('country_id', null)->pluck('name', 'id');
        $cities = City::where('status', 1)->where('country_id', !null)->where('city_id', null)->pluck('name', 'id');
        return view('backend.pages.commune.edit', compact('commune', 'countries', 'cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Model\Commune $commune
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update(Request $request, Commune $commune)
    {
        try {
            $data = $request->all();
            $validator = Validator::make($data, Commune::rules(), Commune::messages());
            if ($validator->fails()) {
                return back()->withInput()->withErrors($validator);
            }
            $update = $commune->update($data);
            if (!$update) {
                return back()->with('error', 'Your commune can not add to your system right now. Plz try again later.');
            }
            return redirect()->route('admin.communes.index')->with('success', 'Country added successfully.');
        } catch (ModelNotFoundException $exception) {
            return back()->with('error', 'Your commune can not add to your system right now. Plz try again later.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Commune $commune
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commune $commune)
    {
        $delete = $commune->delete();
        if (!$delete) {
            return back()->with('error', 'Your commune can not delete from your system right now. Plz try again later.');
        }
        return redirect()->route('admin.communes.index')->with('success', 'City deleted successfully');
    }
}
