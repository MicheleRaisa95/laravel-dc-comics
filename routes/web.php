<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('comics.index');
});

Route::resource('comics', ComicController::class);
