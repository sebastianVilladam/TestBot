@extends('layouts.adminLayout')
@section('links')
<link rel="stylesheet" href="/css/question_style.css">
@stop
@section('content')
<div class="container-fluid" id="info">
    <h3>ID: {{ $data->id }}</h3>
    <h3>Nombre: {{ $data->name }}</h3>
    <h3>Tiempo de respuesta (sg): {{ $data->responce_time }}</h3>
    <h3>Fecha de apertura: {{ $data->open_date }}</h3>
    <h3>Fecha de cierre: {{ $data->close_date }}</h3>
    <h3>Id del docente: {{ $data->professor_id }}</h3>
    <hr>    
</div>

<div id="btns">
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="/asignaturas" class="btn btn-primary">Atras</a>
        <a href="" class="btn btn-warning">Modificar</a>    
    </div>
</div>
@stop