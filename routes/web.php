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
], function(){
    Route::get('login', 'LoginAdminController@formLogin')->name('admin.login');
    Route::post('login', 'LoginAdminController@login');

    Route::group(['middleware' =>'auth:admin'], function(){
        Route::post('logout', 'LoginAdminController@logout')->name('admin.logout');
        Route::view('/', 'dashboard')->name('dashboard');

        Route::get('/akun', 'AdminController@akun')->name('admin.akun');
        Route::put('/akun', 'AdminController@UpdateAkun');

        Route::group(['middleware' =>['can:role,"resepsionis"']], function(){
            Route::get('/moni', 'MonitoringController@index')->name('moni');
            Route::get('/moni/showData', 'MonitoringController@show')->name('moni.showData');
            Route::put('/moni/update', 'MonitoringController@update')->name('moni.update');
        });
        
        Route::group(['middleware' =>['can:role,"admin"']], function(){
        Route::resource('admin', 'AdminController');
        Route::resource('kamar', 'KamarController');
        });
    });
});
// end login sesuai role
Route::view('kamar', 'kamar')->name('kamar');
Route::view('fasilitas', 'fasilitas')->name('fasilitas');
Route::post('tambah', 'PesanController@create')->name('pesan.create');

