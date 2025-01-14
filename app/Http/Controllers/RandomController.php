<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RandomController extends Controller
{
    public function random()
    {
        $greetings = ['おはよう', 'こんにちは', 'こんばんは', 'おやすみ'];
        $greeting = $greetings[array_rand($greetings)];
        return view('random', ['greeting' => $greeting]);
    }
}
