@extends('layouts/plantilla')

@section('titulo', 'Inicio ZOOs')

<?php
    $datos = array();
    $datos[0] = "../../img/tigre.png"."||"."Cupra Leon <br>$528.900"."||"."<ul>
        <li>Motor: 4 cilindros turbo de 2.0 litros<br></li>
        <li>Potencia máxima: 290 hp @ 5,900 rpm<br></li>
        <li>Par máximo: 258 lb-pie @ 1,700 rpm<br></li>
        <li>Transmisión: Automática de doble embrague de 6 vels.<br></li>
       </ul>";
    $datos[1] = "../../img/elefante.png"."||"."Cupra Leon <br>$528.900"."||"."<ul>
    <li>Velocidad máxima': 250 km/h<br></li>
    <li>Aceleración de 0 a 100 km/h': 5.6 s<br></li>
    <li>Suspensión delantera: Independiente tipo McPherson<br></li>
    <li>Suspensión trasera: Independiente multibrazo<br></li>
    <li>Longitud: 4,281 mm<br></li>
    <li>Cajuela: 380 litros<br></li>
    <li>Consumo en ciudad: 11.1 km/l<br></li>
    <li>Emisiones de CO2': 151 g/km<br></li>
    <li>Capacidad del tanque: 50 litros</li></ul>";
    $datos[2] = "../../img/elefante.png"."||"."Cupra Leon <br>$528.900"."||"."<ul>
    <li>Peso: 1,421 kg<br></li>
    <li>Velocidad máxima': 250 km/h<br></li>
    <li>Aceleración de 0 a 100 km/h': 5.6 s<br></li>
    <li>Suspensión delantera: Independiente tipo McPherson<br></li>
    <li>Suspensión trasera: Independiente multibrazo<br></li>
    <li>Longitud: 4,281 mm<br></li>
    <li>Cajuela: 380 litros<br></li>
    <li>Consumo en ciudad: 11.1 km/l<br></li>
    <li>Emisiones de CO2': 151 g/km<br></li>
    <li>Capacidad del tanque: 50 litros</li></ul>";
?>

@section('contenido')    
<div class="container-fluid mt-4">
    <h1>Catalogo de carros <span class="fa-solid fa-car"></span></h1>
    <h2 class="text-center">"La transtienda"</h2>
    <ul class="gridder">
        <?php
            for ($i=0; $i<count($datos) ; $i++):
                $d=explode("||", $datos[$i]);

        ?>
        <li class="gridder-list" data-griddercontent="<?php echo '#gridder-content-'.$i ?>">
            <img src="<?php echo $d[0]; ?>" class="img-responsive" width="100px" height="200px">
        </li>
        <?php
            endfor;
        ?>
    </ul>
    <?php
        for ($i=0; $i < count($datos); $i++):
            $d=explode("||", $datos[$i]);
        
    ?>
        <div id="<?php echo 'gridder-content-'.$i; ?>" class="gridder-content"> 
            <div class="row">
                <div class="col-sm-6">
                    <img src="<?php echo $d[0]; ?>" class="img-responsive">
                </div>
                <div class="col-sm-6">
                    <h2><?php echo $d[1]; ?></h2>
                    <p><?php echo $d[2]; ?></p>
                </div>
            </div>
        </div>
    <?php
        endfor;
    ?>
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