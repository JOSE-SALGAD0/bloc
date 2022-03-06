<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class unidad1Controller extends Controller
{
    public function __invoke()
    {

        $ra1 = Post::all()->where('unidad_de_aprendizaje', 'I. Fundamentos de la arquitectura Cliente/Servidor');
        return view('unidad1', ['ra1' => $ra1]);

    }
}
