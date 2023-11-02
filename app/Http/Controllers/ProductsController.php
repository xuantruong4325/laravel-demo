<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Editfooter;

class ProductsController extends Controller
{
    public function Home(){
        $contents = Content::all();
        $editfooters=Editfooter::all();
        return view('product/Home', compact('contents','editfooters'));
    }
    
}
