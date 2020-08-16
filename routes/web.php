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

//home dashboard
// Route::get('/home', function () {
//       return view('home');
// });

//index prokom feature
// Route::get('/prokom', function () {
//     return view('prokoms.index');
// });
//test login
Route::get('/login', 'otentikasi\OtentikasiController@index' )-> name('login') ;
Route::post('/login', 'otentikasi\OtentikasiController@login') -> name('login');
Route::get('/logout', 'otentikasi\OtentikasiController@logout') -> name('logout');

// Route::get('prokom/printProkom', function () {
    //     return view('formProkom/printProkom');
    // });

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

    //prokom view with get id
    Route::get('prokom/{id}', 'prokomController@detail' ) -> name('prokomF1-detail');
        
});



    
    
    
    
