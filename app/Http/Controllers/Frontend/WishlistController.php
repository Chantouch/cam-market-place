<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart as Cart;
use Validator;


class WishlistController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category_list = Category::with('sub_category')->where('status', 1)
            ->whereNull('category_id')->orderByDesc('name')
            ->pluck('name', 'id');
        $categories = Category::with('sub_category', 'products')->where('status', 1)->whereNull('category_id')->get();
        return view('front.pages.product.wishlist', compact('categories', 'category_list'));
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
            return redirect()->back()->withSuccessMessage('Item is already in your wishlist!');
        }
        Cart::instance('wishlist')
            ->add($request->id, $request->name, $request->qty, $request->price)
            ->associate(Product::class);
        return redirect()->back()->withSuccessMessage('Item was added to your wishlist!');
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
        return redirect('products/wish-lists')->withSuccessMessage('Item has been removed!');
    }

    /**
     * Remove the resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function emptyWishlist()
    {
        Cart::instance('wishlist')->destroy();
        return redirect('products/wish-lists')->withSuccessMessage('Your wishlist has been cleared!');
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
            return redirect('carts')->withSuccessMessage('Item is already in your shopping cart!');
        }
        Cart::instance('default')->add($item->id, $item->name, $item->qty, $item->price)
            ->associate(Product::class);
        return redirect('products/wish-lists')->withSuccessMessage('Item has been moved to your shopping cart!');

    }
}
