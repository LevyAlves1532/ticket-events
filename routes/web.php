<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BuyerController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('events')->group(function() {
    Route::get('/', [EventController::class, 'index'])->name('events');
    Route::get('/create', [EventController::class, 'create'])->name('events.create');
    Route::post('/create_action', [EventController::class, 'create_action'])->name('events.create_action');
    Route::get('/update/{id}', [EventController::class, 'update'])->name('events.update');
    Route::post('/update_action', [EventController::class, 'update_action'])->name('events.update_action');
    Route::get('/delete/{id}', [EventController::class, 'delete'])->name('events.delete');
});

Route::prefix('buyers')->group(function() {
    Route::get('/', [BuyerController::class, 'index'])->name('buyers');
    Route::get('/create', [BuyerController::class, 'create'])->name('buyers.create');
    Route::post('/create_action', [BuyerController::class, 'create_action'])->name('buyers.create_action');
    Route::get('/update/{id}', [BuyerController::class, 'update'])->name('buyers.update');
    Route::post('/update_action', [BuyerController::class, 'update_action'])->name('buyers.update_action');
    Route::get('/delete/{id}', [BuyerController::class, 'delete'])->name('buyers.delete');
});
