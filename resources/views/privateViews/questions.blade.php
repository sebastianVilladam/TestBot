@extends('layouts.adminLayout')
@section('links')
@stop
@section('content')
<h1>Preguntas en base de datos</h1>

<!--Table section-->
<div class="container-fluid" id="table-section">
    <table class="table table-borderless">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre de la prueba</th>
        <th scope="col">Categoría</th>
        <th scope="col">Fecha de ejecución</th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Prueba de Ing Mecanica</td>
        <td>Ingeniería mecanica</td>
        <td>17/09/2019</td>
        <td><a href="/test" class="btn btn-primary btn1">Ver</a></td>
        </tr>
        <tr>
        <th scope="row">2</th>
        <td>Matemáticas discretas 2019-03</td>
        <td>Ingeniería de sistemas</td>
        <td>23/11/2019</td>
        <td><a href="/test" class="btn btn-primary btn1">Ver</a></td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td>Dia grastronómico UAM 2019</td>
        <td>Artes culinarias y gastronomía</td>
        <td>15/10/2019</td>
        <td><a href="/test" class="btn btn-primary btn1">Ver</a></td>
        </tr>
    </tbody>
    </table>
</div>
@stop