<?php

namespace App\Http\Controllers\Backend;

use App\Model\Advertise;
use App\Model\Image;
use App\Model\Partner;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManagerStatic as Images;

class AdvertiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = Advertise::all();
        return view('backend.promotion.ads.index', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $partners = Partner::with('products')->pluck('username', 'id')->toArray();
        return view('backend.promotion.ads.create', compact('partners'));
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
            $validator = Validator::make($data, Advertise::rules(), Advertise::messages());
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $path = 'uploads/img/promotion/ads/';
            $data['expired_at'] = date('Y-m-d', strtotime($request->expired_at));
            $data['path'] = $path;
            $ads = Advertise::with('owner')->create($data);
            if ($ads) {
                if ($request->hasFile('attachment')) {
                    if ($request->file('attachment')->isValid()) {
                        $destinationPath = public_path($path);
                        if (!file_exists($destinationPath)) {
                            mkdir($destinationPath, 0777, true);
                        }
                        $rule = ['attachment' => 'mimes:jpeg,bmp,png|max:10240'];
                        $message = ['attachment.mimes' => 'The attachment must be type of jpeg, bmp, png only'];
                        $this->validate($request, $rule, $message);
                        $img = Images::make($request->file('attachment'))->resize(370, 221);
                        $extension = $request->file('attachment')->getClientOriginalExtension();
                        $file_name = uniqid() . '_' . time() . '.' . strtolower($extension);
                        $img->save($destinationPath . $file_name, 100);
                        $images = Image::with('imageable')
                            ->FirstOrNew(['img_name' => $file_name]);
                        $ads->image()->save($images);
                        if (!$ads->image()->save($images))
                            throw new ModelNotFoundException();
                    }
                }
            } else {
                DB::rollBack();
                return redirect()->back()->with('error', "Can run your request");
            }
            DB::commit();
            return redirect()->route('admin.promotions.ads.index')->with('success', 'Ads created successfully');
        } catch (ModelNotFoundException $exception) {
            DB::rollBack();
            return redirect()->back()->with('error', "Can run your request");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Advertise $advertise
     * @return \Illuminate\Http\Response
     */
    public function show(Advertise $advertise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Advertise $advertise
     * @return \Illuminate\Http\Response
     */
    public function edit(Advertise $advertise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Model\Advertise $advertise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Advertise $advertise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Advertise $advertise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advertise $advertise)
    {
        //
    }
}
