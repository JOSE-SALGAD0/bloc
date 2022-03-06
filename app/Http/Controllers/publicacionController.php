<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class publicacionController extends Controller
{
    public function __invoke()
    {
        $posts = Post::all();
        return view('publicaciones', ['posts' => $posts]);
    }

    public function mostrarPublicacion($resultado_de_aprendizaje){
        $post = Post::where('resultado_de_aprendizaje', $resultado_de_aprendizaje)->first();
        return view('publicacion', ['post' => $post]);
    }
}
    
