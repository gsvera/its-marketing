<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/nosotros', function() {
    return view('about');
});
Route::get('/agencia-de-marketing-digital-cancun', function() {
    return view('digital-marketing');
});
Route::get('/agencia-de-redes-sociales-cancun', function() {
    return view('rrss');
});
Route::get('/agencia-de-publicidad-digital-cancun', function() {
    return view('digital-advertising');
});
Route::get('/agencia-seo-posicionamiento-web-cancun', function() {
    return view('seo-position');
});
Route::get('/agencia-de-diseño-y-desarrollo-de-paginas-web-cancun', function() {
    return view('web-desing');
});
Route::get('/casos-de-exito', function() {
    return view('success-case');
});;