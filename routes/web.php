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

Route::get('/', function(){
    return view('bc_homepage');
});

Route::get('/GetStarted', function(){
    return view('bc_getstarted');
});

Route::get('/SignIn', function(){
    return view('bc_login');
});

Route::get('/Chat', function(){
    return view('bc_chat');
});

Route::get('/UserAccount', function(){
    return view('bc_paAcct');
});