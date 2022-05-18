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
    return view('welcome');
});

Route::get('/backend', 'KecamatanController@index');

Route::resource('kecamatan', 'KecamatanController');

// Route::get('kecamatan-list', 'KecamatanController@list')->name('kecamatan.list');
Route::post('kecamatan-import', 'KecamatanController@kecamatanImport')->name('kecamatan.import');
Route::get('kecamatan-export/{type}', 'KecamatanController@kecamatanExport')->name('kecamatan.export');