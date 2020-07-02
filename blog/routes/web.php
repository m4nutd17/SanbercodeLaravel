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

Route::get('/',function(){
    return view('items.table');
});

Route::get('/data-tables',function(){
    return view('items.dataitems');
});

Route::get('/register', 'AuthController@register');

Route::get('/welcome', 'AuthController@welcome');

Route::post('/welcome', 'AuthController@post');

Route::get('/master', function(){
    return view('master');
});

Route::get('/items', function(){
    return view('items.index');
});