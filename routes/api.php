<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/index', 'App\Http\Controllers\ApiTestController@index')->name('test.api');
Route::group(['namespace'=>'App\Http\Controllers'], function(){
    Route::post('/store', 'ApiTestController@store')->name('test.store');
    Route::post('/test2', 'ApiTestController@test2')->name('test.test2');
});

Route::group(['namespace'=>'App\Http\Controllers', 'prefix'=>'worker'], function(){
    Route::get('/index', 'WorkerController@all');
    Route::post('/store', 'WorkerController@store')->name('worker.store');
    Route::get('/{id}', 'WorkerController@show')->name('worker.show');
    Route::patch('/{id}/update', 'WorkerController@update')->name('worker.update');
    Route::delete('/{id}/delete', 'WorkerController@delete')->name('worker.delete');
});
