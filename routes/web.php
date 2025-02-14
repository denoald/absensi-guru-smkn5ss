<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
});




 Route::get('/data-guru', function () {
     return view('data_guru');
 })->name('data_guru');
 
 Route::get('/laporan-absensi', function () {
    return view('laporan_absensi');
 })->name('laporan_absensi');
 
 Route::get('/setting-profile', function () {
    return view('setting_profile');
 })->name('setting_profile');
 
 Route::get('/logout', function () {
    return redirect('/')->with('success', 'Berhasil logout');
 })->name('logout');
