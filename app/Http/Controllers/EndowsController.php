<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Endows;
use App\Models\Technique;
use Illuminate\Http\Request;

class EndowsController extends Controller
{
    public function endowsList(){
        $endows = Endows::all();
        return view('Categorise/Endow/endow-list',['endows' => $endows]);
    }

    public function endowsAdd(){
        return view('Categorise/Endow/endow-add');
    }
    public function endowsAddSave(Request $request){
        $ckeck = $request->input('endow');
        $existingEmail = Endows::where('nameEndow', $ckeck)->first();

        if ($existingEmail) {
            return redirect()->back()->with('error', true);
        }

        $endow = Endows::create([
            'nameEndow' => $request->endow, 
            'created_at' =>now()->toDateTimeString()
        ]);
        return redirect()->back()->with('redirect', true);
    }
    public function endowsEdit($id){
        $endow = Endows::find($id);
        return view('Categorise/Endow/endow-edit', compact('endow'));
    }
    public function endowsEditSave(Request $request, $id){
        $endow = Endows::find($id);

        $ckeck = $request->input('endow');
        $existingEmail = Endows::where('nameEndow', $ckeck)->where('id', '!=', $id)->first();

        if ($existingEmail) {
            return redirect()->back()->with('error', true);
        }

        $endow->nameEndow = $request->input('endow');
        $endow->updated_at = now()->toDateTimeString();
        $endow->save();
        return redirect()->back()->with('redirect', true);
    }
    public function endowsDelete($id){
        $endow = Endows::find($id);
        $endow->delete();
        return redirect()->route(route:'listEndow');
    }
}
