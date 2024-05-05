@extends('layouts/plantilla')

@section('titulo', 'Inicio ZOOs')

@section('contenido')    
<div class="container-fluid" st>
    <div class="row">
        <div class="col-7 mt-4">
            <div class="centrado mt-4 fondo2">
                <div class="card mb-4 mt-4 py-4 text-white" style="background-color: transparent">
                    <div>
                        <div class="card-body" style="background-color: rgba(217, 217, 224, 0.349);)">
                            <div class="d-flex justify-content-end"><a href="{{route('logout')}}" class="btn btn-primary mt-4">Salir</a></div>
                            <h2 class="card-title"><strong>Inicio</strong><p><small class="text-muted">"ZOO"</small></p></h2>
                            <br>
                            <div>
                                <a href="{{route('zoologicos.create')}}" class="btn btn-primary">Agregar ZOO</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table mt-4 ">
                                    <thead>
                                      <tr class="table-light">
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Direccion</th>
                                        <th scope="col">Telefono</th>
                                        <th scope="col">Pais</th>
                                        <th scope="col">Zoologicos</th>
                                        <th scope="col">Editar</th>
                                        <th scope="col">Eliminar</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($zoo as $item)
                                      <tr>
                                        <td><strong>{{ $item->nombre }}</strong></td>
                                        <td><strong>{{ $item->direccion }}</strong></td>
                                        <td><strong>{{ $item->telefono }}</strong></td>
                                        <td><strong>{{ $item->pais }}</strong></td>
                                        <td><a href="{{ route('animales.index', $item->id) }}" class="btn btn-sm btn-primary">Ver Animales</a></td>
                                        <td><a href="{{ route('zoologicos.edit', $item->id) }}" class="btn btn-sm btn-warning">Editar </a></td>
                                        <td><a href="{{ route('zoologicos.show', $item->id) }}" class="btn btn-sm btn-danger">Eliminar</a></td>
                                      </tr>
                                      @endforeach
                                    </tbody>
                                  </table>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="col-5 mt-4">
            <div class="centrado mt-4">
                <div class="card mb-4 mt-4 text-white" style="background-color: transparent">
                    <div class="d-flex align-items-center">
                        <div class="col-4">
                            <div class="text-center">
                            <br>
                                <h4 class="text-white">Numero de animales que hay en cada ZOO</h4>
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
<div class="container">
    <div class="row">
        @foreach($zoo as $item)
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title"><strong>{{ $item->nombre }}</strong></h5>
                        <p class="card-text">
                            <strong>{{ $item->direccion }}</strong> <br/>
                            <strong>{{ $item->telefono }}</strong> <br/>
                            <strong>{{ $item->pais }}</strong>
                        </p>
                        <!-- Puedes agregar más contenido aquí según tus datos -->
                    </div>
                </div>
            </div>
        @endforeach
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
                label:'Cantidad de animales',
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