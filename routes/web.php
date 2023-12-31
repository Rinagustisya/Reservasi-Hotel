<?php

use App\Http\Controllers\CetakBuktiController;
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
            Route::get('/show-image/{filename}', 'MonitoringController@show1')->name('show.image');
        });
        
        Route::group(['middleware' =>['can:role,"admin"']], function(){
        Route::resource('admin', 'AdminController');
        Route::resource('kamar', 'KamarController');
        
        // fasilitas umum
        Route::resource('fasUmum', 'FasUmumController');
        Route::get('/fasu/edit/{fasUid}', 'FasUmumController@edit')->name('fasu.edit');
        Route::delete('/fasu/edit/{fasUid}', 'FasUmumController@destroy')->name('fasu.delete');
        Route::put('/fasu/update/{fasUid}', 'FasUmumController@update')->name('fasu.update');
        
        // fasilitas kamar
        Route::resource('fasilitas', 'FasilitasController');
        Route::get('/fask/edit/{fasId}', 'FasilitasController@edit')->name('fask.edit');
        Route::delete('/fas/hapus/{fasId}', 'FasilitasController@destroy')->name('fask.hapus');
        Route::put('/fas/update/{fasId}', 'FasilitasController@update')->name('fask.update');
        Route::get('/fas/showdata', 'FasilitasController@showData')->name('fas.showData');
        Route::get('/show-foto/{filename1}', 'FasilitasController@show1')->name('show.foto');
        });
    });
});
// end login sesuai role
Route::get('/print', 'CetakBuktiController@print')->name('cetak.bukti');
Route::view('kamar', 'kamar')->name('kamar');
Route::view('pesan', 'pesan')->name('pesan');
Route::view('fasilitas', 'fasilitas')->name('fasilitas');
Route::post('tambah', 'PesanController@create')->name('pesan.create');
Route::post('home/booking', 'PesanController@store')->name('pesan.store');


