<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Banks;
use App\Models\Technique;
use Illuminate\Http\Request;

class BanksController extends Controller
{
    public function bankList(){
        $banks = Banks::all();
        return view('Categorise/Bank/bank-list',['banks' => $banks]);
    }

    public function bankAdd(){
        return view('Categorise/Bank/bank-add');
    }
    public function bankAddSave(Request $request){
        $name_qrCode = null;
        if($request->has('code_qr')){
            $file = $request->code_qr;
            $name_qrCode = $file->getClientOriginalName();
            $file->move(base_path('public/code_qr'), $name_qrCode);
        }
        $bank = Banks::create([
            'nameBank' => $request->nameBank, 
            'name' => $request->name, 
            'account_number' => $request->account_number, 
            'code_qr' => $name_qrCode, 
            'created_at' =>now()->toDateTimeString()
        ]);
        return redirect()->route(route:'listBank');
    }
    public function bankEdit($id){
        $bank = Banks::find($id);
        return view('Categorise/Bank/bank-edit', compact('bank'));
    }
    public function bankEditSave(Request $request, $id){
        $bank = Banks::find($id);
        $name_qrCode = null;
        
        if($request->has('code_qr')){
            $path = public_path('code_qr/' . $bank->code_qr);
            unlink($path);
            $file = $request->file('code_qr');
            $name_qrCode = time() . "_" . $file->getClientOriginalName();
            $file->move(base_path('public/code_qr'), $name_qrCode);
            $request['code_qr'] = $name_qrCode;
        }
        if($name_qrCode == null){
            $name_qrCode = $bank->code_qr;
        }
        $bank->nameBank = $request->input('nameBank');
        $bank->name = $request->input('name');
        $bank->account_number = $request->input('account_number');
        $bank->code_qr = $name_qrCode;
        $bank->updated_at = now()->toDateTimeString();
        $bank->save();
        return redirect()->back()->with('redirect', true);
    }
    public function bankDelete($id){
        $bank = Banks::find($id);
        $bank->delete();
        return redirect()->route(route:'listBank');
    }
}
