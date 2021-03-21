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
    $pelajaran = \App\Pelajaran::get();
    return view('welcome',['pelajaran' => $pelajaran]);
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


//DAFTAR
Route::get('daftar-akun', 'CalonController@index');
Route::post('daftar-akun/store', 'CalonController@store');


//ADMIN
Route::group(['middleware' => ['auth','StatusRole:admin']], function () {
    //  USER
    Route::get('data-user', 'UserController@index');
    Route::get('tambah-user', 'UserController@tambah');
    Route::post('data-user/tambah-user', 'UserController@store');

    //DATA SISWA
    Route::get('siswa', 'SiswaController@index');
    Route::get('tambah-siswa', 'SiswaController@tambah');
    Route::post('/tambah-siswa/store', 'SiswaController@store');
    Route::get('{id}/edit-siswa/', 'SiswaController@edit');
    Route::post('{id}/update-siswa/', 'SiswaController@update');
    Route::get('{id}/delete/', 'AdminController@hps');

    Route::get('/siswa/export','SiswaController@export');

    //DATA PEGAWAI
    Route::get('pegawai', 'PegawaiController@index');
    Route::get('tambah-pegawai', 'PegawaiController@tambah');
    Route::post('/tambah-pegawai/store', 'PegawaiController@store');
    Route::get('{id}/edit-pegawai/', 'PegawaiController@edit');
    Route::post('{id}/update-pegawai/', 'PegawaiController@update');
    Route::get('{id}/delete/', 'PegawaiController@delete');
    Route::get('/pegawai/export', 'PegawaiController@export');

    //KEGIATAN PEMBELAJARAN
    Route::get('kegiatan', 'PelajaranController@index');
    Route::get('tambah-kegiatan', 'PelajaranController@tambah');
    Route::post('/tambah-kegiatan/store', 'PelajaranController@store');
    Route::get('{id}/edit-kegiatan/', 'PelajaranController@edit');
    Route::post('{id}/update-kegiatan/', 'PelajaranController@update');
    Route::get('/hapus/{id}', 'PelajaranController@hapus');

    //KURIKULUM
    Route::get('kurikulum', 'KurikulumController@index');
    Route::get('tambah-kurikulum', 'kurikulumController@tambah');
    Route::post('/tambah-kurikulum/store', 'KurikulumController@store');
    Route::get('{id}/edit-kurikulum/', 'KurikulumController@edit');
    Route::post('{id}/update-kurikulum/', 'KurikulumController@update');
    Route::get('/delete/{id}', 'KurikulumController@delete');

    //PENDAFTAR
    Route::get('data-pendaftar', 'PendaftarController@index');
    Route::get('{id}/delete/', 'PendaftarController@delete');
    Route::get('{id}/detail-pendaftar', 'AdminController@detail');
    Route::get('detail-pendaftar/ubah-status/{id}', 'AdminController@ubahstatus');
    Route::get('detail-pendaftar/ubah-batal/{id}', 'AdminController@ubahbatal');


    //pembayaran-INSERT
    Route::get('data-pembayaran', 'AdminController@bayar');
    Route::get('{id}/hapus/', 'AdminController@hapus');
    Route::post('terima-bayar/{id}/ubahbayar', 'AdminController@ubahbayar');

    //LAPORAN
    Route::get('laporan-daftar', 'LaporanController@daftar');
    Route::get('laporan-bayar', 'LaporanController@bayar');
    Route::get('laporan-pembatalan', 'LaporanController@batal');

    //import sis
    Route::post('/siswa/import', 'SiswaController@import');
});

// DATA DAFTAR
Route::group(['middleware' => ['auth', 'StatusRole:siswa,admin']], function () {
    //up biodata
    Route::get('isi-biodata', 'CalonController@data');
    Route::post('data/{users}', 'CalonController@tambahdata');
    Route::put('data/{users}', 'CalonController@updatedata');
    //cetak biodata
    Route::get('/formulir/exportpdf', 'HomeController@pdf');
    //CETAK BAYAR
    Route::get('/bukti/exportpdf', 'CalonController@buktipdf');

    //up bayar
    Route::get('pembayaran', 'CalonController@bayar');
    Route::post('pembayaran/{users}', 'CalonController@upbayar');
    Route::put('pembayaran/{users}', 'CalonController@sdhbyr');

    //dakpake
    Route::get('edit-dokumen', 'CalonController@edidok');
    Route::put('dokumen/{users}', 'CalonController@editdokumen');

    //bukti
    //dakpake
    Route::get('tampil-biodata', 'CalonController@tampil');

});


