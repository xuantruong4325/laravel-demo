<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Editfooter;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    public function Home(){
        $contents = Content::all();
        $editfooters=Editfooter::all();
        $checkUser = "fales";
        if(Auth::check()){
            $checkUser == "true";
        }
        return view('product/Home', compact('contents','editfooters','checkUser'));
    }
    
}
