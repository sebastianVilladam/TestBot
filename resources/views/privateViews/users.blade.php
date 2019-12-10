@extends('layouts.adminLayout')
@section('links')
@stop
@section('content')
<h1>Usuarios registradas</h1>

<!--Filter section-->
<div id="filter-section">
    <div class="row" id="filter-content">
        <div class="col-md-4"><a href="/registrar pregunta" class="btn btn-primary">Regsitrar usuario</a></div>
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
        <th scope="col"></th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>123456789</td>
            <td>Estudiante 1</td>    
            <td><button class="btn btn-primary">ver</button></td>
            <td><button class="btn btn-danger">Eliminar</button></td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>4567897977</td>
            <td>Estudiante 2</td>            
            <td><button class="btn btn-primary">ver</button></td>
            <td><button class="btn btn-danger">Eliminar</button></td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>147258369</td>
            <td>Estudiante 3</td>            
            <td><button class="btn btn-primary">ver</button></td>
            <td><button class="btn btn-danger">Eliminar</button></td>
        </tr>
        <tr>
            <th scope="row">4</th>
            <td>147258369</td>
            <td>Estudiante 4</td>            
            <td><button class="btn btn-primary">ver</button></td>
            <td><button class="btn btn-danger">Eliminar</button></td>
        </tr>
        <tr>
            <th scope="row">5</th>
            <td>147258369</td>
            <td>Estudiante 5</td>            
            <td><button class="btn btn-primary">ver</button></td>
            <td><button class="btn btn-danger">Eliminar</button></td>
        </tr>
        <tr>
            <th scope="row">6</th>
            <td>147258369</td>
            <td>Estudiante 6</td>            
            <td><button class="btn btn-primary">ver</button></td>
            <td><button class="btn btn-danger">Eliminar</button></td>
        </tr>
        <tr>
            <th scope="row">7</th>
            <td>147258369</td>
            <td>Estudiante 7</td>            
            <td><button class="btn btn-primary">ver</button></td>
            <td><button class="btn btn-danger">Eliminar</button></td>
        </tr>
    </tbody>
    </table>
</div>
@stop