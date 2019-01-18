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
Route::get('/kontak-kami', 'SiteController@kontakKami')->name('kontak-kami');
// Route::post('/permohonan-informasi', 'SiteController@insertPermohonanInformasi');

Route::group(['prefix' => 'berita'], function () {
    Route::get('/', 'Berita\BeritaController@index')->name('berita');
});

Route::group(['prefix' => 'permohonan-informasi-publik'], function () {
    Route::get('/', 'PermohonanInformasi\PermohonanInformasiController@index')->name('permohonan-informasi');
});

Route::group(['prefix' => 'profil'], function () {
    Route::get('/',                     'Profil\ProfilController@index')->name('profil');
    Route::get('/bagan-organisasi',     'Profil\ProfilController@indexBagan')->name('bagan-organisasi');
    Route::get('/visi-misi',            'Profil\ProfilController@indexVisiMisi')->name('visi-misi');
    Route::get('/sop',                  'Profil\ProfilController@indexSop')->name('sop');
    Route::get('/maklumat-informasi',   'Profil\ProfilController@indexMaklumatInformasi')->name('maklumat-informasi');
    Route::get('/mekanisme-pelayanan',  'Profil\ProfilController@indexMekanismePelayananInformasi')->name('mekanisme-pelayanan');
    Route::get('/standar-pelayanan',    'Profil\ProfilController@indexStandarPelayananInformasi')->name('standar-pelayanan');
    Route::get('/galeri',               'Profil\ProfilController@indexGaleri')->name('galeri');
    Route::get('/dasar-hukum',          'Profil\ProfilController@indexDasarHukum')->name('dasar-hukum');
});
