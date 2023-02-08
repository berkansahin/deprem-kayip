<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/kayip-kaydet', [HomeController::class, 'save'])->name('save');
Route::post('/kayip-kaydet', [HomeController::class, 'saveForm'])->name('save.post');
Route::get('/kayip-ara', [HomeController::class, 'search'])->name('search');
