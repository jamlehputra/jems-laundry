<?php

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
    return view('auth.login');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index', 'LaundryController@index');
Route::get('/index/tambah', 'LaundryController@create');
Route::post('/index/tambah', 'LaundryController@store');

Route::get('/index/hapus/{kd_barang}', 'LaundryController@hapus');

Route::post('/index/update', 'LaundryController@update');
Route::get('/index/edit/{kd_barang}', 'LaundryController@edit');

Route::get('/pilihbarang', 'LaundryController@pilihbarang');
Route::get('/datatransaksi', 'LaundryController@datatransaksi');
Route::post('/transaksi/tambah', 'LaundryController@transaksitambah');
Route::get('/cetakdatatransaksi', 'LaundryController@cetakdatatransaksi');
Route::get('/pilihbarang/transaksi/{kd_barang}', 'LaundryController@mulaitransaksi');
Auth::routes();
