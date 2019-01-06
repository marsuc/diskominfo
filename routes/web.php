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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Auth::routes();

Route::get('/', 'SiteController@home')->name('home');
Route::get('/profil', 'SiteController@profil')->name('profil');
Route::get('/informasi-publik', 'SiteController@informasiPublik')->name('informasi-publik');
Route::get('/ppid-pembantu', 'SiteController@ppidPembantu')->name('ppid-pembantu');
Route::get('/permohonan-informasi', 'SiteController@permohonanInformasi')->name('permohonan-informasi');
Route::post('/permohonan-informasi', 'SiteController@insertPermohonanInformasi');
Route::get('/kontak-kami', 'SiteController@kontakKami')->name('kontak-kami');

Route::get('/berita', 'BeritaController@index')->name('berita');
