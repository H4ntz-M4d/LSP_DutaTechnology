<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/profil/struktur-organisasi', function () {
    return view('profil.struktur-organisasi');
});

Route::get('/profil/ekosistem-lspta', function () {
    return view('profil.ekosistem-lspta');
});

Route::get('/sertifikasi/alur-uji-dan-skema-sertifikasi', function () {
    return view('sertifikasi.alur-uji-dan-skema-sertifikasi');
});

Route::get('/sertifikasi/skkni', function () {
    return view('sertifikasi.skkni');
});

Route::get('/berita', function () {
    return view('informasi.berita');
});

Route::get('/faq', function () {
    return view('informasi.faq');
});

Route::get('/table-kalender', function () {
    return view('informasi.table-kalender');
});

Route::get('/login', function () {
    return view('akun.login');
});

Route::get('/forget-password', function () {
    return view('akun.forget-password');
});
