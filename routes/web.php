<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/nosotros', function() {
    return view('about');
});
Route::get('/marketing-digital', function() {
    return view('digital-marketing');
});
Route::get('/redes-sociales', function() {
    return view('rrss');
});
Route::get('/publicidad-digital', function() {
    return view('digital-advertising');
});
Route::get('/posicionamiento-seo', function() {
    return view('seo-position');
});
Route::get('/diseño-y-desarrollo-de-paginas-web', function() {
    return view('web-desing');
});