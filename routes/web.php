<?php

use App\Http\Controllers\GreetingsController;
use App\Http\Controllers\FreewordController;
use App\Http\Controllers\RandomController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/comments/freeword/{comment}', [FreewordController::class, 'freeword']);

Route::get('/comments/random', [RandomController::class, 'random']);

Route::get('/comments/{timezone}', [GreetingsController::class, 'greetings']);
