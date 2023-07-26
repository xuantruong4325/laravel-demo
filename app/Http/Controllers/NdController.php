<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\Comment;

class NdController extends Controller
{
    public function nd(){
        return view('nd');
    }
    public function ndstore(Request $request)
    {
        
        if($request->has('file')){
            $file = $request->file;
            $file_name= $file -> getClientOriginalName();
            $file -> move(base_path('public/image'),$file_name);

        }
        $content = Content::create([
            'title' => $request->title,
            'category' => $request->category,
            'file' => $file_name,
            'content' => $request->content,
            'author' => $request->author,
            'status' => $request->status
        ]);
    
    }
    

    public function ndindex(){
        $contents = Content::all();
        return view('nd', ['contents' => $contents]);
    }

    public function nddelete($id){
        $content = Content::where('id', '=', $id)->delete();
    }

    public function ndUpdate($id){
        $content = Content::find($id);
        return view('form-update', compact('content'));
    }
    public function ndfromUpdate(Request $request, $id){
        $content = Content::find($id);
        if($request->has('file')){
            $file = $request->file('file');
            $contents = time()."_".$file-> getClientOriginalName();
            $file -> move(base_path('public/image'),$contents);
            $request['file']=$contents;          
        }
            $content->title = $request->input('title');
            $content->category = $request->input('category');
            $content->file = $contents;
            $content->content = $request->input('content');
            $content->author = $request->input('author');
            $content->status = $request->input('status');
            $content->save();
    }

    public function ndSee($id){
        $content = Content::find($id);
        return view('form-see');
    }
    public function ndfromSee($id){
        // $content = Content::where('id', '=', $id)->select('*')->first();
        $pro = Content::find($id);
        $comments = Comment::where('article_id',$id)->get();
        return view('form-see', compact('pro','comments'));
    }
    public function blfromSee(Request $request){
        $commen = Comment::create([
            'article_id'=> $request->article_id,
            'comment'=>$request->comment,
        ]);
        return redirect()->back();
    }
   

}
