<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FreewordController extends Controller
{
    public function freeword($comment)
    {
        $freemessage = '自由なメッセージ';
        return view('freemessage', ['freemessage' => $freemessage, 'comment' => $comment]);
    }
}
