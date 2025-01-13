<?php

use App\Http\Controllers\GreetingsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/comments/{timezone}', [GreetingsController::class, 'greetings']);
