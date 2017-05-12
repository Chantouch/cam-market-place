<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Attribute;
use App\Model\SubAttribute;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Validator;
use DB;
use Vinkla\Hashids\HashidsManager;

class AttributeController extends Controller
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
        $attributes = Attribute::whereNull('parent_id')->paginate(10);
        return view('backend.pages.catalog.attribute.index', compact('attributes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $attributes = Attribute::where('status', 1)->whereNull('parent_id')->pluck('name', 'id');
        return view('backend.pages.catalog.attribute.create', compact('attributes'));
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
            if ($request->has('parent_id')) {
                $validator = Validator::make($data, SubAttribute::rules(), SubAttribute::messages());
                if ($validator->fails()) {
                    return back()->withInput()->withErrors($validator);
                }
                $records = SubAttribute::count();
                $current_id = 1;
                if (!$records == 0) {
                    $current_id = SubAttribute::orderBy('id', 'DESC')->first()->id + 1;
                }
                $data['position'] = $current_id;
                $create = SubAttribute::create($data);
                if (!$create) {
                    return back()->with('error', 'Your attribute can not add to our system right now. Plz try again later.');
                }
            } else {
                $validator = Validator::make($data, Attribute::rules(), Attribute::messages());
                if ($validator->fails()) {
                    return back()->withInput()->withErrors($validator);
                }
                $create = Attribute::create($data);
                if (!$create) {
                    return back()->with('error', 'Your attribute can not add to our system right now. Plz try again later.');
                }
            }
            return redirect()->route('admin.attributes.index')->with('success', 'Attribute added successfully.');
        } catch (ModelNotFoundException $exception) {
            return back()->with('error', 'Your attribute can not add to our system right now. Plz try again later.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\ $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $decoded = $this->hashid->decode($id);
        $id = @$decoded[0];
        if ($id === null) {
            return redirect()->route('admin.attributes.index')->with('error', 'We can not find attribute with that id, please try the other');
        }
        $attribute = Attribute::with('sub_attribute')->whereNull('parent_id')->find($id);
        return view('backend.pages.catalog.attribute.show', compact('attribute'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\ $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $decoded = $this->hashid->decode($id);
        $id = @$decoded[0];
        if ($id === null) {
            return redirect()->route('admin.attributes.index')->with('error', 'We can not find attribute with that id, please try the other');
        }
        $attributes = Attribute::where('status', 1)->whereNull('parent_id')->pluck('name', 'id');
        $attribute = SubAttribute::find($id);
        return view('backend.pages.catalog.attribute.edit', compact('attribute', 'attributes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Model\ $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $data = $request->all();
            $decoded = $this->hashid->decode($id);
            $id = @$decoded[0];
            if ($id === null) {
                return redirect()->route('admin.attributes.index')->with('error', 'We can not find attribute with that id, please try the other');
            }
            $attribute = Attribute::whereNull('parent_id')->find($id);
            $validator = Validator::make($data, Attribute::rules(), Attribute::messages());
            if ($validator->fails()) {
                return back()->withInput()->withErrors($validator);
            }
            $update = $attribute->update($data);
            if (!$update) {
                DB::rollBack();
                return back()->with('error', 'Your attribute can not add to your system right now. Plz try again later.');
            }
            DB::commit();
            return redirect()->route('admin.attributes.index')->with('success', 'Attribute added successfully.');
        } catch (ModelNotFoundException $exception) {
            return back()->with('error', 'Your attribute can not add to your system right now. Plz try again later.');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\ $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $decoded = $this->hashid->decode($id);
        $id = @$decoded[0];
        if ($id === null) {
            return redirect()->route('admin.attributes.index')->with('error', 'We can not find attribute with that id, please try the other');
        }
        $attribute = Attribute::whereNull('parent_id')->find($id);
        $delete = $attribute->delete();
        if (!$delete) {
            return back()->with('error', 'Your attribute can not delete from your system right now. Plz try again later.');
        }
        return redirect()->route('admin.attributes.index')->with('success', 'Attribute deleted successfully');
    }
}
