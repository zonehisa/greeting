<?php

use App\Http\Controllers\GreetingsController;
use App\Http\Controllers\FreewordController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/comments/freeword/{comment}', [FreewordController::class, 'freeword']);

Route::get('/comments/{word}', [GreetingsController::class, 'greetings']);
