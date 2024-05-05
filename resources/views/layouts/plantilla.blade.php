<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="{{asset('gridder/css/jquery.gridder.min.css')}}">
    @yield('links')
    <title>@yield('titulo')</title>
</head>
<body class="f">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('inicioZOO')}}"><img src="{{asset('img/ocelot.webp')}}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            Xolot's</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse d-flex" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Mapa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/animalesenextincion">Animales en peligro de extinción</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Regiones naturales
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                    <a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#modalBosque">
                      Bosque
                    </a>                   
                  </li>
                  <li><a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#modalTundra">Tundra</a></li>
                  <li><a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#modalSabana">Sabana</a></li>
                  <li><a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#modalDesierto">Desierto</a></li>
                  <li><a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#modalPraderas">Praderas</a></li>
                  <li><a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#modalSelva">Selva</a></li>
                </ul>
                <div class="modal fade" id="modalBosque" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h3 class="modal-title" id="staticBackdropLabel"><strong>Bosque</strong></h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <p>Un bosque es un tipo de ecosistema en el que predominan los árboles y arbustos y que está presente en casi todos los continentes y representa un tercio de la superficie del planeta Tierra.
                          Los bosques son fundamentales en el desarrollo del planeta ya que tienen suelos muy fértiles, una gran variedad de fauna y están formados por árboles que liberan oxígeno, absorben dióxido de carbono y regulan flujos hídricos. El clima, el tipo de vegetación y la fauna de un bosque varía según su ubicación geográfica.
                        </p><br/>
                        <p>
                          <strong><h4>Tipos de bosques</h4></strong>
                        <br/>
                        Según su clima: <br/>
                        Bosques templados. Son bosques que se hallan en climas templados. Su vegetación puede ser tanto de frondosas y mixtas de hoja ancha como de árboles de coníferas. <br/>
                        Bosques tropicales. Son bosques que se hallan en climas tropicales en los que abundan las precipitaciones y los árboles de hoja ancha que cubren el suelo de la irradiación solar. <br/>
                        Bosques subtropicales. Son bosques con clima subtropical, ya sea húmedo o seco. <br/>
                        Bosques boreales. Son bosques con un clima subpolar que suelen estar formados por coníferas con hojas perennes.
                        </p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="modalTundra" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Modal Tundra</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        ...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="modalSabana" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Modal Sabana</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        ...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="modalDesierto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Modal Desierto</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        ...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="modalPraderas" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Modal Praderas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        ...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="modalSelva" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Modal Selva</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        ...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="offcanvas" href="#offcanvasacercade" role="button" aria-controls="offcanvasacercade">
                  Acerca de
                </a>                  
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasacercade" aria-labelledby="offcanvasExampleLabelAcercaDe">
                  <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabelAcercaDe">Offcanvas</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                    <div>
                      Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
                    </div>
                  </div>
                </div>
                </a>
              </li>
            </ul>
          </div>      
        </div>
      </nav>
    @yield('contenido')
    <script src="{{asset('jquery-3.3.1.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="{{asset('gridder/js/jquery.gridder.js')}}"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        $(".gridder").gridderExpander({
          scroll: true,
          scrollOffset: 60,
                        scrollTo: "listitem", // panel or listitem
                        animationSpeed: 100,
                        animationEasing: "easeInOutExpo",
                        showNav: true,
                        nextText: "<i class=\"fa fa-arrow-right\"></i>",
                        prevText: "<i class=\"fa fa-arrow-left\"></i>",
                        closeText: "<i class=\"fa fa-times\"></i>",
                        onStart: function () {
                            console.log("Gridder Inititialized");
                        },
                        onContent: function () {
                            console.log("Gridder Content Loaded");
                            $(".carousel").carousel();
                        },
                        onClosed: function () {
                            console.log("Gridder Closed");
                        }
                    });
      });
    </script>
    
    @yield('scripts')

</body>
</html>