@extends('layouts/plantilla')

@section('titulo', 'Login ZOO')

@section('contenido')    
<div class="container-fluid">
    <div class="row align-items-center">
        <div class="col mt-4">
            <div class="centrado mt-4">
                <div class="card mb-4 mt-4 pr-4 " style="max-width: 480px;">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-2">
                            <img src="{{ asset('img/login2.webp') }}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <div class="card-body">
                                <h2 class="card-title text-center"><strong>Registro</strong></h2>
                                <p class="card-text text-center">"ZOO"</p>
                                <p class="card-text"><small class="text-muted">Bienvenido</small></p>
                                <form method="POST" action="{{route('validar_registro')}}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nombre de usuario</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp" required autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" required autocomplete="off">
                                    </div>
                                     autocomplete="false"<div>
                                        <p>¿Tienes una cuenta? <a href="{{url('/')}}">Login</a></p>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Registrarse</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection