<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Editfooter;

class EditfooterController extends Controller
{
    public function form_edit($id){
        $editfooter=Editfooter::find($id);
        return view('admin/edit_footer', compact('editfooter'));
    }
    private function save_image($file,$test){
        $file_name=null;
        if($file == null){
            $request['file']=$file_name;

            return $file_name;
        }else{
            $path = public_path('public/FileImage/Layout/'.$test);
            // unlink($path);
            $file_name = time()."_".$file-> getClientOriginalName();
            $file -> move(base_path('public/FileImage/Layout'),$file_name);
            $request['file']=$file_name;
            return $file_name;
        }    

    }
    public function form_edit_save(Request $request, $id){
        $editfooter=Editfooter::find($id);
        $file_name1 = $this->save_image($request->file('file_banner1'),$editfooter->file_banner1);
        if($file_name1==null){
            $file_name1=$editfooter->file_banner1;
        }
        $file_name2 = $this->save_image($request->file('file_banner2'),$editfooter->file_banner2);
        if($file_name2==null){
            $file_name2=$editfooter->file_banner2;
        }
        $file_name3 = $this->save_image($request->file('file_banner3'),$editfooter->file_banner3);
        if($file_name3==null){
            $file_name3=$editfooter->file_banner3;
        }
        $file_name4 = $this->save_image($request->file('file_banner4'),$editfooter->file_banner4);
        if($file_name4==null){
            $file_name4=$editfooter->file_banner4;
        }
        $file_cart = $this->save_image($request->file('file_cart'),$editfooter->file_cart);
        if($file_cart==null){
            $file_cart=$editfooter->file_cart;
        }
        $file_name_left = $this->save_image($request->file('file_footer_left'),$editfooter->file_footer_left);
        if($file_name_left==null){
            $file_name_left=$editfooter->file_footer_left;
        }
        $file_name_right = $this->save_image($request->file('file_footer_right'),$editfooter->file_footer_right);
        if($file_name_right==null){
            $file_name_right=$editfooter->file_footer_right;
        }
            $editfooter->name = $request->name;
            $editfooter->file_banner1 = $file_name1;
            $editfooter->file_banner2 = $file_name2;
            $editfooter->file_banner3 = $file_name3;
            $editfooter->file_banner4 = $file_name4;
            $editfooter->file_cart = $file_cart;
            $editfooter->file_footer_left = $file_name_left;
            $editfooter->file_footer_right = $file_name_right;
            $editfooter->save();

        return redirect()->route(route:'ndbanner');
    }
    public function ndbanner(){
        $editfooter=Editfooter::all();
        return view('admin/banner_footer',  ['editfooter' => $editfooter]);
    }
}
