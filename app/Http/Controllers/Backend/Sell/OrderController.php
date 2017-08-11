<?php

namespace App\Http\Controllers\Backend\Sell;

use App\Model\Product;
use App\Model\Purchase;
use App\Model\Customer;
use App\Model\PurchaseOrder;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Vinkla\Hashids\HashidsManager;
// use App\Helpers\Helper;

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
        $order = Purchase::with('purchase_items.product', 'customer.addresses')->find($id);
        $payment_status = \Helper::payment_status($order->status);
        $purchase_item = PurchaseOrder::wherePurchaseId($order->id)->get();
        $product_id = [];
        foreach ($purchase_item as $products) {
            array_push($product_id, $products->product_id);
        }
        
        $total_pay = Purchase::where('customer_id', $order->customer->id)
            ->where('status', 4)->sum('total');
        return view('backend.sell.order.show',
            compact('order', 'order_status', 'count_order', 'total_pay','payment_status')
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
        $order = Purchase::with('purchase_items.product', 'customer.addresses', 'customer.country')->find($id);
        // dd($order->purchase_items);
        return view('backend.sell.order.invoice',compact('order'));
    }

    public function print_invoice($id){

        $order = Purchase::with('purchase_items.product', 'customer.addresses', 'customer.country')->find($id);
        $html ='<div class="col-xs-12">';
        $html .='<div class="row">';
        $html .='<div class="col-xs-6">
                    <div class="invoice-title">
                        <img src="'.url('/img/home-4/logo.png').'" style="margin-top: 5%;">
                    </div>
                </div>';
        $html .='<div class="col-xs-6">
                    <div class="row">
                        <div class="col-xs-12">
                        <h3 class="pull-right">Order # '.$order->id.'</h3>
                        </div>
                        <div class="col-xs-12"><span class="pull-right">Order : '.$order->created_at.'</span></div>
                        <div class="col-xs-12"><span class="pull-right">Payment Date: '.$order->updated_at.'</span></div>
                    </div>
                </div>';
        $html .='</div><hr>';
        $html .='<div class="row">
                <div class="col-xs-4">
                    <address>
                    <strong>From:</strong><br>
                        CAMMARKET PLACE<br>
                        Toerk Tla,Khan Sen Sok<br>
                        Phnom Penh,Cambodia
                    </address>
                </div>
                <div class="col-xs-4">
                    <address>
                        <strong>To:</strong><br>
                        Client Name: '.$order->customer->first_name.' '.strtoupper($order->customer->last_name).'<br>';
                        $i =1;
                        foreach ($order->customer->addresses as $add) {
                            if(count($order->customer->addresses)==$i){
                                $br ="";
                            }else{
                                $br ="<br/>";
                            }
        $html .='address '.$i.': '.$add->address.$br;
                            $i++;
                        }
                        
        $html .='</address></div><div class="col-xs-4">
                    <address>
                        <strong>Invoice Description:</strong><br>
                        '.$order->customer->phone_number.'<br>
                        '.$order->customer->email.'
                    </address>
                </div>
            </div>';
        $html .="</div>";
        $html .='<div class="col-md-12">
            <div class="panel panel-default">';
        $html .='<div class="panel-heading">
                    <h3 class="panel-title"><strong>Order summary</strong></h3>
                </div>';
        $html .='<div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-condensed">';
        $html.=' <thead>
                    <tr>
                        <td><strong>Item</strong></td>
                        <td class="text-center"><strong>Quantity</strong></td>
                        <td class="text-center"><strong>Price</strong></td>
                        <td class="text-right"><strong>Subtotal</strong></td>
                    </tr>
                </thead>
                <tbody>';
                $total=0;
                foreach ($order->purchase_items as $item) {
                    $sub_total = $item->product->qty * $item->product->price;
                    $total += $sub_total;
        $html .='<tr>
                    <td>'.$item->product->name.'-'.$item->product->code.'</td>
                    <td class="text-center">'.$item->product->qty.'</td>
                    <td class="text-center">$ '.number_format($item->product->price,2).'</td>
                    <td class="text-right">$ '.number_format($sub_total,2).'</td>
                </tr>';
                }
        $html .='<tr>
                    <td class="thick-line"></td>
                    <td class="thick-line"></td>
                    <td class="thick-line text-center"><strong>Total</strong></td>
                    <td class="thick-line text-right"><strong>$ '.number_format($total,2).'</strong></td>
                </tr>';
        $html .=' </tbody></table>
                    </div>
                </div>';
        $html .='</div></div>';
        return response()->json([
            'html' => $html
        ]);
    }

}
