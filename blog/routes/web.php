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
    return view('items.home');
});

Route::get('/pertanyaan/create', 'PertanyaanController@create');
Route::post('/pertanyaan', 'PertanyaanController@store'); //Menyimpan data
Route::get('/pertanyaan', 'PertanyaanController@index'); // menampilkan data
Route::get('/pertanyaan/{id}', 'PertanyaanController@show');

Route::get('/jawaban/create', 'JawabanController@create');
Route::get('/jawaban/{pertanyaan_id}', 'JawabanController@index');
Route::post('/jawaban/{pertanyaan_id}', 'JawabanController@store'); //Menyimpan data