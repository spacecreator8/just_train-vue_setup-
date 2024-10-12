<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Auth::routes();


Route::get('/{page}', [App\Http\Controllers\WorkerController::class, 'index'])->where('page', '.*');
//Route::group(['namespace'=>'App\Http\Controllers', 'prefix'=>'/person'], function(){
//    Route::get('/create', 'PersonController@create')->name('person.create');
//    Route::post('/store', 'PersonController@store')->name('person.store');
//
//    Route::get('/login', 'PersonController@login')->name('person.login');
//    Route::post('/auth', 'PersonController@auth')->name('person.auth');
//    Route::get('/acc', 'PersonController@account')->name('person.acc');
//    Route::get('/logout', 'PersonController@logout')->name('person.logout');
//
//    Route::get('/testapi', 'ApiTestController@testapi')->name('testapi');
//});
//
//Route::group(['namespace'=>'App\Http\Controllers', 'prefix'=>'/worker'], function(){
//    Route::get('/index', 'WorkerController@index')->name('worker.index');
//
//});
