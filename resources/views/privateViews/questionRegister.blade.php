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
      {!! Form::label('correct', 'CORRECTA:', ['class' => 'control-label']) !!}
      {!! Form::select('correct',['a' => 'Opcion a','b'=>'Opcion b','c'=>'Opcion c','d'=>'Opcion d'], null, ['class'=>'form-control','placeholder'=>'Respuesta correcta']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('professor_id', 'DOCENTE:', ['class' => 'control-label']) !!}
      {!! Form::text('professor_id', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('category_id', 'CATEGORIA:', ['class' => 'control-label']) !!}
      {!! Form::select('category_id',['1' => 'Ingenieria de Sistemas','2'=>'Odontologia','3'=>'Culinaria','4'=>'Ingenieria Biomedica'], null, ['class'=>'form-control','placeholder'=>'Categoria']) !!}
    </div>
    <button type="submit" class="btn btn-primary" id="btn-save">Añadir</button>
    <a href="/preguntas" class="btn btn-danger">Cancelar</a>
  {!! Form::close() !!}
</div>
@stop