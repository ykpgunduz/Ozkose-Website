<?php

use Illuminate\Support\Facades\Route;

// Ana sayfa
Route::get('/', function () {
    return view('index');
})->name('anasayfa');

// Hakkımızda sayfası
Route::get('/hakkimizda', function () {
    return view('hakkimizda');
})->name('hakkimizda');

// İletişim sayfası
Route::get('/bize-ulasin', function () {
    return view('bize-ulasin');
})->name('bize-ulasin');

// Projeler sayfası
Route::get('/projelerimiz', function () {
    return view('projelerimiz');
})->name('projelerimiz');

// Sektörler
Route::get('/insaat', function () {
    return view('insaat');
})->name('insaat');

Route::get('/restorasyon', function () {
    return view('restorasyon');
})->name('restorasyon');

Route::get('/gayrimenkul', function () {
    return view('gayrimenkul');
})->name('gayrimenkul');

Route::get('/turizm', function () {
    return view('turizm');
})->name('turizm');

Route::get('/gida', function () {
    return view('gida');
})->name('gida');

Route::get('/madencilik', function () {
    return view('madencilik');
})->name('madencilik');

Route::get('/yigma-yapi', function () {
    return view('yigma-yapi');
})->name('yigma-yapi');

// Proje detay sayfaları
Route::get('/projeler/tarabya-selma-turkes-kosku', function () {
    return view('tarabya-selma-turkes-kosku');
})->name('tarabya-selma-turkes-kosku');

Route::get('/projeler/sapanca-villa-insaati', function () {
    return view('sapanca-villa-insaati');
})->name('sapanca-villa-insaati');

Route::get('/projeler/nulifer-elif-sah-villa-restorasyonu', function () {
    return view('nulifer-elif-sah-villa-restorasyonu');
})->name('nulifer-elif-sah-villa-restorasyonu');

Route::get('/projeler/mermerci-holding', function () {
    return view('mermerci-holding');
})->name('mermerci-holding');

Route::get('/projeler/iltekno-ofis', function () {
    return view('iltekno-ofis');
})->name('iltekno-ofis');

Route::get('/projeler/bogaz-villasi-restorasyonu', function () {
    return view('bogaz-villasi-restorasyonu');
})->name('bogaz-villasi-restorasyonu');

Route::get('/projeler/beyoglu-turkhan', function () {
    return view('beyoglu-turkhan');
})->name('beyoglu-turkhan');

Route::get('/projeler/ahikent-villalari', function () {
    return view('ahikent-villalari');
})->name('ahikent-villalari');

