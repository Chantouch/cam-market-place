<?php

namespace App\Http\Controllers\Backend\Sell;

use App\Model\Product;
use App\Model\Purchase;
use App\Model\PurchaseOrder;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
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
        $order_status = \Helper::status_payment();
        $purchase = Purchase::where('status', 4);
        $count_order = $purchase->count();
        $order = Purchase::with('purchase_items.product', 'customer')->find($id);
        $purchase_item = PurchaseOrder::wherePurchaseId($order->id)->get();
        $product_id = [];
        foreach ($purchase_item as $products) {
            array_push($product_id, $products->product_id);
        }
        //dd($product_id);
        $total_pay = Purchase::where('customer_id', $order->customer->id)
            ->where('status', 4)->sum('total');
        return view('backend.sell.order.show',
            compact('order', 'order_status', 'count_order', 'total_pay')
        );
    }

    /**
     * @param Request $request
     * @param $id
     * @return bool|\Illuminate\Http\RedirectResponse
     */
    public function orderStatus(Request $request, $id)
    {
        try {
            $data = $request->all();
            DB::beginTransaction();
            $this->validate($request, [
                'status' => 'required|integer|in:1,2,3,4,5,6'
            ]);
            $decoded = $this->hashid->decode($id);
            $id = @$decoded[0];
            if ($id === null) {
                return redirect()->route('admin.sells.orders.index')->with('error', 'We can not find order with that id, please try the other');
            }
            $order = Purchase::with('purchase_items.product')->find($id);
            $purchase_item = PurchaseOrder::wherePurchaseId($order->id)->get();
            if (isset($request->status)) {
                if ($request->status != $order->status) {
                    if ($request->status == 4) {
                        foreach ($purchase_item as $products) {
                            Product::whereId($products->product_id)->decrement('qty', $products->qty);
                        }
                    } else {
                        if ($order->status == 4) {
                            foreach ($purchase_item as $products) {
                                Product::whereId($products->product_id)->increment('qty', $products->qty);
                            }
                        }
                    }
                }
            }
            $update = $order->update($data);
            if (!$update) {
                DB::rollBack();
                return redirect()->back()->with('error', 'We can not perform your update now, Please contact admin support!');
            }
            return redirect()->back()->with('success', 'Payment status updated successfully!');
        } catch (ModelNotFoundException $exception) {
            return redirect()->route('admin.sells.orders.index')->with('error', 'We can not find order with that id, please try the other');
        }
    }


    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addUpdatePrivateNote(Request $request, $id)
    {
        try {
            $data = $request->all();
            DB::beginTransaction();
            $this->validate($request, [
                'private_note' => 'required|string|max:255'
            ]);
            $decoded = $this->hashid->decode($id);
            $id = @$decoded[0];
            if ($id === null) {
                return redirect()->route('admin.sells.orders.index')->with('error', 'We can not find order with that id, please try the other');
            }
            $order = Purchase::with('customer')->find($id);
            $update = $order->customer->update($data);
            if (!$update) {
                DB::rollBack();
                return redirect()->back()->with('error', 'We can not perform your update now, Please contact admin support!');
            }
            return redirect()->back()->with('success', 'Private note updated successfully!');
        } catch (ModelNotFoundException $exception) {
            return redirect()->route('admin.sells.orders.index')->with('error', 'We can not find order with that id, please try the other');
        }
    }
    public function show_invoice($id){
       dd("hi please come here");
    }
}
