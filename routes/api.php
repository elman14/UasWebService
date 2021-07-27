<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});




Route::get('/bukus', 'BukuController@index')->middleware('auth:api');
Route::get('/bukus/{buku}', 'BukuController@show');
Route::post('/bukus', 'BukuController@store')->middleware('auth:api');
Route::put('/bukus/{buku}', 'BukuController@edit')->middleware('auth:api');
Route::delete('/bukus/{buku}', 'BukuController@destroy')->middleware('auth:api');

Route::get('/peminjamen', 'PeminjamanController@index')->middleware('auth:api');
Route::get('/peminjamen/{peminjaman}', 'PeminjamanController@show');
Route::post('/peminjamen', 'PeminjamanController@store')->middleware('auth:api');
Route::put('/peminjamen/{peminjaman}', 'PeminjamanController@edit')->middleware('auth:api');
Route::delete('/peminjamen/{peminjaman}', 'PeminjamanController@destroy')->middleware('auth:api');


Route::get('password', function (){
    return bcrypt('elman');
});
Route::group([ 'middleware' => 'api',  'prefix' => 'auth'], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('wajib', 'AuthController@wajib');

});



