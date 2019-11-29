@extends('layouts.publicLayout')
@section('links')
<link rel="stylesheet" href="css/index_style.css">
@stop
@section('content')
<!--Page header-->
<div id="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <h1>El mejor sistema de cuartionarios automáticos</h1>
                <p>
                    Simple de usar, con resultados inmediatos y lo mejor, puedes hacer tus exámenes,
                    cuestionarios, encuestas y pruebas en tiempo realpat
                </p> 
            </div>
            <div class="col-md-4">
                <img src="img/index_img3.png" alt="" sizes="" srcset="">
            </div>
        </div>
    </div>
</div>

<!--redirect section-->
<div>
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-md-6">
                <h3>Conose los resultados de los últimos eventos</h3>
            </div>
            <div class="col-md-6">
                <button class="btn btn-primary">Ver resultados</button>
            </div>
        </div>
    </div>
</div>

<!--Extra info section-->
<div>
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-md-4">
                <h1>Resultados</h1>
                <p>Podras ver los resultados de todos los cuestionarios en los que hayas participado</p>
            </div>
            <div class="col-md-4">
                <h1>Simple</h1>
                <p>Interfaz cómoda para todos, fácil de comprender y de usar</p>
            </div>
            <div class="col-md-4">
                <h1>Multiplataforma</h1>
                <p>Descarga la aplicación en tus dispositivos Android e IOs</p>
            </div>
        </div>
    </div>
</div>
@stop