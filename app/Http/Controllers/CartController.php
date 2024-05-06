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
    public function cartAdd(Request $request)
    {
        // if(Auth::check()){
        //     $cart = cart::create([
        //         'name' => $request->name,
        //     ]);

        // }
        if (Auth::check()) {
            $id_user = Auth::user()->id;
            $id_sp = $request -> productId;
            $quantity = $request -> quantity;
            $product = Content::find($id_sp);
            $cart = cart::create([
                'name' => $product->content,
                'avatar' => 'null',
                'price' => $product->old_price,
                'quantity' => $quantity,
                'user_id' => $id_user,
            ]);
        } else {
            
        }
    }
}
