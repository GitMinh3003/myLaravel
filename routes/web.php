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

// Route::get('user/{id}/profile', 'App\Http\Controllers\SliderControllers@index')->name('profile');
Route::get('user/{user}', 'App\Http\Controllers\SliderControllers@index');