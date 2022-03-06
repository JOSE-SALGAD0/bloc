@extends('layouts.plantilla')

@section('title', 'Publicacion')

@section('content')


    <center>
        <form action="" method="POST">
            @csrf
            <label for="">Unidad de Aprendizaje</label>
            <input type="text" name="unidad_de_aprendizaje" value="{{ $post->unidad_de_aprendizaje }}">
            <br>
            <label for="">Contenido</label>
            <input type="text" name="contenido" value="{{ $post->contenido }}">
            <br>
            <label for="">Resultado de Aprendizaje</label>
            <input type="text" name="resultado_de_aprendizaje" value="{{ $post->resultado_de_aprendizaje }}">
            <br>
            <label for="">Informacion</label>
            <input type="text" name="informacion" value="{{ $post->informacion }}">
            <br>
            <label for="">Imagen</label>
            <input type="text" name="imagen" value="{{ $post->imagen }}">
            <br>
            <input type="submit" value="Guardar">
        </form>
    </center>

@endsection