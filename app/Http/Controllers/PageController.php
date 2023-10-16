<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $title = 'homepage';
        return view('home', compact('title'));

    }
}
