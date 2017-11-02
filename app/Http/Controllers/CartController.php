<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    public function addToCart(Request $request) {
        $product = Product::find($request->product_id);
        Cart::add([
            'id' => $request->product_id,
            'name' => $product->product_name,
            'price' => $product->product_price,
            'qty' => $request->qty,
            'options' => [
                'image'=>$product->product_image
            ]

        ]);

        return redirect('/show-cart');
    }

    public function directAddToCart($id){
        $product = Product::find($id);
        Cart::add([
            'id' => $product->id,
            'name' => $product->product_name,
            'price' => $product->product_price,
            'qty' => 1,
            'options' => [
                'image' => $product->product_image
            ]
        ]);

        return redirect('/show-cart');
    }

    public function showCart() {
        $cartProducts = Cart::content();

        return view('front.cart.show-cart', ['cartProducts' => $cartProducts]);
    }
    public function updateCartInfo(Request $request){
        Cart::update($request->rowId, $request->qty);

        return redirect('/show-cart')->with('message', 'Cart info update successfully');
    }

    public function deleteCartProduct($rowId){
        Cart::remove($rowId);
        return redirect('/show-cart')->with('message', 'Cart info delete successfully');
    }


}














