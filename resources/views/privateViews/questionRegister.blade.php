@extends('layouts.adminLayout')
@section('links')
@stop
@section('content')
<h1>REGISTRAR NUEVA PREGUNTA</h1>
<hr>
<div class="container-fluid center" id="form-container">
  {!! Form::open(['route' => 'addQ']) !!}
    <div class="form-group">
      {!! Form::label('body', 'CUERPO:', ['class' => 'control-label']) !!}
      {!! Form::text('body', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('option_a', 'OPCION A:', ['class' => 'control-label']) !!}
      {!! Form::text('option_a', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('option_b', 'OPCION B:', ['class' => 'control-label']) !!}
      {!! Form::text('option_b', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('option_c', 'OPCION C:', ['class' => 'control-label']) !!}
      {!! Form::text('option_c', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('option_d', 'OPCION D:', ['class' => 'control-label']) !!}
      {!! Form::text('option_d', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('correct', 'OPCION CORRECTA:', ['class' => 'control-label']) !!}
      {!! Form::text('correct', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('subject_id', 'ASIGNATURA:', ['class' => 'control-label']) !!}
      {!! Form::text('subject_id', null, ['class' => 'form-control']) !!}
    </div>
    <button type="submit" class="btn btn-primary" id="btn-save">Añadir</button>
    <a href="/preguntas" class="btn btn-danger">Cancelar</a>
  {!! Form::close() !!}
</div>
@stop