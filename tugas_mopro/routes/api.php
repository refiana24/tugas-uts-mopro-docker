<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/simpan', 'App\Http\Controllers\Api\allController@simpan');
Route::post('/ubah', 'App\Http\Controllers\Api\allController@ubah');
Route::post('/hapus', 'App\Http\Controllers\Api\allController@hapus');
Route::post('/data', 'App\Http\Controllers\Api\allController@data');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
