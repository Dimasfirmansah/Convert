<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConvertController;

Route::get('/upload', function () {
    return view('upload');
});
Route::get('/', [ConvertController::class, 'index']);

Route::post('/convert', [ConvertController::class, 'convert'])->name('convert');
