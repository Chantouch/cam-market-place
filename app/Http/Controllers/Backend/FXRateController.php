<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\FXRate;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Vinkla\Hashids\HashidsManager;
use Validator;

class FXRateController extends Controller
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
        $rates = FXRate::paginate(10);
        return view('backend.pages.settings.ex-rate.index', compact('rates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.settings.ex-rate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        try {
            $data = $request->all();
            $validator = Validator::make($data, FXRate::rules(), FXRate::messages());
            if ($validator->fails()) {
                return back()->withInput()->withErrors($validator);
            }
            $create = FXRate::create($data);
            if (!$create) {
                return back()->with('error', 'Your exchange rate can not add to our system right now. Plz try again later.');
            }
            return redirect()->route('admin.settings.rates.index')->with('success', 'FXRate added successfully.');
        } catch (ModelNotFoundException $exception) {
            return back()->with('error', 'Your exchange rate can not add to our system right now. Plz try again later.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\$id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $decoded = $this->hashid->decode($id);
        $id = @$decoded[0];
        if ($id === null) {
            return redirect()->route('admin.settings.rates.index')->with('error', 'We can not find exchange rate with that id, please try the other');
        }
        $ex_rate = FXRate::find($id);
        return view('backend.pages.settings.ex-rate.show', compact('ex_rate'));
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
            return redirect()->route('admin.settings.rates.index')->with('error', 'We can not find exchange rate with that id, please try the other');
        }
        $ex_rate = FXRate::find($id);
        return view('backend.pages.settings.ex-rate.edit', compact('ex_rate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\$id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        try {
            $data = $request->all();
            $decoded = $this->hashid->decode($id);
            $id = @$decoded[0];
            if ($id === null) {
                return redirect()->route('admin.settings.rates.index')->with('error', 'We can not find exchange rate with that id, please try the other');
            }
            $ex_rate = FXRate::find($id);
            $validator = Validator::make($data, FXRate::rules($id), FXRate::messages());
            if ($validator->fails()) {
                return back()->withInput()->withErrors($validator);
            }
            $update = $ex_rate->update($data);
            if (!$update) {
                return back()->with('error', 'Your exchange rate can not add to your system right now. Plz try again later.');
            }
            return redirect()->route('admin.settings.rates.index')->with('success', 'FXRate added successfully.');
        } catch (ModelNotFoundException $exception) {
            return back()->with('error', 'Your exchange rate can not add to your system right now. Plz try again later.');
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
            return redirect()->route('admin.settings.rates.index')->with('error', 'We can not find exchange rate with that id, please try the other');
        }
        $ex_rate = FXRate::find($id);
        $delete = $ex_rate->delete();
        if (!$delete) {
            return back()->with('error', 'Your exchange rate can not delete from your system right now. Plz try again later.');
        }
        return redirect()->route('admin.settings.rates.index')->with('success', 'FXRate deleted successfully');
    }
}
