<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/albert', function () {
    $albert = 'kakashi';
    return $albert;
});
Route::get('/variable', function () {
    $variable = 4;
    return view('welcome', compact('variable'));
});

Route::get('/',function(){
    $text = 25;
    $text2 = 20;
    return view("home", compact("text","text2"));
});
