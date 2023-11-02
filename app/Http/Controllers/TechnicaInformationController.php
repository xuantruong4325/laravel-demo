<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\technicaInformation;


class TechnicaInformationController extends Controller
{
    public function technicaInformation(){
        $technica = technicaInformation::all();
        return view('admin/technica_information', ['technica' => $technica]);
    }

    public function add_information(){
        return view('admin/form_add_information');
    }
    public function add_information_save(Request $request){
        $technica = technicaInformation::create([
            'technicaInformation' => $request->technicaInformation
       ]);
       return redirect()->route(route:'technicaInformation');
    }

    public function edit_information($id){
        $technica = technicaInformation::find($id);
        return view('admin/edit_information', ['technica' => $technica]);
    }
    public function edit_information_save(Request $request, $id){
        $technica = technicaInformation::find($id);
        $technica->technicaInformation = $request->input('technicaInformation');
        $technica->save();
       
       return redirect()->route(route:'technicaInformation');
    }

    public function delete_information($id){
        $technica = technicaInformation::find($id);
        $technica->delete();
        return redirect()->route(route:'technicaInformation');
    }
}
