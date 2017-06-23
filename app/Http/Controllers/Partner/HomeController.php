<?php

namespace App\Http\Controllers\Partner;

use App\Mail\OrderCompleted;
use App\Model\Category;
use App\Model\Customer;
use App\Model\Product;
use App\Model\Purchase;
use App\Model\PurchaseOrder;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use Gloudemans\Shoppingcart\Facades\Cart;
use Validator;
use Illuminate\Support\Facades\Mail;

class HomeController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth:customer');
    }

    /**
     * @return mixed
     */
    public function auth()
    {
        return auth()->guard('customer');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $user = $this->auth()->user();
        return view('customer.pages.cart', compact('user'));
    }

    public function checkout()
    {
        $user = $this->auth()->user();
        $product = Cart::content();
        if (!count($product))
            return redirect()->route('customers.dashboard')->with('error', 'Your card was clear cause by timeout');
        return view('customer.pages.checkout', compact('user'));
    }

    public function post_checkout(Request $request)
    {
        $data = $request->all();
        $messages = array(
            //'shipping_address.required' => 'Please enter first name',
            //'shipping_method.required' => 'Please enter last name',
            //'payment_method.required' => 'Please enter mobile phone',
        );

        $rules = array(
            //'shipping_address' => 'sometime|max:255',
            'shipping_method' => 'required|integer',
            'payment_method' => 'required|integer',
        );
        $validator = Validator::make($data, $rules, $messages);
        if ($validator->fails()) {
            $this->throwValidationException($request, $validator);
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        $user_id = $this->auth()->id();
        $total = Cart::total();
        $products = Cart::content();
        $array_data = [
            'customer_id' => $user_id,
            'total_paid_foreign' => str_replace(',', '', $total),
            'shipping_address' => isset($data['shipping_address']) ? $data['shipping_address'] : null,
        ];
        $purchase = Purchase::create($array_data);
        if ($purchase) {
            $purchase_id = $purchase->id;
            $ids = [];
            foreach ($products as $product) {
                $purchase = PurchaseOrder::create([
                    'purchase_id' => $purchase_id,
                    'product_id' => $product->id,
                    'qty' => $product->qty,
                ]);
                $ids[] = $product->id;
                Product::whereIn('id', $ids)->decrement('qty', $product->qty);
                if (!$purchase) {
                    return response()->json(['error' => 'Can not order now']);
                }
            }
            $content = [
                'title' => 'Your order is completed',
                'body' => 'Hi ' . $this->auth()->user()->first_name . '. Your recent order on ' . config('app.name') . ' has been completed. Your order details are shown below for your reference:',
                'url' => 'www.google.com',
                'button' => 'Click Here'
            ];
            $customer_info = $this->auth()->user();
            $customer = new Customer();
            $customer->first_name = $customer_info->first_name;
            $customer->last_name = $customer_info->last_name;
            $customer->email = $customer_info->email;
            $customer->phone = $customer_info->phone;
            $customer->addresses = $customer_info->addresses;

            $receiverAddress = $customer_info->email;

            Mail::to($receiverAddress)->send(new OrderCompleted($content, $customer));
            Cart::destroy();
        }
        $notification = [
            'message' => 'Thanks! Your order is completed!',
            'alert-type' => 'success'
        ];
        return redirect()->route('customers.dashboard')->with($notification);
    }
}