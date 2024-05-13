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
    public function listCart(){
        $carts = cart::all();
        return view('Categorise/Cart/cart-list',['carts' => $carts]);
    }
    public function cartAdd(Request $request)
    {
        if (Auth::check()) {
            $id_user = Auth::user()->id;
            $id_sp = $request -> productId;
            $quantity = $request -> quantity;
            $product = Content::find($id_sp);
            $cart = cart::create([
                'name' => $product->content,
                'avatar' => $product->file,
                'price' => $product->old_price,
                'quantity' => $quantity,
                'user_id' => $id_user,
            ]);
        } else {
            return ;
        }
    }
}
