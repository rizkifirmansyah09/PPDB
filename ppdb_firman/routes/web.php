<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('auth.login');
});
Route::get('/', 'DaftarSiswaController@index');
Route::post('/daftarsiswa', 'DaftarSiswaController@store')->name('daftarsiswa');
Auth::routes();
Route::middleware('auth')->group(function(){
    Route::resource('dashboard','DashboardController');
    Route::prefix('admin')->name('admin.')->group(function(){
        Route::get('/home', 'HomeController@index')->name('home');
        Route::resource('siswa', 'SiswaController')->except('pdf');    
        Route::get('/{id}/pdf_siswa', 'SiswaController@pdf')->name('siswa.pdf');
    });
});


