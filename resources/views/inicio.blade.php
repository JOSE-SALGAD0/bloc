@extends('layouts.plantilla')

@section('title', 'Inicio')

@section('content')

    <!-- Main -->
    <div id="main">
        <div class="inner">

            <header>
                <h1>Examen Unidad 2</h1>
                <h2>Integrantes del equipo:</h2>
                <h3>Jose Salgado</h3>
                <h3>Diego Hernandez</h3>
                <h3>Jorge Antonio</h3>
                <p>En este blog incluye los resultados de aprendizaje de las unidades (1 & 2) de la asignatura Programacion
                    Cliente-Servidor</p>
            </header>

            <section class="tiles">
                @foreach ($ra as $titulo)
                    <article class="style1">
                        <span class="image">
                            <img src="images/pic01.jpg" alt="" />
                        </span>
                        <a href="{{route('ver.publicacion', $titulo->resultado_de_aprendizaje)}}">
                            <h3> {{ $titulo->resultado_de_aprendizaje }} </h3>
                        </a>
                    </article>
            @endforeach
        </section>

        </div>
    </div>

@endsection
