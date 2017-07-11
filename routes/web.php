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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware' => 'auth'], function ()
{
	Route::get('surat/buat', ['as' => 'surat.buat', 'uses' => 'buatController@index']);
	Route::post('surat/print', ['as' => 'surat.print', 'uses' => 'buatController@cetak']);

	Route::get('surat/masuk', ['as' => 'surat.masuk', 'uses' => 'SuratMasukController@index']);
    Route::get('surat/create', ['as' => 'surat.create', 'uses' => 'SuratMasukController@create']);
    Route::post('surat/store', ['as' => 'surat.store', 'uses' => 'SuratMasukController@store']);
    Route::get('surat/masuk/download', ['as' => 'surat.download', 'uses' => 'SuratMasukController@download']);
    Route::get('surat/masuk/delete/{id}', ['as' => 'surat.delete', 'uses' => 'SuratMasukController@delete']);

    Route::get('surat/keluar', ['as' => 'surat.keluar', 'uses' => 'SuratKeluarController@index']);


	// Route::get('surat/cari/ex', ['as' => 'surat.cari.execute', 'uses' => 'CariSuratController@search']);
});
