<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FreewordController extends Controller
{
    public function freeword($comment)
    {
        return view('free_message', ['comment' => $comment]);
    }
}
