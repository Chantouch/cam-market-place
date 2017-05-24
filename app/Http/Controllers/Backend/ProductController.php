<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Product;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Vinkla\Hashids\HashidsManager;
use Validator;
use DB;

class ProductController extends Controller
{
    public $hashid;

    public function __construct(HashidsManager $hashid)
    {
        $this->hashid = $hashid;
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $products = Product::paginate(10);
            return view('backend.pages.catalog.product.index', compact('products'));
        } catch (ModelNotFoundException $exception) {
            return redirect()->route('admin.home')->with('error', 'There is something wrong with your request.');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.catalog.product.create');
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
            $validator = Validator::make($data, Product::rules(), Product::messages());
            if ($validator->fails()) {
                return back()->withInput()->withErrors($validator);
            }
            $create = Product::create($data);
            if (!$create) {
                return back()->with('error', 'Your product can not add to our system right now. Plz try again later.');
            }
            return redirect()->route('admin.catalogs.products.index')->with('success', 'Product added successfully.');
        } catch (ModelNotFoundException $exception) {
            return back()->with('error', 'Your product can not add to our system right now. Plz try again later.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Product $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $decoded = $this->hashid->decode($id);
        $id = @$decoded[0];
        if ($id === null) {
            return redirect()->route('admin.catalogs.products.index')->with('error', 'We can not find product with that id, please try the other');
        }
        $product = Product::find($id);
        return view('backend.pages.catalog.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Product $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $decoded = $this->hashid->decode($id);
        $id = @$decoded[0];
        if ($id === null) {
            return redirect()->route('admin.catalogs.products.index')->with('error', 'We can not find product with that id, please try the other');
        }
        $product = Product::with('city')->find($id);
        return view('backend.pages.catalog.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Model\Product $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        try {
            $data = $request->all();
            $decoded = $this->hashid->decode($id);
            $id = @$decoded[0];
            if ($id === null) {
                return redirect()->route('admin.catalogs.products.index')->with('error', 'We can not find product with that id, please try the other');
            }
            $product = Product::find($id);
            $validator = Validator::make($data, Product::rules(), Product::messages());
            if ($validator->fails()) {
                return back()->withInput()->withErrors($validator);
            }
            $update = $product->update($data);
            if (!$update) {
                return back()->with('error', 'Your product can not add to your system right now. Plz try again later.');
            }
            return redirect()->route('admin.catalogs.products.index')->with('success', 'Product updated successfully.');
        } catch (ModelNotFoundException $exception) {
            return back()->with('error', 'Your product can not add to your system right now. Plz try again later.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Product $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $decoded = $this->hashid->decode($id);
        $id = @$decoded[0];
        if ($id === null) {
            return redirect()->route('admin.catalogs.products.index')->with('error', 'We can not find product with that id, please try the other');
        }
        $product = Product::find($id);
        $delete = $product->delete();
        if (!$delete) {
            return back()->with('error', 'Your product can not delete from your system right now. Plz try again later.');
        }
        return redirect()->route('admin.catalogs.products.index')->with('success', 'Product deleted successfully');
    }
}
