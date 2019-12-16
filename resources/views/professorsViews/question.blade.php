@extends('layouts.professorsLayout')
@section('links')
<link rel="stylesheet" href="/css/question_style.css">
@stop
@section('content')
<div class="container-fluid" id="info">
    <h3>ID: {{ $data->id }}</h3>
    <h3>Categoría: {{ $data->category_id }}</h3>
    <h3>Docente: {{ $data->professor_id }}</h3>
    <hr>
    <h2>Información principal de la pregunta:</h2>
    <p id="body">{{ $data->body }}</p>
    <p id="option">A: {{ $data->option_a }}</p>
    <p id="option">B: {{ $data->option_b }}</p>
    <p id="option">C: {{ $data->option_c }}</p>
    <p id="option">D: {{ $data->option_d }}</p>
    <p id="correct">Respuesta correcta: {{ $data->correct }}</p>
</div>

<div id="btns">
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="/preguntas docente" class="btn btn-primary">Atras</a>
        <a href="{{ route('PqSettings', $data->id) }}" class="btn btn-warning">Modificar</a>    
    </div>
</div>
@stop