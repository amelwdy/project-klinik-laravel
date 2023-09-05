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
    return view('auth/login_new');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//user
Route::resource('/user','userController' );
Route::get('/user/hapus/{id}','userController@destroy' );
Route::get('/user/edit/{id}','userController@edit');

//obat
Route:: resource('/obat','obatController' );
Route:: get('/obat/hapus/{id}','obatController@destroy' );
Route::get('/obat/edit/{id}','obatController@edit');

//akun
Route:: resource('/akun','akunController' );
Route:: get('/akun/hapus/{id}','akunController@destroy' );
Route::get('/akun/edit/{id}','akunController@edit');

//pasien
Route:: resource('/pasien','pasienController' );
Route::get('/pasien/edit/{id}','pasienController@edit');
Route::get('/pasien/show/{id}','pasienController@show');

//rekam_medis
Route:: resource('/rekam_medis','rekamMedisController' );
Route::get('/rekam_medis/edit/{id}','rekamMedisController@edit');

//transaksi
Route:: resource('/transaksi','transaksiController');
Route::get('/transaksi/edit/{id}','transaksiController@edit');
Route::get('/transaksi/show/{id}','transaksiController@show');

//laporan
Route:: resource('/laporan','LaporanPendapatanController' );
//laporan_cetak
Route::get('/laporan/cetak', 'LaporanController@cetak_pdf');
