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
            'updated_at' => now()->toDateTimeString(),
        ]);
        return redirect()->route(route: 'listPromotion');
    }
    public function promotionEdit($id){
        $promotion = Promotions::find($id);
        return view('Categorise/Promotion/promotion-edit', ['promotion' => $promotion]);
    }
    public function promotionEditSave(Request $request, $id){
        $nameAvatar = null;
        $promotion = Promotions::find($id);
        if($request->has('avatar')){
            $path = public_path('FileImage/promotion/' .$promotion->avatar);
            unlink($path);
            $file = $request->file('avatar');
            $nameAvatar = time() . "_" . $file->getClientOriginalName();
            $file->move(base_path('public/FileImage/promotion'), $nameAvatar);
            $request['file'] = $nameAvatar;
        }
        if($nameAvatar == null){
            $nameAvatar = $promotion->avatar;
        }
        $promotion -> title = $request->input('title');
        $promotion -> avatar = $nameAvatar;
        $promotion -> content = $request->input('content');
        $promotion -> timeApplication = $request->input('timeApplication');
        $promotion -> updated_at = now()->toDateTimeString();
        $promotion -> save();

        return redirect()->route(route: 'listPromotion');
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
