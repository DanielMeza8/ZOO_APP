@extends('layouts/plantilla')

@section('titulo', 'Inicio Animales-ZOO')

@section('contenido')    
<div class="container-fluid">
    <div class="row">
        <div class="col-7 mt-4">
            <div class="centrado mt-4">
                <div class="card mb-4 mt-4 py-4" style="background-color: white">
                    <div>
                        <div class="card-body">
                            <div class="d-flex justify-content-end"><a href="{{route('zoologicos.index')}}" class="btn btn-primary mt-4">Atras</a></div>
                            <h2 class="card-title"><strong>Inicio</strong><p><small class="text-muted">"Animales-ZOO"</small></p></h2>
                            <br>
                            <div>
                                <a href="{{route('animales.create', $id)}}" class="btn btn-primary">Agregar Animal</a>
                            </div>
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
                                            <th scope="col">Editar</th>
                                            <th scope="col">Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($animales as $item)
                                        <tr>
                                            <td>{{ $item->nombre }}</td>
                                            <td>{{ $item->especie }}</td>
                                            <td>{{ $item->años }}</td>
                                            <td>{{ $item->origen }}</td>
                                            <td>{{ $item->habitad }}</td>
                                            <td>{{ $item->alimentacion }}</td>
                                            <td><a href="{{route('animales.edit', $item->id)}}" class="btn btn-sm btn-warning">Editar</a></td>
                                            <td><a href="{{route('animales.show', $item->id)}}" class="btn btn-sm btn-danger">Eliminar</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                  </table>
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
                        <div class="col-4">
                            <div class="text-center">
                            <br>
                                <h4 class="text-white">Grafica de numero de especies que hay en el ZOO</h4>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="text-center" style="width: 300px; height: 300px;">
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // $(document).ready(function () {
        const gdata = JSON.parse(`<?php echo $data; ?>`);
        // console.log(data);
        const ctx = document.getElementById('myChart');
    
        const myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: gdata.label,
                datasets: [{
                label:'Cantidad de especies',
                data: gdata.data,
                borderWidth: 1
            }],
        },
        options: {
        scales: {
            y: {
            beginAtZero: true
            }
        }
        }
        });
    // })
</script>

@endsection