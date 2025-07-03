<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
     public function news()
    {
        $title = 'News';

        return view('news', compact('title'));
    }
}
