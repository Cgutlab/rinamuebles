@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb bg-transparent">
                    <li class="breadcrumb-item">
                        <a href="{{route('ambientes')}}">
                            << Volver
                        </a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12 col-md-12 col-lg-8">
            <div class="row mb-3">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="borde_img h-100">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                @foreach($ambiente->imagenes as $key => $slider)
                                @if($loop->first)
                                <li data-target="#carouselExampleSlidesOnly" data-slide-to="{{$key}}" class="active"></li>
                                @else
                                        <li data-target="#carouselExampleSlidesOnly" data-slide-to="{{$key}}"></li>
                                        @endif
                                @endforeach
                            </ol>
                            <div class="carousel-inner" style="position: relative;">
                                @foreach($ambiente->imagenes as $slider)
                                    @if($loop->first)
                                    <div class="carousel-item active">
                                    @else
                                    <div class="carousel-item">
                                    @endif
                                        <div class="position-relative">
                                            <img src="{{asset($slider->imagen)}}?t=<?php echo time(); ?>" class="d-block img-fluid h-100 w-100" alt="...">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12 col-md-12 col-lg-12">
                    <h4 class="titulo_ambiente border_ambiente mb-4 pb-2">
                        {!! $ambiente->nombre !!}
                    </h4>
                    <div class="contenido_producto mt-4">
                        {!! $ambiente->contenido !!}
                    </div>
                </div>
            </div>
            <div class="fondo_relacionado mb-5">
                <div class="row p-4">
                    <div class="col-12 col-md-12 col-lg-12 mb-3">
                        <h5 style="color:#525252">Productos utilizados</h5>
                    </div>
                    @foreach ($ambiente->relacionados as $relacionados)
                    <div class="col-12 col-md-6 col-lg-4 text-center">
                        <div class="borde_producto">    
                            <a href="{{route('producto_info', $relacionados->id)}}" class="enlace_producto">
                                <div class="contenedor_borde">
                                    <div class="contenedor_diametro">
                                        <div class="contenedor_informacion">
                                            <div class="efecto_imagen">
                                                <p class="icon m-0">+</p>
                                            </div>
                                            <img src="{{asset($relacionados->imagenes->first()['imagen'])}}" class="img-fluid h-100 w-100 position-relative" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="nombre_producto pt-2 pb-2">
                                    {{$relacionados->nombre}}
                                </div>
                            </a> 
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection