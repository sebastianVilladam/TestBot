@extends('layouts.publicLayout')
@section('links')
@stop
@section('content')
<div class="container-fluid text-center" id="title">
    <h1>Resultados</h1>
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
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        </tr>
        <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
        </tr>
    </tbody>
    </table>
</div>
@stop