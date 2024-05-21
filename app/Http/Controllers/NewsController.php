<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index (){
        $query = DB::table('news')
        ->select('img', 'id', 'title', 'sub_title')
        ->orderBy('date', 'desc')
        ->limit(10);
        $data= $query->get();
        return view('news', ['data'=>$data]);
    }
    public function newsType($id) {
        $post = DB::table('news')->where('id_cate', $id)->get(); 
        return view('news', ['data' => $post]);
    }
    public function detail($id) {
        $post = DB::table('news')->where('id', $id)->first(); 
        return view('news_detail', ['data' => $post]);
    }
    
}
