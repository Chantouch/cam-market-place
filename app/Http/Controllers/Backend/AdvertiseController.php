<?php

namespace App\Http\Controllers\Backend;

use App\Model\Advertise;
use App\Model\Image;
use App\Model\Partner;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManagerStatic as Images;
use Vinkla\Hashids\HashidsManager;

class AdvertiseController extends Controller
{

    public $hashid;

    public function __construct(HashidsManager $hashid)
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
        $types = \Helper::ads_types();
        return view('backend.promotion.ads.create', compact('partners', 'types'));
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
                $this->uploadImage($request, $path, $ads);
            } else {
                DB::rollBack();
                return redirect()->back()->with('error', "Can run your request");
            }
            DB::commit();
            return redirect()->route('admin.promotions.ads.index')->with('success', 'Ads created successfully!');
        } catch (ModelNotFoundException $exception) {
            DB::rollBack();
            return redirect()->back()->with('error', "Can run your request");
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
            return redirect()->route('admin.promotions.ads.index')->with('error', 'We can not find this ads, please try the other');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $decoded = $this->hashid->decode($id);
        $id = @$decoded[0];
        if ($id === null) {
            return redirect()->route('admin.promotions.ads.index')->with('error', 'We can not find this ads, please try the other');
        }
        $partners = Partner::with('products')->pluck('username', 'id')->toArray();
        $types = \Helper::ads_types();
        $ad = Advertise::with('image')->find($id);
        return view('backend.promotion.ads.edit', compact('ad', 'partners', 'types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $decoded = $this->hashid->decode($id);
            $id = @$decoded[0];
            if ($id === null) {
                return redirect()->route('admin.promotions.ads.index')->with('error', 'We can not find this ads, please try the other');
            }
            $ad = Advertise::with('image')->find($id);
            $data = $request->all();
            $validator = Validator::make($data, Advertise::rules(), Advertise::messages());
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $path = 'uploads/img/promotion/ads/';
            $data['expired_at'] = date('Y-m-d', strtotime($request->expired_at));
            $data['path'] = $path;
            $updated = $ad->update($data);
            if ($updated) {
                $this->uploadImage($request, $path, $ad);
            }
            DB::commit();
            return redirect()->route('admin.promotions.ads.index')->with('success', 'Ads updated successfully!');
        } catch (ModelNotFoundException $exception) {
            return redirect()->back()->with('error', 'You can not run your request now. Try again later.');
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
        $decoded = $this->hashid->decode($id);
        $id = @$decoded[0];
        if ($id === null) {
            return redirect()->route('admin.promotions.ads.index')->with('error', 'We can not find this ads, please try the other');
        }
    }

    public function uploadImage(Request $request, $path, Advertise $advertise)
    {
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
                if (!empty($advertise->image)) {
                    $old_file = [$advertise->path . $advertise->image->img_name];
                    if (File::exists($advertise->path)) {
                        File::delete($old_file);
                    }
                    $advertise->image->update([
                        'img_name' => $file_name
                    ]);
                } else {
                    $images = Image::with('imageable')
                        ->FirstOrNew(['img_name' => $file_name]);
                    $advertise->image()->save($images);
                    if (!$advertise->image()->save($images))
                        throw new ModelNotFoundException();
                }
            }
        }
    }
}
