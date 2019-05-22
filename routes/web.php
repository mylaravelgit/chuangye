<?php

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

Route::get('/', function () {
    return view('index');
});
Route::view('qiming','qiming');
Route::view('heming','heming');
Route::view('shengcheng','shengcheng');
Route::view('shejilogo','shejilogo');
Route::view('register2','auth.register2');
Auth::routes();




