<?php

namespace App\Http\Controllers\Backend\Sell;

use App\Model\Purchase;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Vinkla\Hashids\HashidsManager;

class OrderController extends Controller
{

    public $hashid;

    /**
     * OrderController constructor.
     * @param HashidsManager $hashid
     */
    function __construct(HashidsManager $hashid)
    {
        $this->middleware('auth:admin');
        $this->hashid = $hashid;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $purchase_orders = Purchase::orderBy('created_at', 'DESC')->paginate(30);
        return view('backend.sell.order.index', compact('purchase_orders'));
    }

    public function show($id)
    {
        $decoded = $this->hashid->decode($id);
        $id = @$decoded[0];
        if ($id === null) {
            return redirect()->route('admin.sells.orders.index')->with('error', 'We can not find attribute with that id, please try the other');
        }
        $order = Purchase::with('purchase_items', 'customer')->find($id);
        return view('backend.sell.order.show', compact('order'));
    }
}
