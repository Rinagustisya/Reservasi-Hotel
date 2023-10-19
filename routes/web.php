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

Route::get('/', function () {
    return view('welcome');
})->name('home');

// route login sesuai role
Route::group([
    'prefix' => config('admin.path'), 
    'middleware' =>['auth:admin'],
], function(){
    Route::view('/', 'dashboard')->name('dashboard');
    Route::view('admin', 'admin.index')->name('admin.index');
});
Route::view(config('admin.path').'/login', 'auth.login')->name('admin.login');
// end login sesuai role

Route::view('kamar', 'kamar')->name('kamar');
Route::view('fasilitas', 'fasilitas')->name('fasilitas');
