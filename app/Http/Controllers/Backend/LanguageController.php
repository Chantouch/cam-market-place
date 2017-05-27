<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Language;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Validator;
use Vinkla\Hashids\HashidsManager;

class LanguageController extends Controller
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
        $languages = Language::paginate(10);
        return view('backend.pages.setting.language.index', compact('languages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.setting.language.create');
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
            $validator = Validator::make($data, Language::rules(), Language::messages());
            if ($validator->fails()) {
                return back()->withInput()->withErrors($validator);
            }
            $create = Language::create($data);
            if (!$create) {
                return back()->with('error', 'Your language can not add to our system right now. Plz try again later.');
            }
            return redirect()->route('admin.settings.languages.index')->with('success', 'Language added successfully.');
        } catch (ModelNotFoundException $exception) {
            return back()->with('error', 'Your language can not add to our system right now. Plz try again later.');
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
            return redirect()->route('admin.settings.languages.index')->with('error', 'We can not find language with that id, please try the other');
        }
        $language = Language::find($id);
        return view('backend.pages.setting.language.show', compact('language'));
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
            return redirect()->route('admin.settings.languages.index')->with('error', 'We can not find language with that id, please try the other');
        }
        $language = Language::find($id);
        return view('backend.pages.setting.language.edit', compact('language'));
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
                return redirect()->route('admin.settings.languages.index')->with('error', 'We can not find language with that id, please try the other');
            }
            $language = Language::find($id);
            $validator = Validator::make($data, Language::rules(), Language::messages());
            if ($validator->fails()) {
                return back()->withInput()->withErrors($validator);
            }
            $update = $language->update($data);
            if (!$update) {
                return back()->with('error', 'Your language can not add to your system right now. Plz try again later.');
            }
            return redirect()->route('admin.settings.languages.index')->with('success', 'Language added successfully.');
        } catch (ModelNotFoundException $exception) {
            return back()->with('error', 'Your language can not add to your system right now. Plz try again later.');
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
            return redirect()->route('admin.settings.languages.index')->with('error', 'We can not find language with that id, please try the other');
        }
        $language = Language::find($id);
        $delete = $language->delete();
        if (!$delete) {
            return back()->with('error', 'Your language can not delete from your system right now. Plz try again later.');
        }
        return redirect()->route('admin.settings.languages.index')->with('success', 'Language deleted successfully');
    }
}
