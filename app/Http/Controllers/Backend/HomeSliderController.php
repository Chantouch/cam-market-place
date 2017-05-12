<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\HomeSlider;
use App\Model\ImageSlider;
use function GuzzleHttp\Psr7\str;
use Validator;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Vinkla\Hashids\HashidsManager;
use Intervention\Image\ImageManagerStatic as Image;

class HomeSliderController extends Controller
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
        $sliders = HomeSlider::with('image_slider')->whereNull('parent_id')->first();
        if (!empty($sliders)) {
            return $this->show($sliders->id);
        }
        return view('backend.pages.setting.home-slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.setting.home-slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $slider = HomeSlider::with('image_slider')->whereNull('parent_id')->first();
        try {
            DB::beginTransaction();
            $data = $request->all();
            if ($request->has('speed')) {
                $validator = Validator::make($data, HomeSlider::rules(), HomeSlider::messages());
                if ($validator->fails()) {
                    return redirect()->route('admin.home-sliders.index')->withInput()->withErrors($validator);
                }
                $setting = HomeSlider::create($data);
                if (!$setting) {
                    DB::rollBack();
                    return back()->with('error', 'Your settings can not add to our system right now. Plz try again later.');
                }
            } else {
                $validator = Validator::make($data, ImageSlider::rules(), ImageSlider::messages());
                if ($validator->fails()) {
                    return back()->withInput()->withErrors($validator);
                }
                $data['parent_id'] = $slider->id;
                $img_path = 'uploads/home-slider/img/';
                $des_path = public_path($img_path);
                if ($request->hasFile('img_name')) {
                    if ($request->file('img_name')->isValid()) {
                        if (!file_exists($des_path)) {
                            mkdir($des_path, 0777, true);
                        }
                        $img_name = Image::make($request->file('img_name'))->resize(16000, 500);
                        //====remove string from name ====//
                        $no_space = preg_replace('/\s+/', '_', strtolower($request->name));
                        $file_name = uniqid(time() . '_' . $no_space . '_' . 'home_slider' . '_') . '.' . $request->file('img_name')->getClientOriginalExtension();
                        $img_name->save($des_path . '/' . $file_name, '100');
                        $data['img_path'] = $img_path;
                    }
                }
                $slide_list = ImageSlider::create($data);
                if (!$slide_list) {
                    DB::rollBack();
                    return back()->with('error', 'Your settings can not add to our system right now. Plz try again later.');
                }
            }
            DB::commit();
            return redirect()->route('admin.home-sliders.index')->with('success', 'Settings saved successfully.');
        } catch (ModelNotFoundException $exception) {
            return redirect()->route('admin.home-sliders.index')->with('error', 'Error on saving settings.');
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
        $sliders = HomeSlider::with('image_slider')->find($id);
        return view('backend.pages.setting.home-slider.index', compact('sliders'));
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
            return redirect()->route('admin.home-sliders.index')->with('error', 'We can not find city with that id, please try the other');
        }
        $slider = ImageSlider::with('home_slider')->find($id);
        return view('backend.pages.setting.home-slider.edit', compact('slider'));
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
            $decoded = $this->hashid->decode($id);
            $id = @$decoded[0];
            if ($id === null) {
                return redirect()->route('admin.home-sliders.index')->with('error', 'We can not find city with that id, please try the other');
            }
            $home_slider = HomeSlider::with('image_slider')->whereNull('parent_id')->find($id);
            $data = $request->all();
            $validator = Validator::make($data, HomeSlider::rules(), HomeSlider::messages());
            if ($validator->fails()) {
                return back()->withInput()->withErrors($validator);
            }
            $update = $home_slider->update($data);
            if (!$update) {
                return back()->with('error', 'Your country can not add to your system right now. Plz try again later.');
            }
            return redirect()->route('admin.home-sliders.index')->with('success', 'HomeSlider added successfully.');
        } catch (ModelNotFoundException $exception) {
            return back()->with('error', 'Your country can not add to your system right now. Plz try again later.');
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
            return redirect()->route('admin.home-sliders.index')->with('error', 'We can not find slider with that id, please try the other');
        }
        $currency = HomeSlider::find($id);
        $delete = $currency->delete();
        if (!$delete) {
            return back()->with('error', 'Your slider can not delete from your system right now. Plz try again later.');
        }
        return redirect()->route('admin.home-sliders.index')->with('success', 'Slider deleted successfully');
    }
}
