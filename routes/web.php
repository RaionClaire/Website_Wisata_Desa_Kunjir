<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});
Route::view('/artikel', 'pages.articles');
Route::view('/artikel/detail', 'pages.article-detail');
