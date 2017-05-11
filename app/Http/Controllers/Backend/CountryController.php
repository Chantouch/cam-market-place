<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Country;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Validator;
use Vinkla\Hashids\HashidsManager;

class CountryController extends Controller
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
        $countries = Country::where('status', 1)->whereNull('country_id')->whereNull('city_id')->paginate(10);
        return view('backend.pages.country.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.country.create');
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
            $validator = Validator::make($data, Country::rules(), Country::messages());
            if ($validator->fails()) {
                return back()->withInput()->withErrors($validator);
            }
            $create = Country::create($data);
            if (!$create) {
                return back()->with('error', 'Your country can not add to our system right now. Plz try again later.');
            }
            return redirect()->route('admin.countries.index')->with('success', 'Country added successfully.');
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
            return redirect()->route('admin.countries.index')->with('error', 'We can not find city with that id, please try the other');
        }
        $country = Country::whereNull('country_id')->whereNull('city_id')->find($id);
        return view('backend.pages.country.show', compact('country'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\$id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $decoded = $this->hashid->decode($id);
        $id = @$decoded[0];
        if ($id === null) {
            return redirect()->route('admin.countries.index')->with('error', 'We can not find city with that id, please try the other');
        }
        $country = Country::whereNull('country_id')->whereNull('city_id')->find($id);
        return view('backend.pages.country.edit', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Model\$id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $decoded = $this->hashid->decode($id);
            $id = @$decoded[0];
            if ($id === null) {
                return redirect()->route('admin.countries.index')->with('error', 'We can not find city with that id, please try the other');
            }
            $country = Country::whereNull('country_id')->whereNull('city_id')->find($id);
            $data = $request->all();
            $validator = Validator::make($data, Country::rules(), Country::messages());
            if ($validator->fails()) {
                return back()->withInput()->withErrors($validator);
            }
            $update = $country->update($data);
            if (!$update) {
                return back()->with('error', 'Your country can not add to your system right now. Plz try again later.');
            }
            return redirect()->route('admin.countries.index')->with('success', 'Country added successfully.');
        } catch (ModelNotFoundException $exception) {
            return back()->with('error', 'Your country can not add to your system right now. Plz try again later.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\$id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $decoded = $this->hashid->decode($id);
        $id = @$decoded[0];
        if ($id === null) {
            return redirect()->route('admin.countries.index')->with('error', 'We can not find city with that id, please try the other');
        }
        $country = Country::whereNull('country_id')->whereNull('city_id')->find($id);
        $delete = $country->delete();
        if (!$delete) {
            return back()->with('error', 'Your country can not delete from your system right now. Plz try again later.');
        }
        return redirect()->route('admin.countries.index')->with('success', 'Country deleted successfully');
    }
}
