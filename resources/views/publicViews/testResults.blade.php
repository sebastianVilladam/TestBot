@extends('layouts.publicLayout')
@section('links')
<link rel="stylesheet" href="css/results_style.css">
@stop
@section('content')
<div class="container-fluid text-center" id="title">
    <h1>Exámen 3 diseño algoritmos - 2019/03</h1>
    <p>Fecha: 18/10/2019</p>
    <p>Preguntas: 15</p>
    <p>Promedio de notas: 4.0</p>
</div>

<!--Filter section-->
<div id="filter-section">
    <div class="row" id="filter-content">
        <div class="col-md-4"></div>
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
        <th scope="col">Tiempo de ejecución</th>
        <th scope="col">Nota</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>123456789</td>
            <td>Otto</td>
            <td>00:45:12</td>
            <td>3.9</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>4567897977</td>
            <td>Thornton</td>
            <td>00:36:58</td>
            <td>4.2</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>147258369</td>
            <td>Alex</td>
            <td>01:15:01</td>
            <td>4.0</td>
        </tr>
    </tbody>
    </table>
</div>
@stop