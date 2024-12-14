<?php

use App\Http\Controllers\ParcController;
use App\Http\Controllers\TypeparcController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
})->name('home');

Route::get('/about', function () {
    return inertia('About');
})->name('about');


Route::get('/parcs', [ParcController::class, 'index'])
    ->name('parcs.index');

Route::get('/typeparcs', [TypeparcController::class, 'index'])
    ->name('typeparcs.index');
Route::post('/typeparcs', [TypeparcController::class, 'store'])
    ->name('typeparcs.store');