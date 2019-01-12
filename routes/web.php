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
Route::get('/informasi-publik', 'SiteController@informasiPublik')->name('informasi-publik');
Route::get('/ppid-pembantu', 'SiteController@ppidPembantu')->name('ppid-pembantu');
Route::get('/permohonan-informasi', 'SiteController@permohonanInformasi')->name('permohonan-informasi');
Route::post('/permohonan-informasi', 'SiteController@insertPermohonanInformasi');
Route::get('/kontak-kami', 'SiteController@kontakKami')->name('kontak-kami');

Route::get('/berita', 'BeritaController@index')->name('berita');

Route::group(['prefix' => 'profil'], function () {
    Route::get('/',                     'profil\ProfilController@index')->name('profil');
    Route::get('/bagan-organisasi',     'profil\ProfilController@indexBagan')->name('bagan-organisasi');
    Route::get('/visi-misi',            'profil\ProfilController@indexVisiMisi')->name('visi-misi');
    Route::get('/sop',                  'profil\ProfilController@indexSop')->name('sop');
    Route::get('/maklumat-informasi',   'profil\ProfilController@indexMaklumatInformasi')->name('maklumat-informasi');
    Route::get('/mekanisme-pelayanan',  'profil\ProfilController@indexMekanismePelayananInformasi')->name('mekanisme-pelayanan');
    Route::get('/standar-pelayanan',    'profil\ProfilController@indexStandarPelayananInformasi')->name('standar-pelayanan');
    Route::get('/galeri',               'profil\ProfilController@indexGaleri')->name('galeri');
    Route::get('/dasar-hukum',          'profil\ProfilController@indexDasarHukum')->name('dasar-hukum');
});
