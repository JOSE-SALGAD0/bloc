<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class inicioController extends Controller
{
    public function __invoke()
    {

        $ra = Post::all();
        return view('inicio', ['ra' => $ra]);

    } 
}
