<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\cart;
use App\Models\Communes;
use App\Models\Conscious;
use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Districts;
use App\Models\User;
use App\Models\Editfooter;
use App\Models\Introduces;
use App\Models\Promotions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProductsController extends Controller
{
    public function Home()
    {
        $contents = Content::all();
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
        return view('product/Ttkh', compact('editfooters','conscious','districts','communes'));
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
        if($email != $user->email){
            $existingemail = User::where('Email', $email)->first();
            if ($existingemail) {
                return redirect()->back()->withErrors(['Email' => 'Tên email đã tồn tại']);
            }
        }
        if($phone != $user->phone){
            $existingphone = User::where('phone', $phone)->first();
            if($existingphone){
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

    public function ajaxHuyen(Request $request){
        $data = [];
        $data[] = [
            'id' => 0,
            'name' => "Quận/huyện"
        ];
        $consciouse_code = $request->code;
        $districts = Districts::where('consciouse_code', $consciouse_code )->get();
        foreach($districts as $district){
            $data[] = [
                'id' => $district->code_district,
                'name' => $district->district
            ];
        }
        // }echo json_encode($data);
        return response()->json($data);
    }

    public function ajaxXa(Request $request){
        $datas = [];
        $datas[] = [
            'id' => 0,
            'name' => "Phường/xã"
        ];
        $district_code = $request->code;
        $communes = Communes::where('district_code', $district_code)->get();
        foreach($communes as $commune){
            $datas[] = [
                'id' => $commune->code_commune,
                'name' => $commune->commune,
            ];
        }
        return response()->json($datas);
    }

    public function cart(){
        $editfooters = Editfooter::all();
        return view('product/Gio', compact('editfooters'));
    }
    public function ajaxSp(Request $request){
        $dataCart = 0;
        $user = User::find(Auth()->User()->id);
        $consciouse_code = $request->code;
        $carts = cart::where('user_id', $user->id)->get();
        $dataCart= $carts->count();
        // }echo json_encode($data);
        return response()->json($dataCart);
    }
}
