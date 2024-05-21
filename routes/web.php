<?php

use App\Http\Controllers\ad_PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/agent', function () {
    return view('page_hethong');
});

// NEWS
Route::get('news', [NewsController::class,'index']);
Route::get('news_type/{id}', [NewsController::class,'newsType']);

Route::get('news_detail/{id}', [NewsController::class,'detail']);


Route::get('/contact', function () {
    return view('contact');
});
Route::get('cart', function () {
    return view('cart');
});
Route::get('login', function () {
    return view('page_login');
});


// admin
Route::get('ad_dashboard', [ad_PageController::class,'index']);


Route::get('ad_listOrder', function () {
    return view('ad_listOrder');
});
Route::get('ad_products', function () {
    return view('ad_products');
});
Route::get('ad_clients', function () {
    return view('ad_clients');
});