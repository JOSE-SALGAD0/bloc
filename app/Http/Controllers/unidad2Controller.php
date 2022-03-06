<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class unidad2Controller extends Controller
{
    public function __invoke()
    {
        $ra2 = Post::all()->where('unidad_de_aprendizaje', 'II. Modelo Cliente/Servidor');
        return view('unidad2', ['ra2' => $ra2]);
    }
}
