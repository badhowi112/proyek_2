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
    return view('welcome');
});

Route::get('/login','Login@index')->name('login');
Route::post('/postlogin','Login@postlogin');
Route::get('/logout','Login@logout');


Route::group(['middleware' => ['auth','checkRole:admin']],function(){

Route::get('/blank','BlankPage@index' );
Route::get('/testing','testing@index' );
});

Route::group(['middleware' => ['auth','checkRole:admin,pegawai']],function(){

Route::get('/dashboard','Dashboard@index');
Route::get('/data_warga','DataWarga@index' );
Route::get('/dashboard','Dashboard@index' );
Route::get('/data_warga/{id}/edit','DataWarga@edit');
Route::post('/data_warga/{id}/update','DataWarga@update');
Route::get('/data_warga/{id}/delete','DataWarga@delete');
Route::post('/data_warga/tambah','DataWarga@create');
//Route::get('/data_warga/add','DataWarga@add');
Route::get('/testing','testing@index' );
Route::post('/testing/add','testing@add' );
});