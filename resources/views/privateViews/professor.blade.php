@extends('layouts.adminLayout')
@section('links')
<link rel="stylesheet" href="/css/question_style.css">
@stop
@section('content')
<div class="container-fluid" id="info">
    <h3>ID: {{ $data->id }}</h3>
    <h3>Nombre: {{ $data->name }}</h3>
    <h3>Código: {{ $data->code }}</h3>
    <hr>    
</div>

<div id="btns">
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="/administradores" class="btn btn-primary">Atras</a>
        <a href="{{ route('adminSettings', $data->id) }}" class="btn btn-warning">Modificar</a>    
    </div>
</div>
@stop