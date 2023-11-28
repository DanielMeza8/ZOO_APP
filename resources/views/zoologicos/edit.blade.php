@extends('layouts/plantilla')

@section('titulo', 'Editar ZOO')

@section('contenido')    
<div class="container-fluid">
    <div class="row">
        <div class="col-7 mt-4">
            <div class="centrado mt-4">
                <div class="card mb-4 mt-4 py-4 text-white" style="max-width: 1500px; background-color: transparent;">
                    <div>
                        <div class="card-body"  style="background-color: rgba(217, 217, 224, 0.349);)">
                            <div class="d-flex justify-content-end"><a href="{{route('zoologicos.index')}}" class="btn btn-primary mt-4">Atras</a></div>
                            <h2 class="card-title"><strong>Actualizar</strong><p><small class="text-muted">"ZOO"</small></p></h2>
                            <form action="{{ route('zoologicos.update', $zoo->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="nombre" class="form-label">Nombre</label>
                                            <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombreHelp" required value="{{$zoo->nombre}}" autocomplete="off">
                                            <div id="nombreHelp" class="form-text">Ingresa el nombre del Zoologico</div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="direccion" class="form-label">Direccion</label>
                                            <input type="text" class="form-control" id="direccion" name="direccion" aria-describedby="direccionHelp" required value="{{$zoo->direccion}}" autocomplete="off">
                                            <div id="direccionHelp" class="form-text">Ingresa la ubicacion Zoologico</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="telefono" class="form-label">Telefono</label>
                                            <input type="text" class="form-control" id="telefono" name="telefono" aria-describedby="telefonoHelp" required value="{{$zoo->telefono}}" autocomplete="off">
                                            <div id="telefonoHelp" class="form-text">Ingresa el telefono de comtacto del Zoologico</div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="pais" class="form-label">Estado</label>
                                            <select class="form-select" name="pais" id="pais">
                                                @foreach ($estados as $item)
                                                    <option value="{{$item}}">{{$item}}</option>
                                                @endforeach
                                            </select>
                                            <div id="paisHelp" class="form-text">Ingresa el estado de la Republica Mexicana donde se encuentra el Zoologico</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-warning">Actualizar</button>
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