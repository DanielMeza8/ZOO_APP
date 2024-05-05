@extends('layouts/plantilla')

@section('titulo', 'Inicio ZOOs')

@section('contenido')    
<div class="container-fluid">
    <div class="row">
        Estas en animales en extincion
    </div>
</div>

@endsection

@section('scripts')
{{-- <script>
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
</script> --}}

@endsection