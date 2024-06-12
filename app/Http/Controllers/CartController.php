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
    public function cartAdd(Request $request)
    {
        if (Auth::check()) {
            $id_user = Auth::user()->id;
            $price = null;
            $id_sp = $request->productId;
            $quantity = 0;
            $product = Content::find($id_sp);
            if ($product->discount != 0) {
                $price = $product->price_after_discount;
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
                    'quantity' => $quantity,
                    'user_id' => $id_user,
                ]);
            }

            $product->quantity = $product->quantity - 1;
            $product->save();
        }else{
            return ;
        }
    }
}
