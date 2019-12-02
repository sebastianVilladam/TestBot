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
                        <option>Artes culinarios y gastronomía</option>
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