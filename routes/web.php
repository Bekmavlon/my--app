<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/salom', function () {
    return 'Salom, Laravel! Bu mening birinchi sahifam.';
});