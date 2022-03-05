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

Route::view('/','welcome');
Route::view('/contact','contact');
Route::view('/about','about')->name('about');
Route::view('/our_beliefs','our_beliefs')->name('our_beliefs');
Route::view('/our_history','our_history')->name('our_history');