@extends('layouts.adminLayout')
@section('links')
@stop
@section('content')
<h1>DATOS DE LA PREGUNTA</h1>
<hr>
<div class="container-fluid center" id="form-container">
  {!! Form::model($data, ['method' => 'PUT','route' => ['profSettings', $data->id]]) !!}
  <div class="form-group">
    {!! Form::label('name', 'NOMBRE:', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control' , 'placeholder' => '$data->name']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('password', 'CONTRASEÑA:', ['class' => 'control-label']) !!}
    {!! Form::text('password', null, ['class' => 'form-control' , 'placeholder' => '$data->password']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('code', 'CÓDIGO:', ['class' => 'control-label']) !!}
    {!! Form::text('code', null, ['class' => 'form-control' , 'placeholder' => '$data->code']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('email', 'CORREO:', ['class' => 'control-label']) !!}
    {!! Form::text('email', null, ['class' => 'form-control' , 'placeholder' => '$data->email']) !!}
  </div>
  <div class="text-center">
    <button type="submit" class="btn btn-primary" id="btn-save">Guardar cambios</button>
    <a href="{{ route('prof', $data->id) }}" class="btn btn-danger">Cancelar</a>
  </div>
</div>
@stop