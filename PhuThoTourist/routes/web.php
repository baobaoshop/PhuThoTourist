<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\HomeController;
use App\Models\Articles;

// routes/web.php



Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/blog', [ArticleController::class, 'index'])->name('articles.index');

Route::get('/blog/{id}', [ArticleController::class, 'show'])->name('blog.detail');

Route::get('/documents', [DocumentController::class, 'getAllDocument'])->name('document.index');

Route::get('/recruitment', [JobController::class, 'index'])->name('recruitment.index');

Route::get('/job/{id}', [JobController::class, 'show'])->name('job.show');

Route::post('/candidate/store', [CandidateController::class, 'store'])->name('candidate.store');
