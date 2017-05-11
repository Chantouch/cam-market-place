<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Currency;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Validator;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currencies = Currency::where('status', 1)->paginate(10);
        return view('backend.pages.currency.index', compact('currencies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.currency.create');
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
            $validator = Validator::make($data, Currency::rules(), Currency::messages());
            if ($validator->fails()) {
                return back()->withInput()->withErrors($validator);
            }
            $create = Currency::create($data);
            if (!$create) {
                return back()->with('error', 'Your currency can not add to our system right now. Plz try again later.');
            }
            return redirect()->route('admin.currencies.index')->with('success', 'Currency added successfully.');
        } catch (ModelNotFoundException $exception) {
            return back()->with('error', 'Your currency can not add to our system right now. Plz try again later.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function show(Currency $currency)
    {
        return view('backend.pages.currency.show', compact('currency'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function edit(Currency $currency)
    {
        return view('backend.pages.currency.edit', compact('currency'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Currency  $currency
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Currency $currency)
    {
        try {
            $data = $request->all();
            $validator = Validator::make($data, Currency::rules(), Currency::messages());
            if ($validator->fails()) {
                return back()->withInput()->withErrors($validator);
            }
            $update = $currency->update($data);
            if (!$update) {
                return back()->with('error', 'Your currency can not add to your system right now. Plz try again later.');
            }
            return redirect()->route('admin.currencies.index')->with('success', 'Currency added successfully.');
        } catch (ModelNotFoundException $exception) {
            return back()->with('error', 'Your currency can not add to your system right now. Plz try again later.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function destroy(Currency $currency)
    {
        $delete = $currency->delete();
        if (!$delete) {
            return back()->with('error', 'Your currency can not delete from your system right now. Plz try again later.');
        }
        return redirect()->route('admin.currencies.index')->with('success', 'Currency deleted successfully');
    }
}
