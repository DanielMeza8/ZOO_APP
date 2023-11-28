@extends('layouts/plantilla')

@section('titulo', 'Login ZOO')

@section('contenido')    
<div class="container-fluid">
    <div class="row align-items-center">
        <div class="col mt-4">
            <div class="centrado mt-4">
                <div class="card mb-4 mt-4 pr-4 text-white" style="max-width: 480px; background-color: transparent;">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-2">
                            <img src="{{ asset('img/arbol.png') }}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <div class="card-body" style="background-color: rgba(217, 217, 224, 0.349);)">
                                <h2 class="card-title text-center"><strong>Login</strong></h2>
                                <p class="card-text text-center">"ZOO"</p>
                                <p class="card-text"><small class="">Bienvenido</small></p>
                                <form class="py-4" action="{{route('iniciar')}}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>
                                    <div>
                                        <p>¿No tienes una cuenta? <a href="{{url('/registro')}}"><strong>Registrate</strong></a></p>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Entrar</button>
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