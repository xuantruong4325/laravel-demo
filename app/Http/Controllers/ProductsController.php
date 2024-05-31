<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
        $editfooters = Editfooter::all();
        $conscious = Conscious::all();
        $districts = Districts::all();
        $communes = Communes::all();
        return view('product/Ttkh', compact('editfooters','conscious'));
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

    public function ajaxHuyen(Request $request){
        $data = [];
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
}
