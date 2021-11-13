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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::post('/tambah','App\Http\Controllers\userController@tambah')->name('tambah');
Route::get('/ubah','App\Http\Controllers\userController@ubah')->name('ubah');
Route::get('/hapus','App\Http\Controllers\userController@hapus')->name('hapus');
Route::get('/','App\Http\Controllers\userController@tampilan')->name('awal');
Route::get('/edit','App\Http\Controllers\userController@editView')->name('edit');