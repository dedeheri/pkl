<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;



Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/news/{slug}', [FrontendController::class, 'newsdetails']);
Route::get('/news', [FrontendController::class, 'news']);
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');;
Route::get('/contact', [FrontendController::class, 'contact']);
