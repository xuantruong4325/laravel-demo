<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Content;

class ProductsController extends Controller
{
    public function Home(){
        $contents = Content::all();
        return view('product/Home', ['contents' => $contents]);
    }
    
}
