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
                        <option>Ciencia politica, gobierno y relaciones internacionales</option>
                        <option>Administración de empresas</option>
                        <option>Ingeniería industrial</option>
                        <option>Ingeniería electrónica</option>
                        <option>Ingeniería de sistemas</option>
                        <option>Artes culinarias y gastronomía</option>
                        <option>Ingeniería biomédica</option>
                        <option>Atención pre hospitalaria</option>
                        <option>Análisis y programación de sistemas de información</option>
                        <option>Automatización industrial</option>
                        <option>Mecánica industrial</option>
                        <option>Diseño de modas</option>
                        <option>Gestion de negocios</option>
                        <option>Diseño industrial</option>
                        <option>Ingeniería mecánica</option>
                        <option>Negocios internacionales</option>
                        <option>Economía</option>
                        <option>Fisioterapia</option>
                        <option>Odontología</option>                        
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
                    <td>
                        {!! Form::open(['method' => 'DELETE','route' => ['veDelete', $vehicle->id]]) !!}
                        {!! Form::submit('Eliminar', ['class' => 'btn btn-primary mb-2', 'id' => 'btn-delete']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @empty
                <h3>No se encuentran preguntas registradas en el sistema</h3>
            @endforelse
        </tbody>
    </table>
</div>
@stop