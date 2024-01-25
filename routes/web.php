<?php

use App\Http\Controllers\BlogcontentController;
use Illuminate\Support\Facades\Route;

Route::get('/bookblog', function () {
    $blogcontents = \App\Models\Blogcontent::all();
    return view('bookblog', compact('blogcontents'));
});

Route::get('/projectsblog', function () {
    $blogcontents = \App\Models\Blogcontent::all();
    return view('projectsblog', compact('blogcontents'));
});

Route::get('/studiesblog', function () {
    $blogcontents = \App\Models\Blogcontent::all();
    return view('studiesblog', compact('blogcontents'));
});

Route::get('/bloghome', function () {
    $blogcontents = \App\Models\Blogcontent::all();
    return view('bloghome', compact('blogcontents'));
});

Route::get('/blogcontents/create', [BlogcontentController::class, 'create']);
Route::post('/blogcontents', [BlogcontentController::class, 'store'])->name('blogcontents.store');
Route::get('/blogcontents', [BlogcontentController::class, 'index']);
