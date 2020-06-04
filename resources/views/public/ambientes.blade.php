@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row mt-5 mb-5">
        <div class="col-12 col-lg-12 text-center">
            <fieldset class="barras">
                <legend style="width:auto!important;">
                    <div class="texto_leyenda d-inline-block text-uppercase mx-5">
                        <p>
                            conocé nuestros
                        </p>
                        <p>
                            <strong >
                                ambientes
                            </strong>
                        </p>
                    </div>
                </legend>
            </fieldset>
        </div>
    </div>
    <div class="row mb-5">
        @foreach ($ambientes as $ambiente)  
        <div class="col-12 col-md-6 col-lg-4 mb-5">
            <div class="borde_producto text-center">  
                <a href="{{route('ambiente_info', $ambiente->id)}}" class="enlace_producto">
                    <div class="contenedor_borde">
                        <div class="contenedor_diametro">
                            <div class="contenedor_informacion">
                                <div class="efecto_imagen">
                                    <p class="icon m-0">+</p>
                                </div>
                                <img src="{{asset($ambiente->imagenes->first()['imagen'])}}" class="img-fluid position-relative h-100 w-100" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="nombre_producto pt-2 pb-2">
                        {{$ambiente->nombre}}
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection