<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::post('/addnewpizza','HomeController@addPizza');
Route::post('/registernew','HomeController@register');

Route::get('/orderpizza', function () {

    return view('orderpizza');
});
Route::get('/addpizza', function () {

    return view('addpizza');
});
Route::get('/login', function () {

    return view('login');
});
Route::get('/register', function () {

    return view('register');
});
//Route::get('/orderpizza','HomeController@tampilanawal');
