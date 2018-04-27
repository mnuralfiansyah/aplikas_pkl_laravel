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

Route::get('/tes', function () {
    return view('admin.pagetable');
});

Route::get('/dashboard', function () {
    return view('admin.body.dashboard')->with('judul','beranda');
})->name('dashboard');

Route::get('/mahasiswa', function () {
    return view('admin.body.mahasiswa');
})->name('mahasiswa');

Route::post('/mahasiswa', function () {
    return view('admin.body.mahasiswa');
});

Route::get('/dosen', function () {
    return view('admin.body.dosen');
})->name('dosen');

Route::get('/perusahaan', function () {
    return view('admin.body.perusahaan');
})->name('perusahaan');



Route::get('/tester', function () {
    return view('admin.terter');
});

Route::get('/lupapassword', function () {
    return 'Halaman dalam proses pembuatan';
})->name('lupapassword');










Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('datamahasiswa', 'DataMahasiswaController');
Route::resource('datadosen', 'DataDosenController');
Route::resource('dataperusahaan', 'DataPerusahaanController');

//login Facebook
Route::get('login/fb', 'FBLoginController@redirectToProvider')->name('login-fb');
Route::get('login/fb/callback', 'FBLoginController@handleProviderCallback');

//login Google
Route::get('login/google', 'GoogleLoginController@redirectToProvider')->name('login-google');
Route::get('login/google/callback', 'GoogleLoginController@handleProviderCallback');
