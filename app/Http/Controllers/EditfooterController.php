<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditfooterController extends Controller
{
    public function form_edit(){
        return view('admin/edit_banner');
    }
    public function ndbanner(){
        return view('admin/banner_footer');
    }
}
