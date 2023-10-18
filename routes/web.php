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

Route::view('kamar', 'kamar')->name('kamar');
Route::view('fasilitas', 'fasilitas')->name('fasilitas');
Route::view('admin', 'dashboard')->name('dashboard');
Route::view('admin/admin', 'admin.index')->name('admin.index');
Route::view('admin/login', 'auth.login')->name('auth.login');