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
    return view('items.index');
});
Route::get('/pertanyaan/create', 'PertanyaanController@create');
Route::get('/pertanyaan/{id}/edit', 'PertanyaanController@edit');
Route::get('/pertanyaan/{id}', 'PertanyaanController@show');
Route::put('/pertanyaan/{id}', 'PertanyaanController@update');
Route::delete('/pertanyaan/{id}', 'PertanyaanController@destroy');

Route::get('/items/create', 'ItemController@create');
Route::post('/items', 'ItemController@store');

Route::get('/pertanyaan', 'PertanyaanController@index');

Route::post('/pertanyaan', 'PertanyaanController@store');

Route::get('/jawaban/{pertanyaan_id}', 'JawabanController@index');
Route::post('/jawaban/{pertanyaan_id}', 'JawabanController@store');
Route::get('/createJawaban/{pertanyaan_id}', 'JawabanController@create');


