<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\dkntb;
use Illuminate\Http\Request;

class DkntbController extends Controller
{
    //
    public function dkntbAdd(Request $request){
        // 0 chưa liên hệ  1 đã liên hệ
        $dkntb = dkntb::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'status' => 0,
            'idProduct' => $request->input('idProduct')
        ]);
        return;
    }
    public function dkntbList(){
        $dkntbs = dkntb::all();;
        return view('dkntb', compact('dkntbs'));
    }

    public function dkntbEdit(Request $request){
        $data = 'ok';
        $dkntb = dkntb::find($request->idDkntb);
        $dkntb->status = $request->dkntbSta;
        $dkntb->save();
        return response()->json($data);
    }
}
