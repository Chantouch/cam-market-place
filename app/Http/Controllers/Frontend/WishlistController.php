<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\BaseController;
use App\Model\Category;
use App\Model\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart as Cart;
use Validator;


class WishlistController extends BaseController
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.pages.product.wishlist');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $duplicates = Cart::instance('wishlist')->search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->id;
        });
        if (!$duplicates->isEmpty()) {
            $notification = [
                'message' => 'Thanks! Item was already in your wishlist!',
                'alert-type' => 'warning'
            ];
            return redirect()->back()->with($notification);
        }
        Cart::instance('wishlist')
            ->add($request->id, $request->name, $request->qty, $request->price)
            ->associate(Product::class);
        $notification = [
            'message' => 'Thanks! Item was added to your wishlist!',
            'alert-type' => 'success'
        ];
        return redirect()->back()->with($notification);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
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
        Cart::instance('wishlist')->remove($id);
        //return redirect('products/wish-lists')->withSuccessMessage('Item has been removed!');
        $notification = [
            'message' => 'Thanks! Item was cleared from your wishlist!',
            'alert-type' => 'error'
        ];
        return redirect('products/wish-lists')->with($notification);
    }

    /**
     * Remove the resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function emptyWishlist()
    {
        Cart::instance('wishlist')->destroy();
        //return redirect('products/wish-lists')->withSuccessMessage('Your wishlist has been cleared!');
        $notification = [
            'message' => 'Thanks! Item was cleared from your wishlist!',
            'alert-type' => 'error'
        ];
        return redirect('products/wish-lists')->with($notification);
    }

    /**
     * Switch item from wishlist to shopping cart.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function switchToCart($id)
    {
        $item = Cart::instance('wishlist')->get($id);
        Cart::instance('wishlist')->remove($id);
        $duplicates = Cart::instance('default')->search(function ($cartItem, $rowId) use ($id) {
            return $cartItem->id === $id;
        });
        if (!$duplicates->isEmpty()) {
            //return redirect('carts')->withSuccessMessage('Item is already in your shopping cart!');
            $notification = [
                'message' => 'Thanks! Item was was already in your shopping cart!',
                'alert-type' => 'warning'
            ];
            return redirect('carts')->with($notification);
        }
        Cart::instance('default')->add($item->id, $item->name, $item->qty, $item->price)
            ->associate(Product::class);
        //return redirect('products/wish-lists')->withSuccessMessage('Item has been moved to your shopping cart!');
        $notification = [
            'message' => 'Thanks! Item has been moved to your shopping cart!',
            'alert-type' => 'success'
        ];
        return redirect('products/wish-lists')->with($notification);
    }
}
