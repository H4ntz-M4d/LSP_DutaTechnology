<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

// PROFILE 
Route::get('/profil/sambutan-direktur', function () {
    return view('profil.sambutan');
});

Route::get('/profil/tentang-lsp', function () {
    return view('profil.tentang-lsp');
});

Route::get('/profil/struktur-organisasi', function () {
    return view('profil.struktur-organisasi');
});

Route::get('/profil/ekosistem-lspta', function () {
    return view('profil.ekosistem-lspta');
});
// PROFILE 

// SERTIFIKASI
Route::get('/sertifikasi/alur-uji-dan-skema-sertifikasi', function () {
    return view('sertifikasi.alur-uji-dan-skema-sertifikasi');
});

Route::get('/sertifikasi/skkni', function () {
    return view('sertifikasi.skkni');
});
// SERTIFIKASI
