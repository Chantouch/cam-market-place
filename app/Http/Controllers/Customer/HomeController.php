<?php

namespace App\Http\Controllers\Customer;

use App\Model\Category;
use App\Model\Customer;
use App\Model\Purchase;
use App\Model\PurchaseOrder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;

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
        return view('customer.pages.cart', compact('categories', 'user'));
    }

    public function checkout()
    {
        $categories = Category::with('sub_category', 'products')->where('status', 1)->whereNull('category_id')->get();
        return view('customer.pages.checkout', compact('categories'));
    }

    public function post_checkout()
    {
        $user_id = $this->auth()->id();
        $total = Cart::total();
        $products = Cart::content();
        $array_data = [
            'customer_id' => $user_id,
            'total_paid_foreign' => $total
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
