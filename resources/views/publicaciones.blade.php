@extends('layouts.plantilla')

@section('title', 'Publicaciones')

@section('content')

@foreach ($posts as $publicacion)

<center>
<h1> {{$publicacion->unidad_de_aprendizaje}} </h1>
<h2> {{$publicacion->contenido}} </h2>
<h3> {{$publicacion->resultado_de_aprendizaje}} </h3>
</center>
<p> {{$publicacion->informacion}} </p>
<p> {{$publicacion->imagen}} </p>

@endforeach

@endsection