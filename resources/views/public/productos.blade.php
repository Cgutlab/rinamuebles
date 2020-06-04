@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb bg-transparent">
                    <li class="breadcrumb-item">
                        <a href="{{route('familias')}}">
                            Productos
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{route('list_productos',$familia->id)}}">
                            {{$familia->nombre}}
                        </a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-12 col-lg-3">
            <button class="btn btn-base text-uppercase d-block d-sm-none mb-2 collapsed" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Productos
            </button>
            <div class="side_menu dont-collapse-sm collapse" id="collapseExample">
                <ul class="list-unstyled border-0">
                    @foreach ($familias as $familia_op)
                    <li class="list-group-item border-0">
                        <a href="" class="d-flex align-items-center justify-content-between border-bottom {{($familia_op->id == $familia->id)? 'active-menu':''}}" data-target="#productos_{{$familia_op->id}}" data-toggle="collapse">
                            <span onclick="location.href='{{route('list_productos', $familia_op->id)}}'">{{$familia_op->nombre}}</span>
                            <i class="material-icons flecha">keyboard_arrow_down</i>
                        </a>
                        <ul id="productos_{{$familia_op->id}}" class="list-unstyled border-0 collapse sub-menu {{($familia_op->id == $familia->id)? 'show':''}}">
                            @foreach ($productos as $producto_op)   
                            @if($producto_op->id_superior == $familia_op->id)
                            <li class="list-group-item d-flex align-items-center border-0 bg-transparent">
                                <a href="{{route('producto_info', $producto_op->id)}}">
                                    {{$producto_op->nombre}}
                                </a> 
                            </li>
                            @endif
                            @endforeach
                        </ul>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-9">
            <div class="row">
                @foreach ($producto_list as $producto_item)  
                <div class="col-12 col-md-6 col-lg-4 text-center mb-5">
                    <div class="borde_producto">    
                        <a href="{{route('producto_info', $producto_item->id)}}" class="enlace_producto">
                            <div class="contenedor_borde">
                                <div class="contenedor_diametro">
                                    <div class="contenedor_informacion">
                                        <div class="efecto_imagen">
                                            <p class="icon m-0">+</p>
                                        </div>
                                        <img src="{{asset($producto_item->imagenes->first()['imagen'])}}" class="img-fluid position-relative" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="nombre_producto pt-2 pb-2">
                                {{$producto_item->nombre}}
                            </div>
                        </a> 
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection