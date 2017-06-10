<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart as Cart;
use Validator;

class CartController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::with('sub_category', 'products')->where('status', 1)->whereNull('category_id')->get();
        return view('front.pages.product.cart', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        switch ($request->submit) {
            case "wishlist":
                $duplicates = Cart::instance('wishlist')->search(function ($cartItem, $rowId) use ($request) {
                    return $cartItem->id === $request->id;
                });
                if (!$duplicates->isEmpty()) {
                    return redirect()->back()->withSuccessMessage('Item is already in your wishlist!');
                }
                Cart::instance('wishlist')
                    ->add($request->id, $request->name, $request->qty, $request->price)
                    ->associate(Product::class);
                return redirect()->back()->withSuccessMessage('Item was added to your wishlist!');
                break;
            case "cart":
                $duplicates = Cart::search(function ($cartItem, $rowId) use ($request) {
                    return $cartItem->id === $request->id;
                });
                if (!$duplicates->isEmpty()) {
                    return redirect()->route('products.carts.index')->with('error', 'Item is already in your cart!');
                }
                Cart::add($request->id, $request->name, $request->qty, $request->price)->associate(Product::class);
                return redirect()->back()->with('success', 'Item was added to your cart!');
                break;
            default:
                break;
        }
        return redirect()->route('products.carts.index')->with('error', 'Item is already added!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        // Validation on max quantity
        $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric|between:1,5'
        ]);

        if ($validator->fails()) {
            session()->flash('error_message', 'Quantity must be between 1 and 5.');
            return response()->json(['success' => false]);
        }

        Cart::update($id, $request->quantity);
        session()->flash('success_message', 'Quantity was updated successfully!');

        return response()->json(['success' => true]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return redirect('products/carts')->withSuccessMessage('Item has been removed!');
    }

    /**
     * Remove the resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function emptyCart()
    {
        Cart::destroy();
        return redirect('products/carts')->withSuccessMessage('Your cart has been cleared!');
    }

    /**
     * Switch item from shopping cart to wishlist.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function switchToWishlist($id)
    {
        $item = Cart::get($id);

        Cart::remove($id);

        $duplicates = Cart::instance('wishlist')->search(function ($cartItem, $rowId) use ($id) {
            return $cartItem->id === $id;
        });

        if (!$duplicates->isEmpty()) {
            return redirect('products/carts')->withSuccessMessage('Item is already in your Wishlist!');
        }

        Cart::instance('wishlist')->add($item->id, $item->name, $item->qty, $item->price)
            ->associate(Product::class);

        return redirect('products/carts')->withSuccessMessage('Item has been moved to your Wishlist!');

    }
}
