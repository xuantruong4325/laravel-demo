<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Technique;
use Illuminate\Http\Request;

class TechniqueControlle extends Controller
{
    public function techniqueList(){
        $technique = Technique::all();
        return view('Categorise/Technique/technique-list',['technique' => $technique]);
    }

    public function techniqueAdd(){
        return view('Categorise/Technique/technique-add');
    }
    public function techniqueAddSave(Request $request){
        $ckeck = $request->input('technique');
        $existingEmail = Technique::where('technique', $ckeck)->first();

        if ($existingEmail) {
            return redirect()->back()->with('error', true);
        }
        $technique = Technique::create([
            'technique' => $request->technique, 
            'created_at' =>now()->toDateTimeString()
        ]);
        return redirect()->back()->with('redirect', true);
    }
    public function techniqueEdit($id){
        $technique = Technique::find($id);
        return view('Categorise/Technique/technique-edit', compact('technique'));
    }
    public function techniqueEditSave(Request $request, $id){
        $technique = Technique::find($id);

        $ckeck = $request->input('technique');
        $existingEmail = Technique::where('technique', $ckeck)->where('id', '!=', $id)->first();

        if ($existingEmail) {
            return redirect()->back()->with('error', true);
        }

        $technique->technique = $request->input('technique');
        $technique->updated_at = now()->toDateTimeString();
        $technique->save();
        return redirect()->back()->with('redirect', true);
    }
    public function techniqueDelete($id){
        $technique = Technique::find($id);
        $technique->delete();
        return redirect()->route(route:'listTechnique');
    }
}
