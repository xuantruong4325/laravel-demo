<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\Comment;
use Illuminate\Support\Facades\Storage;

class NdController extends Controller
{
    public function form_basic(){
        return view('form-basic');
    }
  
    public function ndstore(Request $request)
    {
        
        if($request->has('file')){
            $file = $request->file;
            $file_name= $file -> getClientOriginalName();
            $file -> move(base_path('public/image'),$file_name);

        }
        $conten = Content::create([
            'title' => $request->title,
            'category' => $request->category,
            'file' => $file_name,
            'content' => $request->content,
            'author' => $request->author,
            'status' => $request->status
        ]);
        return redirect()->route(route:'ndindex');
    }
    

    public function ndindex(){
        $contents = Content::all();
        return view('nd', ['contents' => $contents]);
    }

    public function nddelete($id){
        // $content = Content::where('id', '=', $id)->first();
        $content = Content::find($id);
        // if($content){
            // $fileDelete = $content->file;
            $path = public_path('image/' . $content->file);
            if(unlink($path)){
                $content->delete();
            }
        // }
        return redirect()->route(route:'ndindex');
    }

    public function ndUpdate($id){
        $content = Content::find($id);
        return view('form-update', compact('content'));
    }
    public function ndfromUpdate(Request $request, $id){
        $content = Content::find($id);
        $path = public_path('image/' . $content->file);
        unlink($path);
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
            return redirect()->route(route:'ndindex');
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

    // public function test(Request $request){
    //     $URL_EDIT_KEY = route('ndUpdate', ['title' => $request->id]);
    //     $token =  Content::where('id', $request->id)->first();
    //     return response()->json([
    //         "url" => $URL_EDIT_KEY,
    //         "unit_name" => $token->title,
    //     ]);
    // }

}
