<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portfolio');
});

Route::get('/kegiatan1', function () {
    return view('kegiatan1');
});

Route::get('/kegiatan2', function () {
    return view('kegiatan2');
});

Route::get('/kegiatan3', function () {
    return view('kegiatan3');
});

Route::get('/kegiatan4', function () {
    return view('kegiatan4');
});

Route::get('/kegiatan5', function () {
    return view('kegiatan5');
});

Route::get('/kegiatan6', function () {
    return view('kegiatan6');
});

Route::get('/kegiatan-lainnya', function () {
    return view('kegiatan-lainnya');
});

