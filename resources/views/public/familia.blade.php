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
                                productos
                            </strong>
                        </p>
                    </div>
                </legend>
            </fieldset>
        </div>
    </div>
    <div class="row">
        @foreach ($familias as $familia)  
        <div class="col-12 col-md-6 col-lg-6 mb-5">
            <a href="{{route('list_productos', $familia->id)}}" class="link-familia hvr-grow">
                <div class="position-relative">
                    <img class="mw-100" src="{{$familia->imagen}}" alt="">
                    <div class="position-absolute contenedor_nombre">
                        <span class="titulo_badge px-1 pt-3">
                            {{$familia->nombre}}
                        </span>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection