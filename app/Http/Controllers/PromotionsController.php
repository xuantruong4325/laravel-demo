<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Promotions;
use Illuminate\Http\Request;

class PromotionsController extends Controller
{
    public function promotionList(){
        $promotions = Promotions::all();
        return view('Categorise/Promotion/promotion-list', ['promotions' => $promotions]);
    }
    public function promotionAdd(){
        return view('Categorise/Promotion/promotion-add');

    }
    public function promotionAddSave(Request $request){
        $avatar_name = null;
        if($request->has('avatar')){
            $avatar = $request->avatar;
            $avatar_name = $avatar->getClientOriginalName();
            $avatar->move(base_path('public/FileImage/promotion'), $avatar_name);
        }
        $promotion = Promotions::create([
            'title' => $request->title,
            'avatar' => $avatar_name,
            'timeApplication' => $request->timeApplication,
            'content' => $request->content,
            'created_at' =>now()->toDateTimeString(),
            'update_at' => now()->toDateTimeString(),
        ]);
        return redirect()->route(route: 'listPromotion');
    }
    public function promotionEdit(){

    }
    public function promotionEditSave(){

    }
    public function promotionDelete($id){
        $promotion = Promotions::find($id);
        $path = public_path('FileImage/promotion/' . $promotion->avatar);
        // dd($path);
        if (unlink($path)) {
            $promotion->delete();
        }
        return redirect()->route(route: 'listPromotion');
    }
    
}
