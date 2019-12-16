@extends('layouts.adminLayout')
@section('links')
@stop
@section('content')
<h1>DATOS DEL EVENTO</h1>
<hr>
<div class="container-fluid center" id="form-container">
  {!! Form::model($data, ['method' => 'PUT','route' => ['subjectSettings', $data->id]]) !!}
  <div class="form-group">
    {!! Form::label('name', 'NOMBRE:', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control' , 'placeholder' => '$data->name']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('responce_time', 'TIEMPO DE RESPUESTA:', ['class' => 'control-label']) !!}
    {!! Form::text('responce_time', null, ['class' => 'form-control' , 'placeholder' => '$data->responce_time']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('open_date', 'FECHA DE APERTURA:', ['class' => 'control-label']) !!}
    {!! Form::text('open_date', null, ['class' => 'form-control' , 'placeholder' => '$data->open_date']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('close_date', 'FECHA DE CIERRE:', ['class' => 'control-label']) !!}
    {!! Form::text('close_date', null, ['class' => 'form-control' , 'placeholder' => '$data->close_date']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('admin_id', 'ID DEL ADMINISTRADOR:', ['class' => 'control-label']) !!}
    {!! Form::text('admin_id', null, ['class' => 'form-control' , 'placeholder' => '$data->admin_id']) !!}
  </div>
  <div class="text-center">
    <button type="submit" class="btn btn-primary" id="btn-save">Guardar cambios</button>
    <a href="{{ route('subject', $data->id) }}" class="btn btn-danger">Cancelar</a>
  </div>
</div>
@stop