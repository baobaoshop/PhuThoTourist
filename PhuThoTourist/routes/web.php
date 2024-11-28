<?php

use Illuminate\Support\Facades\Route;

// routes/web.php
require __DIR__.'/auth.php';
require __DIR__.'/admin.php';

Route::get('/', function () {
    return view('/home');
});

Route::get('/blog', function () {
    return view('/blog');
});