@extends('layouts.adminLayout')
@section('links')
@stop
@section('content')
<h1>DATOS DE LA PREGUNTA</h1>
<hr>
<div class="container-fluid center" id="form-container">
  {!! Form::model($data, ['method' => 'PUT','route' => ['qSettings', $data->id]]) !!}
  <div class="form-group">
    {!! Form::label('body', 'CUERPO:', ['class' => 'control-label']) !!}
    {!! Form::text('body', null, ['class' => 'form-control' , 'placeholder' => '$data->body']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('option_a', 'A:', ['class' => 'control-label']) !!}
    {!! Form::text('option_a', null, ['class' => 'form-control' , 'placeholder' => '$data->option_a']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('option_b', 'B:', ['class' => 'control-label']) !!}
    {!! Form::text('option_b', null, ['class' => 'form-control' , 'placeholder' => '$data->option_b']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('option_c', 'C:', ['class' => 'control-label']) !!}
    {!! Form::text('option_c', null, ['class' => 'form-control' , 'placeholder' => '$data->option_c']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('correct', 'CORRECTA:', ['class' => 'control-label']) !!}
    {!! Form::text('correct', null, ['class' => 'form-control' , 'placeholder' => '$data->correct']) !!}
  </div>
  <div class="text-center">
    <button type="submit" class="btn btn-primary" id="btn-save">Guardar cambios</button>
    <a href="{{ route('question', $data->id) }}" class="btn btn-danger">Cancelar</a>
  </div>
</div>
@stop