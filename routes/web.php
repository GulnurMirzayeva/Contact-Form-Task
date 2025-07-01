<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', [ContactController::class, 'index'])
    ->name('contact.index');

Route::post('/', [ContactController::class, 'store'])
    ->name('contact.store')
    ->middleware('throttle:10,1');
