@extends('layouts.adminLayout')
@section('links')
@stop
@section('content')
<h1>Preguntas registradas</h1>

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
                    <td><a href="#" class="btn btn-primary btn1">Ver</a></td>
                    <td><a href="#" class="btn btn-danger">Eliminar</a></td>
                </tr>
            @empty
                <h3>No se encuentran preguntas registradas en el sistema</h3>
            @endforelse
        </tbody>
    </table>
</div>
@stop