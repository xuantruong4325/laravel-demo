<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Introduces;
use Illuminate\Http\Request;

class IntroducesController extends Controller
{
    public function introducesList(){
        $introduces = Introduces::all();
        return view('Categorise/Introduce/introduce-list',['introduces' => $introduces]);
    }

    public function introducesAdd(){
        return view('Categorise/Introduce/introduce-add');
    }
    public function introducesAddSave(Request $request){
       $introduce = Introduces::create([
            'general_info' => $request->general_info,
            'aditional_info' =>$request->aditional_info,
       ]);
       return redirect()->route(route:'listIntroduces');
    }
    public function introducesEdit($id){
       $introduce = Introduces::find($id);
       return view('Categorise/Introduce/introduce-edit',['introduce' => $introduce]);
    }
    public function introducesEditSave(Request $request, $id){
        $introduce = Introduces::find($id);
        $introduce->general_info = $request->input('general_info');
        $introduce->aditional_info = $request->input('aditional_info');
        $introduce->updated_at = now()->toDateTimeString();
        $introduce->save();
        return redirect()->route(route:'listIntroduces');
    }
}
