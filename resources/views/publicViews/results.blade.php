@extends('layouts.publicLayout')
@section('links')
<link rel="stylesheet" href="css/results_style.css">
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
        <td><a href="#" class="btn btn-primary btn1">Ver</a></td>
        </tr>
        <tr>
        <th scope="row">2</th>
        <td>Matemáticas discretas 2019-03</td>
        <td>Ingeniería de sistemas</td>
        <td>23/11/2019</td>
        <td><a href="#" class="btn btn-primary btn1">Ver</a></td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td>Dia grastronómico UAM 2019</td>
        <td>Artes culinarias y gastronomía</td>
        <td>15/10/2019</td>
        <td><a href="#" class="btn btn-primary btn1">Ver</a></td>
        </tr>
    </tbody>
    </table>
</div>
@stop