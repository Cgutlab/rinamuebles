@extends('layouts.app')

@section('content')
    
<div class="container-fluid">
    <div class="row mb-5">
        <div id="carouselExampleSlidesOnly" class="carousel slide w-100" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach($sliders as $key => $slider)
                    @if($loop->first)
                        <li data-target="#carouselExampleSlidesOnly" data-slide-to="{{$key}}" class="active"></li>
                    @else
                        <li data-target="#carouselExampleSlidesOnly" data-slide-to="{{$key}}"></li>
                    @endif
                @endforeach
            </ol>
            <div class="carousel-inner" style="position: relative;">
                @foreach($sliders as $slider)
                    @if($loop->first)
                        <div class="carousel-item active">
                    @else
                        <div class="carousel-item" >
                    @endif
                        <div class="position-relative">
                            <div class="sombra"></div>
                            <img src="{{asset($slider->imagen)}}?t=<?php echo time(); ?>" class="d-block img-fluid  w-100 slider_img" alt="...">
                            
                        </div>
                    <div class="carousel-caption slider_contenido" style="position: absolute;">
                        <div class="center">
                            {!! $slider->contenido !!}
                        </div>
                    </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mb-5 justify-content-center">
        <div class="col-12 col-md-6  mb-4 mb-lg-0">
            <a href="{{route('familias')}}" class="contenedor_enlace d-flex flex-column hvr-grow">
                <img src="{{asset($producto->imagen)}}" class="mb-1" alt="">
                <div class="titulo_enlace pl-2">{{$producto->titulo}}</div>
            </a>
        </div>
        <!--
        <div class="col-12 col-md-6 col-lg-6 mb-4 mb-lg-0">
            <a href="{{route('ambientes')}}" class="contenedor_enlace d-flex flex-column hvr-grow">
                <img src="{{asset($ambientes->imagen)}}" class="mb-1" alt="">
                <div class="titulo_enlace pl-2">{{$ambientes->titulo}}</div>
            </a>
        </div>
        -->
    </div>
    <div class="row my-5">
        <div class="col-12 col-md-12 col-lg-5">
            <div class="mt-4">
                <span class="titulo_badge p-2">
                    {{$desarrollo->titulo}}
                </span>
                <div class="contenido_home mt-4 mb-4">
                    {!! $desarrollo->contenido !!}
                </div>
            </div>
            <a href="{{route('presupuesto')}}" class="btn btn-base px-4 text-uppercase">consultar</a>
        </div>
        <div class="col-12 col-md-12 col-lg-7">
            <img src="{{asset($desarrollo->imagen)}}" class="img-fluid" alt="">
        </div>
    </div>
</div>
<div class="contenedor_home">
    <div class="container">
        <div class="row py-5 mb-4 mb-lg-0">
            <div class="col-12 col-md-12 col-lg-6">
                <img src="{{asset($empresa->imagen)}}" class="img-fluid" alt="">
            </div>
            <div class="col-12 col-md-12 col-lg-6 p-3">
                <span class="titulo_home text-uppercase">
                    {{$empresa->titulo}}
                    <hr align="left" class="subrayado w-50 text-left mt-0">
                </span>
                <div class="contenido_home mb-4">
                    {!! $empresa->contenido !!}
                </div>
                <a href="{{route('seccion_empresa')}}" class="btn btn-base px-4 text-uppercase">nuestra empresa</a>
            </div>
        </div>
    </div>
</div>
@endsection