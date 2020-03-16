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

Route::get('/', 'WelcomeController@index');  //1

Route::group(['middleware' => ['web']], function () {  //2
    //
});

// 추가된 라우팅
Route::group(['middleware' => 'web'], function () { //3
    Route::auth();
    Route::get('/home', 'HomeController@index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
