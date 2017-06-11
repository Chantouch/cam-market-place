<?php

namespace App\Http\Controllers\Customer;

use App\Model\Category;
use App\Model\Customer;
use App\Model\Purchase;
use App\Model\PurchaseOrder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use Validator;

class HomeController extends Controller
{
    public function __construct()
    {
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
        $categories = Category::with('sub_category', 'products')->where('status', 1)->whereNull('category_id')->get();
        $category_list = Category::with('sub_category')->where('status', 1)
            ->whereNull('category_id')->orderByDesc('name')
            ->pluck('name', 'id');
        return view('customer.pages.cart', compact('categories', 'user', 'category_list'));
    }

    public function checkout()
    {
        $user = $this->auth()->user();
        $categories = Category::with('sub_category', 'products')->where('status', 1)->whereNull('category_id')->get();
        $category_list = Category::with('sub_category')->where('status', 1)
            ->whereNull('category_id')->orderByDesc('name')
            ->pluck('name', 'id');
        $product = Cart::content();
        if (!count($product))
            return redirect()->route('customers.dashboard')->with('error', 'Your card was clear cause by timeout');
        return view('customer.pages.checkout', compact('categories', 'user', 'category_list'));
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
            'total_paid_foreign' => $total,
            'shipping_address' => isset($data['shipping_address']) ? $data['shipping_address'] : null,
        ];
        $purchase = Purchase::create($array_data);
        if ($purchase) {
            $purchase_id = $purchase->id;
            foreach ($products as $product) {
                $purchase = PurchaseOrder::create([
                    'purchase_id' => $purchase_id,
                    'product_id' => $product->id,
                    'qty' => $product->qty,
                ]);
                if (!$purchase) {
                    return response()->json(['error' => 'Can not order now']);
                }
            }
            Cart::destroy();
        }
        return redirect()->route('customers.dashboard')->with('success', 'Your order is successfully');
    }

}
