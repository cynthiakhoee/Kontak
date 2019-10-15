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

Route::get('/kontak/create','daftarKontak@new_form')->name('daftarKontakNewForm');
Route::post('/kontak/create','daftarKontak@save')->name('daftarKontakCreate');
Route::get('/kontak/{id}/edit','daftarKontak@edit')->name('daftarKontakEditForm');
Route::post('/kontak/{id}/edit','daftarKontak@update')->name('daftarKontakUpdate');
Route::get('/kontak','daftarKontak@index')->name('daftarKontakIndex');
Route::get('/kontak/search','daftarKontak@search')->name('daftarKontakSearch');
Route::get('/kontak/{id}/delete', 'daftarKontak@delete')->name('daftarKontakDelete');


