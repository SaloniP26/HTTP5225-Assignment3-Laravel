<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('quotes/show');
})->name('show');

Route::get('/quotes/create', [QuoteController::class, 'create'])
    ->name('quotes.create')
    ->middleware(['auth', 'verified']);


Route::get('/', [QuoteController::class, 'index'])->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get(
    'quotes/trash/{id}',
    [QuoteController::class, 'trash']
)->name('quotes.trash')->middleware(['auth', 'verified']);

Route::get(
    'quotes/trashed/',
    [QuoteController::class, 'trashed']
)->name('quotes.trashed')->middleware(['auth', 'verified']);

Route::get(
    'quotes/restore/{id}',
    [QuoteController::class, 'trash']
)->name('quotes.restore')->middleware(['auth', 'verified']);

Route::resource('quotes', QuoteController::class)->middleware(['auth', 'verified']);




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';