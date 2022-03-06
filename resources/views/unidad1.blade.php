@extends('layouts.plantilla')

@section('title', 'Inicio')

@section('content')

    <!-- Main -->
    <div id="main">
        <div class="inner">

            {{-- <h1>{{$unidad1->unidad_de_aprendizaje}}</h1> --}}

            <h1>I. Fundamentos de la arquitectura Cliente/Servidor</h1>

            <section class="tiles">

                @foreach ($ra1 as $titulo)

                        <article class="style1">
                            <span class="image">
                                <img src="images/pic01.jpg" alt="" />
                            </span>
                            <a href="generic">
                                <h3> {{$titulo->resultado_de_aprendizaje}} </h3>
                            </a>
                        </article>

                @endforeach

            </section>

        </div>
    </div>

@endsection
