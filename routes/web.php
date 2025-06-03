<?php

use App\Http\Controllers\PMController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('pokedex')->group(function () {
    Route::get('/create-poke-character', [PMController::class, 'create'])->name('create');
    Route::get('/edit-poke-character', [PMController::class, 'update'])->name('edit');
});

require __DIR__.'/auth.php';
