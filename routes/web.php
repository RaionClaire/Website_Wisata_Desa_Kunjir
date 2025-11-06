<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Models\Article;

Route::get('/', function () {
    $latestArticles = Article::where('status', 'published')
        ->orderBy('published_at', 'desc')
        ->orderBy('created_at', 'desc')
        ->take(3)
        ->get();
    
    return view('pages.home', compact('latestArticles'));
});

Route::get('/artikel', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/artikel/{slug}', [ArticleController::class, 'show'])->name('articles.show');
