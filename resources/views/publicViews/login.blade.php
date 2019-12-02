@extends('layouts.publicLayout')
<link rel="stylesheet" href="css/login_style.css">
@section('links')
@stop
@section('content')
<!--login form section-->
<div id="form-container">
    <div class="modal-dialog text-center">
        <div class="col-sm-8" id="login-form">            
            <div class="modal-content">
                <form action="" class="col-12">
                    <h1>Login</h1>
                    <div class="form-group">
                        <input type="text" class="form-control" name="" id="" placeholder="Nombre de usuario">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="" id="" placeholder="Contraseña">
                    </div>
                    <a href="private/adminHome.html" class="btn btn-primary">Entrar</a>
                    <br>
                    <a href="">Olvidó su usuario/contraseña?</a>
                </form>
            </div>
        </div>
    </div>
</div>
@stop