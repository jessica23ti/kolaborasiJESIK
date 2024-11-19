<?php

use Illuminate\Support\Facades\Route;

Route::get('/jessica', function () {
    return view('index');
});

Route::get('/isan', function () {
    return view('isan');
});

