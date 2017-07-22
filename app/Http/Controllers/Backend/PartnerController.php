<?php

namespace App\Http\Controllers\Backend;

use App\Model\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Vinkla\Hashids\HashidsManager;

class PartnerController extends Controller
{

    public $hashid;

    public $route = 'admin.partners.';

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
        $partners = Partner::where('role', 2)->orderBy('created_at')->paginate(20);
        return view('backend.pages.partner.index', compact('partners'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Partner|\Illuminate\Database\Eloquent\Builder|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $decoded = $this->hashid->decode($id);
        $id = @$decoded[0];
        if ($id === null) {
            return redirect()->route($this->route . 'index')->with('error', 'Partner not found');
        }
        $partner = Partner::find($id);
        return $partner;
        //return view('backend.partner.show', compact('partner'));
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
            return redirect()->route($this->route . 'index')->with('error', 'Partner not found');
        }
        $customer = Partner::find($id);
        return $customer;
        //return view('backend.sell.customer.show', compact('customer'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
