@extends('layouts.adminLayout')
@section('links')
@stop
@section('content')
<h1>REGISTRAR NUEVO ADMINISTRADOR</h1>
<hr>
<div class="container-fluid center" id="form-container">
  {!! Form::open(['route' => 'addAdmin']) !!}
    <div class="form-group">
      {!! Form::label('name', 'NOMBRE:', ['class' => 'control-label']) !!}
      {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('password', 'CONTRASEÑA:', ['class' => 'control-label']) !!}
      {!! Form::text('password', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::hidden('role_id', 3, ['class' => 'form-control']) !!}
    </div>
    <button type="submit" class="btn btn-primary" id="btn-save">Añadir</button>
    <a href="/administradores" class="btn btn-danger">Cancelar</a>
  {!! Form::close() !!}
</div>
@stop