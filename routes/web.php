<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web');
});
Route::get('/web', function () {
    return view('web');
});
