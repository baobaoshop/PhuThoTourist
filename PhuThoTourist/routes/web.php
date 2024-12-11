<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CandidateController;
use App\Models\Articles;

// routes/web.php

Route::get('/', function () {
    return view('/home');
});

Route::get('/detailblog', function () {
    return view('/detailblog');
});

Route::get('/recruitment', function () {
    return view('/recruitment');
});

Route::get('/blog', [ArticleController::class, 'index'])->name('articles.index');

Route::get('/documents', [DocumentController::class, 'getAllDocument'])->name('document.index');

Route::get('/recruitment', [JobController::class, 'index'])->name('recruitment.index');

Route::get('/job/{id}', [JobController::class, 'show'])->name('job.show');

Route::post('/candidate/store', [CandidateController::class, 'store'])->name('candidate.store');
