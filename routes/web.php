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

// give blank page
Route::get('/', function () {
    return 'opps...';
});

Route::match(['get', 'post'],'/tambahmulti', function () {
    return view('tambahmulti');
});
// Route::post('/tambahmulti/simpan','tambahmulti@simpan');


// login
Route::get('/login', 'otentikasi\OtentikasiController@index' )-> name('login') ;
Route::post('/login', 'otentikasi\OtentikasiController@login') -> name('login');
Route::get('/logout', 'otentikasi\OtentikasiController@logout') -> name('logout');

//login group midleware
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', function () {
        return view('home');
    });

    
    //prokom form F1
    Route::get('prokom', 'prokomController@index' ) -> name('prokomF1-index');
    Route::get('prokom/tambah', 'prokomController@tambah' ) -> name('prokomF1-tambah');
    Route::post('prokom/simpan', 'prokomController@simpan' ) -> name('prokomF1-simpan');
    Route::post('prokom/update', 'prokomController@update' ) -> name('prokomF1-update');

    //prokom form jenis program
    Route::get('prokom/jenisprogram/', 'prokomJenisProgramController@index' ) -> name('prokomF1-index-jenis-program');
    Route::get('prokom/jenisprogram/tambah', 'prokomJenisProgramController@tambah' ) -> name('prokomF1-tambah-jenis-program');
    Route::post('prokom/jenisprogram/simpan', 'prokomJenisProgramController@simpan' ) -> name('prokomF1-simpan-jenis-program');


    //prokom form channel program
    Route::get('prokom/channelprogram/', 'prokomChannelController@index' ) -> name('prokomF1-index-channel-program');
    Route::get('prokom/channelprogram/tambah', 'prokomChannelController@tambah' ) -> name('prokomF1-tambah-channel-program');
    Route::post('prokom/channelprogram/simpan', 'prokomChannelController@simpan' ) -> name('prokomF1-simpan-channel-program');


    //prokom form metode klaim
    Route::get('prokom/metodeklaim/', 'prokomMetodeKlaimController@index' ) -> name('prokomF1-index-metode-klaim');
    Route::get('prokom/metodeklaim/tambah', 'prokomMetodeKlaimController@tambah' ) -> name('prokomF1-tambah-metode-klaim');
    Route::post('prokom/metodeklaim/simpan', 'prokomMetodeKlaimController@simpan' ) -> name('prokomF1-simpan-metode-klaim');
   
    //prokom form Cost Sheet
    Route::get('prokom/costsheet/', 'costsheetController@index' ) -> name('prokomF1-index-chost-sheet');
    Route::get('prokom/costsheet/tambah', 'costsheetController@tambah' ) -> name('prokomF1-tambah-chost-sheet');
    Route::post('prokom/costsheet/simpan', 'costsheetController@simpan' ) -> name('prokomF1-simpan-chost-sheet');

    //Kelengkapan dokumen
    Route::get('/prokom/kelengkapandokumen', 'kelengkapandokumenController@index' )-> name('kelengkapan-dokumen-index') ;
    Route::get('/prokom/kelengkapandokumen/tambah', 'kelengkapandokumenController@tambah' )-> name('kelengkapan-dokumen-tambah') ;
    Route::post('/prokom/kelengkapandokumen/simpan', 'kelengkapandokumenController@simpan' )-> name('kelengkapan-dokumen-simpan') ;
    Route::get('/prokom/kelengkapandokumen/lampiran', 'kelengkapandokumenController@tambahlampiran' )-> name('kelengkapan-dokumen-tambah-lampiran') ;
    Route::post('/prokom/kelengkapandokumen/simpanlampiran', 'kelengkapandokumenController@simpanlampiran' )-> name('kelengkapan-dokumen-simpan-lampiran') ;

    //prokom view with get id
    Route::get('/prokom/print/{id}', 'prokomController@print' ) -> name('prokomF1-print');
    Route::get('/prokom/prints/{id}', 'prokomController@prints' ) -> name('prokomF1-prints');
    Route::post('/prokom/{id}', 'prokomController@hapus' ) -> name('prokomF1-hapus');
    Route::delete('/prokom/jenisprogram/hapus/{id}', 'prokomJenisProgramController@hapus' ) -> name('prokomF1-jenis-program-hapus');
    Route::delete('/prokom/channelprogram/hapus/{id}', 'prokomChannelController@hapus' ) -> name('prokomF1-channel-program-hapus');
    Route::get('/prokom/{id}', 'prokomController@detail' ) -> name('prokomF1-detail');
        
});



    
    
    
    
