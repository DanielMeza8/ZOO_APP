@extends('layouts/plantilla')

@section('titulo', 'Eliminar Animal-ZOO')

@section('contenido')    
<div class="container-fluid">
    {{-- <div class="row">
        <div><a href="" class="btn btn-primary mt-4">Atras</a></div>
    </div> --}}
    <div class="row">
        <div class="col-7 mt-4">
            <div class="centrado mt-4">
                <div class="card mb-4 mt-4 py-4 text-white" style="background-color: transparent">
                    <div class="card-header" style="background-color: rgba(217, 217, 224, 0.349);)">
                        <div class="d-flex">
                            <div class="p-2 w-100"><strong>Eliminar Animal</strong></div>
                        </div>
                    </div>
                    <div>
                        <div class="card-body" style="background-color: rgba(217, 217, 224, 0.349);)">
                            <br>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="alert alert-danger">
                                        ¿Seguro de eliminar el Registro del animal?
                                        <p>Una vez eliminado no podr&aacute; ser recuperado</p>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr class="">
                                                        <th scope="col">Nombre</th>
                                                        <th scope="col">Especie</th>
                                                        <th scope="col">Años</th>
                                                        <th scope="col">Origen</th>
                                                        <th scope="col">Habitad</th>
                                                        <th scope="col">Alimentacion</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>{{ $animal->nombre }}</td>
                                                        <td>{{ $animal->especie }}</td>
                                                        <td>{{ $animal->años }}</td>
                                                        <td>{{ $animal->origen }}</td>
                                                        <td>{{ $animal->habitad }}</td>
                                                        <td>{{ $animal->alimentacion }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <form action="{{ route('animales.destroy', $animal->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="text" id="idZoo" name="idZoo" value="{{$animal->zoologico_id}}" hidden>
                                                
                                                <div class="d-grid gap">
                                                    <button class="btn btn-danger">Eliminar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
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