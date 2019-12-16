@extends('layouts.adminLayout')
@section('links')
@stop
@section('content')
<h1>CREAR NUEVO EVENTO</h1>
<hr>
<div class="container-fluid center" id="form-container">
  {!! Form::open(['route' => 'addSubject']) !!}
    <div class="form-group">
      {!! Form::label('name', 'NOMBRE:', ['class' => 'control-label']) !!}
      {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('responce_time', 'TIEMPO DE RESPUESTA:', ['class' => 'control-label']) !!}
      {!! Form::text('responce_time', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('open_date', 'FECHA DE APERTURA:', ['class' => 'control-label']) !!}
      {!! Form::text('open_date', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('close_date', 'FECHA DE CIERRE:', ['class' => 'control-label']) !!}
      {!! Form::text('close_date', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('admin_id', 'ID DEL ADMINISTRADOR:', ['class' => 'control-label']) !!}
      {!! Form::text('admin_id', null, ['class' => 'form-control']) !!}
    </div>    
    <button type="submit" class="btn btn-primary" id="btn-save">Añadir</button>
    <a href="/asignaturas" class="btn btn-danger">Cancelar</a>
  {!! Form::close() !!}
</div>
@stop