<?php

namespace App\Http\Controllers\Customer;

use App\Mail\OrderCompleted;
use App\Model\Customer;
use App\Model\Product;
use App\Model\Purchase;
use App\Model\PurchaseOrder;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
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
        return view('customer.dashboard', compact('user'));
    }

    public function checkout()
    {
        $notification_error = [
            'message' => 'Thanks! Your card was clear cause by timeout!',
            'alert-type' => 'error'
        ];
        $notification_warning = [
            'message' => 'Thanks! Please add your address before start shopping!',
            'alert-type' => 'warning'
        ];
        try {
            $user = $this->auth()->user();
            if (count($user->addresses)) {
                $product = Cart::content();
                if (!count($product))
                    return redirect()->route('customers.dashboard')->with($notification_error);
                return view('customer.pages.checkout', compact('user'));
            } else {
                return redirect()->route('customers.addresses.create')->with($notification_warning);
            }
        } catch (ModelNotFoundException $exception) {
            return redirect()->route('customers.dashboard')->with($notification_error);
        }
    }

    /**
     * @param Request $request
     * @return HomeController|\Illuminate\Http\RedirectResponse
     */
    public function post_checkout(Request $request)
    {
        $data = $request->all();
        $messages = array(
            //'shipping_address.required' => 'Please enter first name',
            //'shipping_method.required' => 'Please enter last name',
            //'payment_method.required' => 'Please enter mobile phone',
            'address_id.required' => 'Please choose an address',
        );

        $rules = array(
            //'shipping_address' => 'sometime|max:255',
            'shipping_method' => 'required|integer',
            'payment_method' => 'required|integer',
            'address_id' => 'required|integer',
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
            'total' => str_replace(',', '', $total),
            'shipping_address' => isset($data['shipping_address']) ? $data['shipping_address'] : null,
            'shipping_method' => $data['shipping_method'],
            'payment_method' => $data['payment_method'],
            'order_reference' => $this->randomId(),
            'address_id' => $data['address_id']

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

    public function information()
    {
        $id = auth()->user()->id;
        $profile = Customer::find($id);
        if (empty($profile)) {
            $notification = [
                'message' => 'Thanks! Your information not found.',
                'alert-type' => 'error'
            ];
            return redirect()->route('customers.dashboard')->with($notification);
        }
        return view('customer.pages.information', compact('profile'));
    }

    public function post_information(Request $request)
    {
        $notification_error = [
            'message' => 'Thanks! Your information not found.',
            'alert-type' => 'error'
        ];
        $notification_success = [
            'message' => 'Thanks! Your information was updated successfully.',
            'alert-type' => 'success'
        ];
        try {
            $data = $request->all();
            DB::beginTransaction();
            $id = auth()->user()->id;
            $profile = Customer::find($id);
            if (empty($profile)) {
                return redirect()->route('customers.dashboard')->with($notification_error);
            }
            $validator = Validator::make($data, Customer::rules($id), Customer::messages());
            if ($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator);
            }
            if (!empty($data['password'])) {
                $password = $profile->password = bcrypt($data['password']);
                $data['password'] = $password;
            } else {
                $data = array_except($data, array('password'));
            }
            $data['dob'] = date('Y-m-d', isset($request->dob) ? strtotime($request->dob) : null);
            $update = $profile->update($data);
            if (!$update) {
                return redirect()->back()->with($notification_error);
            }
            return redirect()->route('customers.dashboard')->with($notification_success);

        } catch (ModelNotFoundException $exception) {
            return redirect()->route('customers.dashboard')->with($notification_error);
        }
    }

    public function randomId()
    {

        $id = str_random(10);

        $validator = Validator::make(['order_reference' => $id], ['order_reference' => 'unique:purchases,order_reference']);

        if ($validator->fails()) {
            $this->randomId();
        }

        return $id;
    }
}
