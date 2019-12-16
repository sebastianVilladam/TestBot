@extends('layouts.adminLayout')
@section('links')
@stop
@section('content')
<h1>SELECCION DE PREGUNTAS PARA EL EVENTO</h1>
<hr>
<button class="btn btn-primary">Usar todas las preguntas en el banco</button>
<br>

<div class="container-fluid center" id="form-container">
    {!! Form::open(['route' => 'addSubject']) !!}
        @forelse($list as $question)
            {!! Form::label('$question->id', $question->body, ['class' => 'control-label']) !!}
            {!! Form::checkbox('selected[]', '$question->id') !!}
            <br>
        @empty
            <h3>No hay preguntas registradas en el banco</h3>
        @endforelse
        <button type="submit" class="btn btn-primary" id="btn-save">usar preguntas seleccionadas</button>
    {!! Form::close() !!}
</div>
@stop