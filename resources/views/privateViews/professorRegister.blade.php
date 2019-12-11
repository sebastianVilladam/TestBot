@extends('layouts.adminLayout')
@section('links')
@stop
@section('content')
<h1>REGISTRAR NUEVO DOCENTE</h1>
<hr>
<div class="container-fluid center" id="form-container">
  {!! Form::open(['route' => 'addProf']) !!}
    <div class="form-group">
      {!! Form::label('name', 'NOMBRE:', ['class' => 'control-label']) !!}
      {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>    
    <div class="form-group">
      {!! Form::label('password', 'CONTRASEÑA:', ['class' => 'control-label']) !!}
      {!! Form::text('password', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('code', 'CÓDIGO:', ['class' => 'control-label']) !!}
      {!! Form::text('code', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('email', 'CORREO:', ['class' => 'control-label']) !!}
      {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::hidden('role_id', 2, ['class' => 'form-control']) !!}
    </div>
    <button type="submit" class="btn btn-primary" id="btn-save">Añadir</button>
    <a href="/docentes" class="btn btn-danger">Cancelar</a>
  {!! Form::close() !!}
</div>
@stop