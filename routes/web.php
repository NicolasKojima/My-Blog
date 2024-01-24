<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogpostController;



Route::get('/', function () {
    return view('bloghome');
});

Route::get('/bookblog', function () {
    return view('bookblog');
});

Route::get('/projectsblog', function () {
    return view('projectsblog');
});

Route::get('/studiesblog', function () {
    return view('studiesblog');
});

Route::get('/bloghome', function () {
    return view('bloghome');
});

// Creating new post controller
Route::get('/blogposts/create', [BlogpostController::class, 'create']);
Route::post('/blogposts', [BlogpostController::class, 'store']);

// Displaying Post Contents
Route::get('/bookblog', [BlogpostController::class, 'index'])->name('bookblog');
