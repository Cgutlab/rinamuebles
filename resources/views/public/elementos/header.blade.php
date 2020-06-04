<div class="info">
    <div class="container">
        <div class="row esconder">
            <div class="col-12 col-md-12 col-lg-6">
                <ul class="nav p-2">
                    <li class="nav-item d-flex align-items-center nav-borde pr-2">
                        <a href="{{$redes->url}}" class="d-flex justify-content-around align-items-center red_social" target="_blank">
                            Seguinos en 
                            <i class="fab fa-facebook-square icono_red ml-2"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <div class="d-flex justify-content-start justify-content-lg-end">
                    <div class="input-group justify-content-start justify-content-lg-end">
                        <div class="input-group-prepend">
                            <span class="input-group-text imagen_buscador px-1 py-1" id="basic-addon1">
                                <i class="fas fa-search iconos"></i>
                            </span>
                        </div>
                        <form action="{{route('buscador')}}" method="post">
                            @csrf
                            <div class=""> 
                                <input type="text" class="form-control input-buscador " name="datos" placeholder="Estoy Buscando..." aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="menu ">
    <div class="container">
        <div class="row py-2 esconder ">
            <div class="col-12 col-md-12 col-lg-4 d-flex">
                <ul class="nav justify-content-center flex-nowrap w-100">
                    <li class="nav-item d-flex align-items-center">
                        <a href="{{route('index')}}" class="nav-link p-0 enlace_header {{ (Request::is('/*')) ? 'menu_active' : '' }} ">Inicio</a>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                    <a href="{{route('seccion_empresa')}}" class="nav-link p-0 mx-3 enlace_header {{ (Request::is('empresa*')) ? 'menu_active' : '' }}" >Empresa</a>
                    </li>
                    <li class="nav-item d-flex p-0 align-items-center">
                        <a href="{{route('familias')}}" class="nav-link p-0 enlace_header {{ (Request::is('producto*')) ? 'menu_active' : '' }}" >Productos</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <ul class="nav justify-content-center flex-nowrap esconder">
                    <li class="nav-item">
                        <a class="navbar-brand m-0" href="{{route('index')}}">
                            <img src="{{asset($logo_header->imagen)}}">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-12 col-lg-4 d-flex">
                <ul class="nav justify-content-center flex-nowrap py-2 esconder">
                    <!--
                    <li class="nav-item d-flex align-items-center">
                        <a href="{{route('ambientes')}}" class="nav-link p-0  enlace_header {{ (Request::is('ambientes*')) ? 'menu_active' : '' }}" >Ambientes</a>
                    </li>
                    -->
                    <li class="nav-item d-flex align-items-center">
                        <a href="{{route('presupuesto')}}" class="nav-link p-0 mx-3 enlace_header {{ (Request::is('presupuesto*')) ? 'menu_active' : '' }}" >Solicitar Presupuesto</a>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <a href="{{route('contacto')}}" class="nav-link p-0 enlace_header {{ (Request::is('contacto*')) ? 'menu_active' : '' }}" >Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light justify-content-center w-100 mostrar">
        <div class="d-flex align-items-center justify-content-center">
            <a class="navbar-brand" href="{{route('index')}}">
                <img class="img-fluid" src="{{asset($logo_header->imagen)}}">
            </a>
            <div >
                <button class="navbar-toggler bg-light" type="button" data-toggle="modal" data-target="#menuNav" aria-controls="navbarTogglerDemo03">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
        <div id="menuNav" class="modal fade menuNav" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-modal="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content border-top-0 border-left-0 border-bottom-0">
                    <div class="modal-header bg-light">
                        <h5 class="modal-title">Menú</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item text-uppercase"><a class="enlace_header text-uppercase" href="{{route('index')}}">Inicio</a></li>
                            <li class="list-group-item text-uppercase"><a class="enlace_header text-uppercase" href="{{route('seccion_empresa')}}">Empresa</a></li>
                            <li class="list-group-item text-uppercase"><a class="enlace_header text-uppercase" href="{{route('familias')}}">Productos</a></li>
                            <li class="list-group-item text-uppercase"><a class="enlace_header text-uppercase" href="{{route('ambientes')}}">Ambientes</a></li>
                            <li class="list-group-item text-uppercase"><a class="enlace_header text-uppercase" href="{{route('presupuesto')}}">Presupuesto</a></li>
                            <li class="list-group-item text-uppercase"><a class="enlace_header text-uppercase" href="{{route('contacto')}}">Contacto</a></li>
                        </ul>
                    </div>
                    <div class="modal-footer bg-light info">
                        <form method="post" action="{{ route('buscador') }}" class="position-relative w-100">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <input type="text" class="form-control" name="datos" placeholder="Buscar..." id="">
                            <i class="fas fa-search position-absolute icon_buscar iconos"></i>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>