<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::group(['prefix' => 'admin'], function () {
    Route::get('xinchao/{user}','App\Http\Controllers\SliderControllers@getXinChao');
    Route::get('tambiet/{ten}/{namsinh}','App\Http\Controllers\SliderControllers@getTamBiet');
});
