@extends('layouts/plantilla')

@section('titulo', 'Inicio Animales-ZOO')

@section('contenido')    
<div class="container-fluid">
    <div class="row">
        <div class="col-7 mt-4">
            <div class="centrado mt-4">
                <div class="card mb-4 mt-4 py-4 text-white" style="background-color: transparent">
                    <div>
                        <div class="card-body" style="background-color: rgba(217, 217, 224, 0.349);)">
                            {{-- <div class="d-flex justify-content-end"><a href="{{route('zoologicos.index')}}" class="btn btn-primary mt-4">Atras</a></div> --}}
                            <h2 class="card-title"><strong>Inicio</strong><p><small class="">"Animales-ZOO"</small></p></h2>
                            <br>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="table-light">
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Especie</th>
                                            <th scope="col">Extincion</th>
                                            <th scope="col">Origen</th>
                                            <th scope="col">Habitad</th>
                                            <th scope="col">Alimentacion</th>
                                         </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($animales as $item)
                                        <tr>
                                            <td><strong>{{ $item->nombre }}</strong></td>
                                            <td><strong>{{ $item->especie }}</strong></td>
                                            <td><strong>{{ $item->años }}</strong></td>
                                            <td><strong>{{ $item->origen }}</strong></td>
                                            <td><strong>{{ $item->habitad }}</strong></td>
                                            <td><strong>{{ $item->alimentacion }}</strong></td>
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