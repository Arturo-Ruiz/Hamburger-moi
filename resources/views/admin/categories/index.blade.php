<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Categorias | Panel Administrativo</title>
  <!-- Favicon -->
  <!-- <link rel="icon" href="assets/img/brand/favicon.png" type="image/png"> -->
  <!-- Fonts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.2.0/turbolinks.js" integrity="sha512-G3jAqT2eM4MMkLMyQR5YBhvN5/Da3IG6kqgYqU9zlIH4+2a+GuMdLb5Kpxy6ItMdCfgaKlo2XFhI0dHtMJjoRw==" crossorigin="anonymous"></script>
  <meta name="turbolinks-cache-control" content="no-cache">

  <link rel="stylesheet" href="{{ asset('admin/fonts/1.css') }}">
  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('admin/vendor/nucleo/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('admin/vendor/font-awesome/all.min.css') }}" type="text/css">
  <!-- Page plugins -->
  <!-- CSS -->

  <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}" ></script>
  <script src="{{ asset('admin/vendor/bootstrap_js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('admin/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('admin/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('admin/vendor/jquery-scroll-lock/jquery-scrollLock.min.js') }}"></script>
  <!-- Optional JS -->
  <script src="{{ asset('admin/vendor/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('admin/vendor/chart.js/Chart.extension.js') }}"></script>
  <!-- Arturo JS -->
  <script src="{{ asset('admin/js/1.js') }}" ></script>
  <script src="{{ asset('admin/vendor/datatables/jquery.dataTables.min.js') }}" ></script>
  <script src="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.js') }}" ></script>
  <link rel="stylesheet" href="{{ asset('admin/css/1.css') }}" type="text/css">
  <style>
    .info-validation{
      text-align: center;
      display: none;
    }
    .info-validation-show{
      text-align: center;
      display: block !important;
      font-size: 15px;
    }
</style>

  @laravelPWA
</head>

