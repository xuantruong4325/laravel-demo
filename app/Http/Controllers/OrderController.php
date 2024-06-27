<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\checkoutCart;
use App\Models\product_carts;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orderList(){
        $carts = checkoutCart::all();
        return view('order', compact('carts'));
    }
    public function orderProductList($id){
        $cart = checkoutCart::find($id);
        $cartProducts = product_carts::where('checkout_cart_id', $cart->id)->get();
        return view('orderProduct', compact('cart', 'cartProducts'));
    }
    public function statusCart(Request $request){
        $data = 'ok';
        $cart = checkoutCart::find($request->code_order);
        $cart->order_status = $request->code;
        $cart->save();
        return response()->json($data);
        // return redirect()->route(route: 'listOrder');
    }
}
