@extends('layouts.adminLayout')
@section('links')
@stop
@section('content')
<h1>Preguntas registradas</h1>

<!--Filter section-->
<div id="filter-section">
    <div class="row" id="filter-content">
        <div class="col-md-4"><a href="/registrar pregunta" class="btn btn-primary">Regsitrar administrador</a></div>
        <div class="col-md-4">
            <form class="form form-inline">             
                <div class="form-group mx-sm-3 mb-2">
                    <label for="Username" class="sr-only">Nombre de usuario</label>
                    <input type="text" class="form-control" id="inputPassword2" placeholder="Usuario">
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
        <th scope="col">Identificación</th>
        <th scope="col">Nombre</th>
        <th scope="col">Rol</th>
        <th scope="col"></th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>123456789</td>
            <td>Otto</td>
            <td>Docente</td>
            <td><button class="btn btn-primary">ver</button></td>
            <td><button class="btn btn-danger">Eliminar</button></td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>4567897977</td>
            <td>Thornton</td>
            <td>Docente</td>
            <td><button class="btn btn-primary">ver</button></td>
            <td><button class="btn btn-danger">Eliminar</button></td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>147258369</td>
            <td>Alex</td>
            <td>Administrador</td>
            <td><button class="btn btn-primary">ver</button></td>
            <td><button class="btn btn-danger">Eliminar</button></td>
        </tr>
    </tbody>
    </table>
</div>
@stop