<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\news;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function newsList(){
        $news = news::all();
        return view('Categorise/News/news-list', ['news' => $news]);
    }
    public function newsAdd(){
        return view('Categorise/News/news-add');

    }
    public function newsAddSave(Request $request){
        $avatar_name = null;
        if($request->has('avatar')){
            $avatar = $request->avatar;
            $avatar_name = $avatar->getClientOriginalName();
            $avatar->move(base_path('public/FileImage/news'), $avatar_name);
        }
        $news = news::create([
            'title' => $request->title,
            'avatar' => $avatar_name,
            'content_title' => $request->content_title,
            'content' => $request->content,
            'created_at' =>now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ]);
        return redirect()->back()->with('redirect', true);
    }
    public function newsEdit($id){
        $news = news::find($id);
        return view('Categorise/News/news-edit', ['news' => $news]);
    }
    public function newsEditSave(Request $request, $id){
        $nameAvatar = null;
        $news = news::find($id);
        if($request->has('avatar')){
            $path = public_path('FileImage/news/' .$news->avatar);
            unlink($path);
            $file = $request->file('avatar');
            $nameAvatar = time() . "_" . $file->getClientOriginalName();
            $file->move(base_path('public/FileImage/news'), $nameAvatar);
            $request['file'] = $nameAvatar;
        }
        if($nameAvatar == null){
            $nameAvatar = $news->avatar;
        }
        $news -> title = $request->input('title');
        $news -> avatar = $nameAvatar;
        $news -> content = $request->input('content');
        $news -> content_title = $request->input('content_title');
        $news -> updated_at = now()->toDateTimeString();
        $news -> save();

        return redirect()->back()->with('redirect', true);
    }
    public function newsDelete($id){
        $news = news::find($id);
        $path = public_path('FileImage/news/' . $news->avatar);
        // dd($path);
        if (unlink($path)) {
            $news->delete();
        }
        return redirect()->route(route: 'listNews');
    }
}
