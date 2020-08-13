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

//give blank page
Route::get('/', function () {
    return 'opps...';
});

//home dashboard
Route::get('/home', function () {
    return view('home');
});

//index prokom feature
// Route::get('/prokom', function () {
//     return view('prokoms.index');
// });

//prokom form F1
Route::get('prokom', 'prokomController@index' ) -> name('prokomF1-index');
Route::get('prokom/tambah', 'prokomController@tambah' ) -> name('prokomF1-tambah');
Route::post('prokom/simpan', 'prokomController@simpan' ) -> name('prokomF1-simpan');

//prokom form jenis program
Route::get('prokom/jenisprogram/', 'prokomJenisProgramController@index' ) -> name('prokomF1-index-jenis-program');
Route::get('prokom/jenisprogram/tambah', 'prokomJenisProgramController@tambah' ) -> name('prokomF1-tambah-jenis-program');
Route::post('prokom/jenisprogram/simpan', 'prokomJenisProgramController@simpan' ) -> name('prokomF1-simpan-jenis-program');

//prokom form mekanismeklaim
Route::get('prokom/mekanismeklaim/', 'prokomMekanismeKlaimController@index' ) -> name('prokomF1-index-mekanisme-klaim');
Route::get('prokom/mekanismeklaim/tambah', 'prokomMekanismeKlaimController@tambah' ) -> name('prokomF1-tambah-mekanisme-klaim');
Route::post('prokom/mekanismeklaim/simpan', 'prokomMekanismeKlaimController@simpan' ) -> name('prokomF1-simpan-mekanisme-klaim');

//prokom form channel program
Route::get('prokom/channelprogram/', 'prokomchannelProgramController@index' ) -> name('prokomF1-index-channel-program');
Route::get('prokom/channelprogram/tambah', 'prokomchannelProgramController@tambah' ) -> name('prokomF1-tambah-channel-program');
Route::post('prokom/channelprogram/simpan', 'prokomchannelProgramController@simpan' ) -> name('prokomF1-simpan-channel-program');

// Route::get('prokom/printProkom', function () {
//     return view('formProkom/printProkom');
// });

//test crud
Route::get('crud', 'CrudController@index' ) -> name('crud-index');
Route::get('crud/tambah', 'CrudController@tambah' ) -> name('crud-tambah');
Route::post('crud/simpan', 'CrudController@simpan' ) -> name('crud-simpan');



