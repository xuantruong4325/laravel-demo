<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\cart;
use App\Models\Content;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function listCart()
    {
        $carts = cart::all();
        return view('Categorise/Cart/cart-list', ['carts' => $carts]);
    }
    private function kt($id){
        $product = Content::find($id);
        if($product->quantity = 0){
            return 0;
        }
        return 1;

    }
    public function cartAdd(Request $request)
    {
        if (Auth::check()) {
            $id_user = Auth::user()->id;
            $price = null;
            $new_price = 0;
            $id_sp = $request->productId;
            $quantity = 0;
            $product = Content::find($id_sp);
            if ($product->discount != 0) {
                $price = $product->old_price;
                $new_price = $product->price_after_discount;
            } else {
                $price = $product->old_price;
            }
            $cartQua = cart::where('name', $product->content)->first();
            if ($cartQua) {
                $quantity = $cartQua->quantity + 1;
                $cartQua->quantity = $quantity;
                $cartQua->save();
            } else {
                $quantity = $request->quantity;

                $cart = cart::create([
                    'name' => $product->content,
                    'avatar' => $product->file,
                    'price' => $price,
                    'new_price' => $new_price,
                    'id_product' => $id_sp,
                    'quantity' => $quantity,
                    'user_id' => $id_user,
                ]);
            }

            $product->quantity = $product->quantity - 1;
            $product->sold +=$request->quantity;
            $product->save();
        } else {
            return;
        }
    }

    public function cartDelete(Request $request)
    {
        $id = $request->productDelete;
        $cart = cart::find($id);
        $product = Content::find($cart->id_product);
        $quantitys = $product->quantity + $cart->quantity;
        $product->quantity = $quantitys;
        $product->sold -= $cart->quantity;
        $product->save();
        $cart->delete();
        return;
    }
    public function cartDeleteAll(Request $request)
    {
        $id = $request->productDeleteAll;
        $carts = cart::where('user_id', $id)->get();
        foreach ($carts as $cart) {
            $product = Content::find($cart->id_product);
            $quantitys = $product->quantity + $cart->quantity;
            $product->quantity = $quantitys;
            $product->sold -= $cart->quantity;
            $product->save();
            $cart->delete();
        }
        return;
    }
}
