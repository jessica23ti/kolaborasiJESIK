<?php

use Illuminate\Support\Facades\Route;



Route::get('/View', function () {
    return view('index');
});

Route::get('/ikhsan', function () {
    return view('ikhsan');
});

