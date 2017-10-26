<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TinySearchController extends Controller
{
    public function index()
    {
        return view('tiny-search.index');
    }
}
