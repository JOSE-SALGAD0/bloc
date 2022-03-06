@extends('layouts.plantilla')

@section('title', 'Inicio')

@section('content')

    <!-- Main -->
    <div id="main">
        <div class="inner">

            <h1>II. Modelo Cliente/Servidor</h1>
            <section class="tiles">

                @foreach ($ra2 as $titulo)

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
