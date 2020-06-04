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
    <div class="row text-center mb-5">
        <div class="col-12 col-md-12 col-lg-9 offset-lg-1">
            <div class="titulo_empresa text-uppercase mb-5">
                {{$empresa->titulo}}
                <hr align="center" class="subrayado w-25 mt-0">
            </div>
            <div class="contenido_empresa">
                {!! $empresa->contenido !!}
            </div>
        </div>
    </div>
</div>
@endsection