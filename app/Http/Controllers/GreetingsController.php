<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingsController extends Controller
{
    public function greetings($word)
    {
        switch ($word) {
            case 'morning';
                $heading = '朝のあいさつ';
                $greeting = 'おはようございます';
                break;
            case 'afternoon';
                $heading = '昼のあいさつ';
                $greeting = 'こんにちは';
                break;
            case 'evening';
                $heading = '夕方のあいさつ';
                $greeting = 'こんばんは';
                break;
            case 'night';
                $heading = '夜のあいさつ';
                $greeting = 'おやすみ';
                break;
            case 'random';
                $heading = 'ランダムなあいさつ';
                $greetings = ['おはよう', 'こんにちは', 'こんばんは', 'おやすみ'];
                $greeting = $greetings[array_rand($greetings)];
                break;
        }
        return view('greetings', ['heading' => $heading, 'greeting' => $greeting]);
    }
}
