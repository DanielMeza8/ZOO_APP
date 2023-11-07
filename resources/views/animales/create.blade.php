@extends('layouts/plantilla')

@section('titulo', 'Crear Animales-ZOO')

@section('contenido')    
<div class="container-fluid">
    {{-- <div class="row">
        <div><a href="" class="btn btn-primary mt-4">Atras</a></div>
    </div> --}}
    <div class="row">
        <div class="col-7 mt-4">
            <div class="centrado mt-4">
                <div class="card mb-4 mt-4 py-4" style="max-width: 1500px;">
                    <div>
                        <div class="card-body">
                            <h2 class="card-title"><strong>Inicio</strong><p><small class="text-muted">"Animales-ZOO"</small></p></h2>
                            <form action="{{ route('animales.store', $IDzoo->id) }}" method="post">
                                @csrf
                                @method('POST')
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="nombre" class="form-label">Nombre</label>
                                            <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombreHelp" required autocomplete="off">
                                            <div id="nombreHelp" class="form-text">Ingresa el nombre del Animal</div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Especie</label>
                                            <select class="form-select" name="especie" id="especie">
                                                @foreach ($especies as $item)
                                                    <option value="{{$item}}">{{$item}}</option>
                                                @endforeach
                                            </select>
                                            <div id="direccionHelp" class="form-text">Ingresa la especie del Animal</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="años" class="form-label">Años</label>
                                            <input type="number" class="form-control" id="años" name="años" aria-describedby="añosHelp" required autocomplete="off">
                                            <div id="añosHelp" class="form-text">Ingresa el numeros de años del Animal</div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="pais" class="form-label">Origen</label>
                                            <select class="form-select" name="origen" id="origen">
                                                @foreach ($paises as $item)
                                                    <option value="{{$item}}">{{$item}}</option>
                                                @endforeach
                                            </select>
                                            <div id="origenHelp" class="form-text">Ingresa el origen del Animal</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="">Habitad</label>
                                            <select class="form-select" name="habitad" id="habitad" aria-describedby="habitadHelp">
                                                @foreach ($habitads as $item)
                                                    <option value="{{$item}}">{{$item}}</option>
                                                @endforeach
                                            </select>
                                            <div id="habitadHelp" class="form-text">Ingresa el habitad del Animal</div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="alimentacion" class="form-label">Alimentacion</label>
                                            <select class="form-select" name="alimentacion" id="alimentacion">
                                                @foreach ($alimentacion as $item)
                                                    <option value="{{$item}}">{{$item}}</option>
                                                @endforeach
                                            </select>
                                            <div id="alimentacionHelp" class="form-text">Ingresa la alimentacion del Animal</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-outline-primary">Agregar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-5 mt-4">
            <div class="centrado mt-4">
                <div class="card mb-4 mt-4" style="background-color: transparent">
                    <div class="d-flex align-items-center">
                        <div class="card text-bg-dark" style="background-color: transparent">
                            <img src="{{ asset('img/ocelot.webp') }}" class="card-img" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection