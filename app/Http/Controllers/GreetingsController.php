<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingsController extends Controller
{
    public function greetings($timezone)
    {
        switch ($timezone) {
            case 'morning';
                $timegreet = '朝のあいさつ';
                $greeting = 'おはようございます';
                break;
            case 'afternoon';
                $timegreet = '昼のあいさつ';
                $greeting = 'こんにちは';
                break;
            case 'evening';
                $timegreet = '夕方のあいさつ';
                $greeting = 'こんばんは';
                break;
            case 'night';
                $timegreet = '夜のあいさつ';
                $greeting = 'おやすみ';
                break;
        }
        return view('greetings', ['timegreet' => $timegreet, 'greeting' => $greeting]);
    }
}
