@extends('layouts.adminLayout')
@section('links')
@stop
@section('content')
<h1>Preguntas registradas</h1>

<!--Filter section-->
<div id="filter-section">
    <div class="row" id="filter-content">
        <div class="col-md-4">
            <a href="/registrar pregunta" class="btn btn-primary">Regsitrar pregunta</a>
        </div>
        <div class="col-md-4">
            <form class="form">             
                <div class="form-group col-md-4">
                    <label for="inputState">Filtrar lista por: </label>
                    <select id="inputState" class="form-control">
                        <option selected>General</option>                        
                        <option>Matemáticas básicas</option>
                        <option>Lógica de programación</option>
                        <option>Procesos de investigación</option>
                        <option>Cultura politica</option>                        
                        <option>Calculo diferencial</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mb-2 btn1">Filtrar</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>

<!--Table section-->
<div class="container-fluid" id="table-section">
    <table class="table table-borderless">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">pregunta</th>
            <th scope="col">Asignatura</th>
            <th scope="col"></th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @forelse($list as $question)
                <tr>
                    <th scope="row">{{$question->id}}</th>
                    <td>{{$question->body}}</td>
                    <td>{{$question->subject_id}}</td>
                    <td><a class="btn btn-primary btn1" href="{{ route('question', $question->id) }}">Ver</a></td>
                    <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Eliminar</button></td>
                </tr>
            @empty
                <h3>No se encuentran preguntas registradas en el sistema</h3>
            @endforelse
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar pregunta del sistema</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>¿Está seguro de quere elminar ésta pregunta?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        {!! Form::open(['method' => 'DELETE','route' => ['qDelete', $question->id]]) !!}
        {!! Form::submit('Eliminar', ['class' => 'btn btn-danger mb-2', 'id' => 'btn-delete']) !!}
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
@stop