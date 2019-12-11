@extends('layouts.adminLayout')
@section('links')
@stop
@section('content')
<h1>Asignaturas registradas</h1>

<!--Filter section-->
<div id="filter-section">
    <div class="row" id="filter-content">
        <div class="col-md-4"><a href="/registrar asignatura" class="btn btn-primary">Regsitrar asignatura</a></div>
        <div class="col-md-4">
            <form class="form form-inline">             
                <div class="form-group mx-sm-3 mb-2">
                    <label for="Username" class="sr-only">Nombre de asignatura</label>
                    <input type="text" class="form-control" id="inputPassword2" placeholder="Asignatura">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Filtrar</button>
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
        <th scope="col">Nombre</th>        
        <th scope="col"></th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @forelse($list as $subject)
            <tr>
                <th scope="row">{{$subject->id}}</th>
                <td>{{$subject->name}}</td>                
                <td><a class="btn btn-primary btn1" href="{{ route('subject', $subject->id) }}">Ver</a></td>
                <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Eliminar</button></td>
            </tr>
        @empty
            <h3>No se encuentran asignaturas registradas en el sistema</h3>
        @endforelse
    </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar administrador del sistema</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>¿Está seguro de quere elminar éste administrador?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        {!! Form::open(['method' => 'DELETE','route' => ['adminDelete', $subject->id]]) !!}
        {!! Form::submit('Eliminar', ['class' => 'btn btn-danger mb-2', 'id' => 'btn-delete']) !!}
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
@stop