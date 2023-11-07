@extends('layouts/plantilla')

@section('titulo', 'Eliminar ZOO')

@section('contenido')    
<div class="container-fluid">
    <div class="row">
        <div class="col-7 mt-4">
            <div class="centrado mt-4">
                <div class="card mb-4 mt-4 py-4" style="background-color: white">
                    <div class="d-flex justify-content-end"><a href="{{route('zoologicos.index')}}" class="btn btn-primary btn-sm mt-4 mr-2">Atras</a></div>
                    <div class="card-header">
                        <div class="d-flex">
                            <div class="p-2 w-100"><strong>Eliminar Zoo</strong></div>
                        </div>
                    </div>
                    <div>
                        <div class="card-body">
                            <br>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="alert alert-danger">
                                        ¿Seguro de eliminar el Registro del Zoologico?
                                        <p>Una vez eliminado no podr&aacute; ser recuperado</p>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr class="">
                                                        <th scope="col">Nombre</th>
                                                        <th scope="col">Direccion</th>
                                                        <th scope="col">Telefono</th>
                                                        <th scope="col">Pais</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>{{ $zoo->nombre }}</td>
                                                        <td>{{ $zoo->direccion }}</td>
                                                        <td>{{ $zoo->telefono }}</td>
                                                        <td>{{ $zoo->pais }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <form action="{{ route('zoologicos.destroy', $zoo->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                
                                                <div class="d-grid gap">
                                                    <button class="btn btn-outline-danger">Eliminar</button>
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