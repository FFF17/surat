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

Route::get('/home', function () {
    echo "ini home";
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile/{nama}', 'HomeController@profile');

Route::get('/sekolah', 'HomeController@sekolah');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//tampilkan semua kelas
Route::get('/kelas','HomeController@all_kelas')->name('all_kelas');

//tampilkan form input kelas
Route::get('/kelas/tambah','HomeController@tambah_kelas')->name('tambah_kelas');

//proses simpan kelas
Route::POST('/kelas/save','HomeController@save_kelas')->name('save_kelas');

//tampilkan form edit kelas
Route::get('/kelas/edit/{id}','HomeController@edit_kelas')->name('edit_kelas');

//proses edit kelas
Route::POST('/kelas/update','HomeController@update_kelas')->name('update_kelas');

//proses hapus data kelas
Route::get('/kelas/delete/{id}','HomeController@delete_kelas')->name('delete_kelas');


//jurusan

//tampilkan semua 
Route::get('/jurusan','HomeController@all_jurusan')->name('all_jurusan');

Route::get('/jurusan/tambah','HomeController@tambah_jurusan')->name('tambah_jurusan');

//proses simpan kelas
Route::POST('/jurusan/save','HomeController@save_jurusan')->name('save_jurusan');

Route::get('/jurusan/edit/{id}','HomeController@edit_jurusan')->name('edit_jurusan');

//proses edit kelas
Route::POST('/jurusan/update','HomeController@update_jurusan')->name('update_jurusan');

//proses hapus data kelas
Route::get('/jurusan/delete/{id}','HomeController@delete_jurusan')->name('delete_jurusan');

Route::get('/ajax/get_jurusan', 'AjaxController@get_jurusan')->name('get_jurusan');

Route::get('/kelas_ajax', 'HomeController@kelas_ajax')->name('kelas_ajax');
