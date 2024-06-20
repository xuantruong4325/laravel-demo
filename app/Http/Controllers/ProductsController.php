<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Banks;
use App\Models\cart;
use App\Models\checkoutCart;
use App\Models\Communes;
use App\Models\Conscious;
use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Districts;
use App\Models\User;
use App\Models\Editfooter;
use App\Models\Introduces;
use App\Models\product_carts;
use App\Models\Promotions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProductsController extends Controller
{
    public function Home()
    {
        $contents = Content::inRandomOrder()->limit(10)->get();
        foreach($contents as $conten){
            if($conten->status == 'Publish' || $conten->status == 'Draft')
            if($conten->quantity < 1){
                $conten->status = 'Draft';
                $conten->save();
            }else{
                $conten->status = 'Publish';
                $conten->save();
            }
        }
        //okok
        // $contents = Content::orderBy('created_at', 'desc')->limit(2)->get();
        // $contents = Content::orderBy('sold', 'desc')->limit(2)->get();
        $editfooters = Editfooter::all();
        return view('product/Home', compact('contents', 'editfooters'));
    }

    public function Khuyenmai()
    {
        $promotions = Promotions::all();
        $editfooters = Editfooter::all();
        return view('product/Khuyenmai', compact('promotions', 'editfooters'));
    }

    public function Khuyenmai2($id)
    {
        $promotions = Promotions::find($id);
        $editfooters = Editfooter::all();
        return view('product/Khuyenmai2', compact('promotions', 'editfooters'));
    }

    public function Gioithieu()
    {
        $introduces = Introduces::all();
        $editfooters = Editfooter::all();
        return view('product/Gioithieu', compact('introduces', 'editfooters'));
    }

    public function Tttk(Request $request)
    {
        $test = User::find(Auth()->User()->id);

        $editfooters = Editfooter::all();
        $conscious = Conscious::all();
        $districts = Districts::where('consciouse_code', $test->conscious)->get();
        $communes = Communes::where('district_code', $test->district)->get();
        return view('product/Ttkh', compact('editfooters', 'conscious', 'districts', 'communes'));
    }

    public function Dmk(Request $request)
    {
        $editfooters = Editfooter::all();
        return view('product/Dmk', compact('editfooters'));
    }

    public function saveDmk(Request $request)
    {
        $test = User::find(Auth()->User()->id);

        if (!Hash::check($request->pass, $request->user()->password)) {
            return redirect()->back()->withErrors(['passs' => 'Mật khẩu không chính xác']);
        }

        if ($request->newPass != $request->passNew) {
            return redirect()->back()->withErrors(['psasss' => 'Nhập lại mật khẩu không đúng']);
        }
        $test->password = $request->newPass;
        $test->save();

        return redirect()->back()->withErrors(['tbpass' => 'Đổi mật khẩu thành công']);
    }

    public function editUserSave(Request $request)
    {
        $user = User::find(Auth()->User()->id);
        $email = $request->input("email");
        $phone = $request->input("phone");
        if ($email != $user->email) {
            $existingemail = User::where('Email', $email)->first();
            if ($existingemail) {
                return redirect()->back()->withErrors(['Email' => 'Tên email đã tồn tại']);
            }
        }
        if ($phone != $user->phone) {
            $existingphone = User::where('phone', $phone)->first();
            if ($existingphone) {
                return redirect()->back()->withErrors(['Phone' => 'Số điện thoại đã tồn tại']);
            }
        }

        $user->name = $request->input("name");
        $user->email = $request->input("email");
        $user->phone = $request->input("phone");
        $user->conscious = $request->input("idTinh");
        $user->district = $request->input("idHuyen");
        $user->commune = $request->input("idXa");
        $user->address = $request->input("address");
        $user->save();

        return redirect()->back()->withErrors(['tbEdituser' => 'zzz']);
    }

    public function ajaxHuyen(Request $request)
    {
        $data = [];
        $data[] = [
            'id' => 0,
            'name' => "Quận/huyện"
        ];
        $consciouse_code = $request->code;
        $districts = Districts::where('consciouse_code', $consciouse_code)->get();
        foreach ($districts as $district) {
            $data[] = [
                'id' => $district->code_district,
                'name' => $district->district
            ];
        }
        // }echo json_encode($data);
        return response()->json($data);
    }

    public function ajaxXa(Request $request)
    {
        $datas = [];
        $datas[] = [
            'id' => 0,
            'name' => "Phường/xã"
        ];
        $district_code = $request->code;
        $communes = Communes::where('district_code', $district_code)->get();
        foreach ($communes as $commune) {
            $datas[] = [
                'id' => $commune->code_commune,
                'name' => $commune->commune,
            ];
        }
        return response()->json($datas);
    }

    public function cart()
    {
        $priceCart = 0;
        $test = Auth()->User()->id;
        $carts = cart::where('user_id', $test)->get();
        $editfooters = Editfooter::all();
        $check = null;
        foreach ($carts as $cart) {
            if ($cart->new_price != 0) {
                $priceCart += $cart->quantity * $cart->new_price;
            } else {
                $priceCart += $cart->quantity * $cart->price;
            }
            $check = 'ok';
        }
        // dd($check);
        return view('product/Gio', compact('editfooters', 'carts', 'priceCart', 'check'));
    }
    public function ajaxSp(Request $request)
    {
        $dataCart = 0;
        $user = User::find(Auth()->User()->id);
        $carts = cart::where('user_id', $user->id)->get();
        // $dataCart= $carts->count();
        foreach ($carts as $cart) {
            $dataCart += $cart->quantity;
        }
        // }echo json_encode($data);
        return response()->json($dataCart);
    }

    public function cartCheckout()
    {
        $priceCart = 0;
        $test = User::find(Auth()->User()->id);
        $bank = Banks::first();
        $test1 = Auth()->User()->id;
        $conscious = Conscious::all();
        $districts = Districts::where('consciouse_code', $test->conscious)->get();
        $communes = Communes::where('district_code', $test->district)->get();
        $carts = cart::where('user_id', $test1)->get();
        foreach ($carts as $cart) {
            $priceCart += $cart->quantity * $cart->price;
        }
        $editfooters = Editfooter::all();
        return view('product/Ttck', compact('editfooters', 'carts', 'priceCart', 'conscious', 'districts', 'communes', 'bank'));
    }

    public function pay(Request $request)
    {
        // 0 -> thanh toán khi nhận hàng
        // 1 -> thanh toán chuyển khoản 
        // 2 -> thanh toán khi nhận hàng
        // 0,1,2,3 -> chờ xác nhận , đang giao , đã giao,  đã hủy.
        $priceCart = 0;
        $total = 0;
        $user = User::find(Auth()->User()->id);
        $user->conscious = $request->idTinh;
        $user->district = $request->idHuyen;
        $user->commune = $request->idXa;
        $user->address = $request->address;
        $user->save();

        $carts = cart::where('user_id', $user->id)->get();
        foreach ($carts as $item) {
            $priceCart += $item->quantity * $item->price;
            $total += $item->quantity;
        }

        $cart = checkoutCart::create([
            'nameUser' => $request->nameUser,
            'phoneUser' => $request->phoneUser,
            'idUser' => $user->id,
            'payments' => $request->giaohang,
            'totalProduct' => $priceCart,
            'totalPrice' => $total,
            'order_status' => 0,
        ]);

        foreach ($carts as $item) {
            $productCart = product_carts::create([
                'avatar' => $item->avatar,
                'nameProduct' => $item->name,
                'quantity' => $item->quantity,
                'price' => $cart->id,
                'checkout_cart_id' => $cart->id,
            ]);
            $item->delete();
        }
        return redirect()->route(route: 'home');
    }
}
