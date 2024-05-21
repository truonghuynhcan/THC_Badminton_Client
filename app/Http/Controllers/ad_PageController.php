<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ad_PageController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
}
