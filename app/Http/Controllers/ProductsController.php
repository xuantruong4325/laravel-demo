<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Editfooter;
use App\Models\Introduces;
use App\Models\Promotions;
use Illuminate\Support\Facades\Auth;
use User;

class ProductsController extends Controller
{
    public function Home(){
        $contents = Content::all();
        $editfooters=Editfooter::all();
        return view('product/Home', compact('contents','editfooters'));
    }

    public function Khuyenmai(){
        $promotions = Promotions::all();
        $editfooters=Editfooter::all();
        return view('product/Khuyenmai', compact('promotions','editfooters'));
    }

    public function Khuyenmai2($id){
        $promotions = Promotions::find($id);
        $editfooters=Editfooter::all();
        return view('product/Khuyenmai2', compact('promotions','editfooters'));
    }

    public function Gioithieu(){
        $introduces = Introduces::all();
        $editfooters=Editfooter::all();
        return view('product/Gioithieu', compact('introduces','editfooters'));
    }

    public function Tttk($id){
        $editfooters=Editfooter::all();
        return view('product/Ttkh', compact('editfooters'));
    }
}
