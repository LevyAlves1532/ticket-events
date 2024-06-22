<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/events', [EventController::class, 'index'])->name('events');
Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
Route::post('/events/create_action', [EventController::class, 'create_action'])->name('events.create_action');
Route::get('/events/update/{id}', [EventController::class, 'update'])->name('events.update');
Route::post('/events/update_action', [EventController::class, 'update_action'])->name('events.update_action');
Route::get('/events/delete/{id}', [EventController::class, 'delete'])->name('events.delete');