<body>
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
          <!-- Brand -->
          <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
              <img src="{{ asset('admin/img/blue.png') }}" class="navbar-brand-img" alt="Logo de la Aplicacion">
            </a>
          </div>
          <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
              <!-- Nav items -->
              <ul class="navbar-nav">
                @if (auth()->user()->role  === '1')
                <li class="nav-item">
                  <a class="nav-link " href="{{route('admin-panel')}}">
                    <i class="ni ni-tv-2 text-primary"></i>
                    <span class="nav-link-text">Panel de Control</span>
                  </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">
                      <i class="ni ni-bullet-list-67 "></i>
                      <span class="nav-link-text">Categorías</span>
                    </a>
                  </li>
{{--
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('Products.index')}}">
                      <i class="fab fa-wpforms"></i>
                      <span class="nav-link-text">Productos</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('Orders.index')}}">
                        <i class="fas fa-boxes"></i>
                        <span class="nav-link-text">Pedidos</span>
                    </a>
                </li> --}}
                @endif



              </ul>
              <!-- Divider -->
              <!-- Heading -->
            <h6 class="navbar-heading p-0 text-muted">
              </h6>
              <!-- Navigation -->
              <hr class="my-3">

              <ul class="navbar-nav mb-md-3" data-turbolinks-permanent>

                <li class="nav-item">
                  <a class="nav-link active active-pro" target="_blank" href="#">
                    <i class="fa fa fa-headset"></i>
                    <span class="nav-link-text">Soporte Técnico</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>








      <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
          <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <!-- Navbar links -->
              <ul class="navbar-nav align-items-center  ml-md-auto ">
                <li class="nav-item d-xl-none">
                  <!-- Sidenav toggler -->
                  <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                      <i class="sidenav-toggler-line"></i>
                      <i class="sidenav-toggler-line"></i>
                      <i class="sidenav-toggler-line"></i>
                    </div>
                  </div>
                </li>
              </ul>
              <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                <li class="nav-item dropdown">
                  <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">

                      <div class="media-body  ml-2  d-none d-lg-block">
                        <span class="mb-0 text-sm  font-weight-bold">{{auth()->user()->name }}</span>
                      </div>
                    </div>
                  </a>
                  <div class="dropdown-menu  dropdown-menu-right ">
                    <div class="dropdown-header noti-title">
                      <h6 class="text-overflow m-0">Bienvenido!</h6>
                    </div>
                    <a href="#" target="_blank" class="dropdown-item">
                      <i class="fa fa-headset"></i>
                      <span>Soporte Técnico</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();"
                     {{ __('Logout') }} class="dropdown-item">
                      <i class="ni ni-user-run"></i>
                      <span>Cerrar Sesión</span>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    </a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <div class="main-content" id="panel">
            <!-- Header -->
            <!-- Header -->
            <div class="header bg-primary pb-6">
                @if (session('info'))
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="alert alert-success">
                                {{ session('info') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
                @if (session('danger'))
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="alert alert-danger">
                                {{ session('danger') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
                <div class="container-fluid">
                    <div class="header-body">
                      <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                      <h6 class="h2 text-white d-inline-block mb-0">Categorías Registradas</h6>

                          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                              <li class="breadcrumb-item"><a href="{{route('admin-panel')}}"><i class="fas fa-home"></i></a></li>
                              <li class="breadcrumb-item active"><a href="#">Categorías</a></li>
                            </ol>
                          </nav>
                        </div>
                        <div class="col-lg-6 col-5 text-right">
                          <a href="#"  data-toggle="modal" data-target="#register_category" class="prueba_boton_registrar btn btn-lg btn-neutral"> Registrar</a>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <!-- Page content -->
            <div class="container-fluid mt--6">
                <div class="row">
                    <div class="col">
                      <div class="card">
                        <!-- Card header -->
                        <div class="card-header border-0">
                          <h3 class="mb-0">Categorías Registradas</h3>
                        </div>
                        <!-- Light table -->
                        <div class="table-responsive">
                          <table id="categories" class="table align-items-center table-flush">
                            <thead class="thead-light">
                              <tr>
                                <th scope="col" class="sort" data-sort="name">ID</th>
                                <th scope="col" class="sort" data-sort="budget">Nombre</th>
                                <th scope="col" class="sort" data-sort="budget">Status</th>
                                <th scope="col" class="sort" data-sort="status">Acciones</th>
                              </tr>
                            </thead>
                          </table>
                        </div>
                        <!-- Card footer -->

                      </div>
                    </div>
                  </div>
              <!-- Footer -->
              <footer class="footer pt-0">
                <div class="row align-items-center justify-content-lg-between">
                  <div class="col-lg-6">
                    <div class="copyright text-center  text-lg-left  text-muted">
                      &copy; 2021 <a href="#" class="font-weight-bold ml-1" target="_blank">Alejandro Moises</a> &<a href="#" class="font-weight-bold ml-1" target="_blank">Arturo Ruiz</a>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                      <li class="nav-item">
                        <a href="#" class="nav-link" target="_blank">Alejandro Moises</a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link" target="_blank">Arturo Ruiz</a>
                      </li>

                      <li class="nav-item">
                        <a href="#" class="nav-link" target="_blank">Términos y Condiciones de la Aplicacion</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </footer>
            </div>
          </div>


          <div class="modal fade" id="register_category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Registrar Categoria</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-tag"></i></span>
                            </div>
                            <input class="form-control name" placeholder="Ingresar Nombre" id="name" name="name"  required type="text">
                          </div>
                    </div>
                    <div>
                        <p class="info-validation" id="text_validation">Debes de completar el formulario para continuar*</p>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  <button  type="submit" class="btn test-buuton btn-primary save">Registrar Categoria</button>

                </div>
              </div>
            </div>
          </div>



    <script>
        $dataTable = $('#categories').DataTable({
            "language": {
              "sProcessing":     "Procesando...",
              "sLengthMenu":     "Mostrar _MENU_ registros",
              "sZeroRecords":    "No se encontraron resultados",
              "sEmptyTable":     "Ningún dato disponible en esta tabla",
              "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
              "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
              "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
              "sInfoPostFix":    "",
              "sSearch":         "Buscar:",
              "sUrl":            "",
              "sInfoThousands":  ",",
              "sLoadingRecords": "Cargando...",
              "oPaginate": {
              "sFirst":    "Primero",
              "sLast":     "Último",
              "sNext":     ">",
              "sPrevious": "<"
              },
              "oAria": {
                  "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                  "sSortDescending": ": Activar para ordenar la columna de manera descendente"
              }

        },
            "serverSide": true,
            "ajax": "{{url('api/categories')}}",
            "columns": [
                {data: 'id'},
                {data: 'name'},
                {data: 'status.blade'},
                {data: 'btn'},
            ]
        });



        document.addEventListener("turbolinks:before-cache", function() {
            if ($dataTable !== null) {
            $dataTable.destroy();
            $dataTable = null;
            }
        });


        $(".save").unbind().click(function() {

            var name = $(".name").val();

            if(name){
                $.ajax({

                    url: "{{url('api/categories/create')}}",
                    type: "POST",
                    data:{
                    name: name,
                    _token:'{{ csrf_token() }}'
                    },
                    cache: false,
                    dataType: 'json',
                    success: function(dataResult){

                    }

                });

                $('#register_category').modal('toggle');
                    $dataTable.ajax.reload(null, false );

                }else{
                    document.getElementById('text_validation').className = 'info-validation-show';
                }
        });
    </script>

</body>
</html>
