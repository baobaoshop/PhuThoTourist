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

Route::get('/detailblog', function () {
    return view('/detailblog');
});

Route::get('/recruitment', function () {
    return view('/recruitment');
});

Route::get('/document', function () {
    return view('/document');
});

Route::get('/recruitment', function () {
    return view('/recruitment');
});

Route::get('/detailrecruitment', function () {
    return view('/detailrecruitment');
});
