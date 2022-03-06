<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class genericController extends Controller
{
    public function __invoke()
    {
        return view('generic');
    }
}