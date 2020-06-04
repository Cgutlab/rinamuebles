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
                        <a href="{{route('list_productos',$producto->familia->id)}}">
                            {{$producto->familia->nombre}}
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{route('producto_info',$producto->id)}}">
                            {{$producto->nombre}}
                        </a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-3">
            <button class="btn btn-base text-uppercase d-block d-sm-none mb-2 collapsed" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Productos
            </button>
            <div class="side_menu dont-collapse-sm collapse" id="collapseExample">
                <ul class="list-unstyled border-0">
                    @foreach ($familias as $familia_op)
                    <li class="list-group-item border-0">
                        <a href="" class="d-flex align-items-center justify-content-between border-bottom {{($familia_op->id == $producto->id_superior)? 'active-menu':''}}" data-target="#productos_{{$familia_op->id}}" data-toggle="collapse">
                                <span onclick="location.href='{{route('list_productos', $familia_op->id)}}'">{{$familia_op->nombre}}</span>
                                <i class="material-icons flecha">keyboard_arrow_down</i>
                            </a>
                            <ul id="productos_{{$familia_op->id}}" class="list-unstyled border-0 collapse sub-menu {{($familia_op->id == $producto->id_superior)? 'show':''}}">
                                @foreach ($productos as $producto_op)   
                                    @if($producto_op->id_superior == $familia_op->id)
                                    <li class="list-group-item d-flex align-items-center border-0 bg-transparent">
                                        <a href="{{route('producto_info', $producto_op->id)}}" class="{{($producto_op->id == $producto->id)? 'active-menu':''}}">
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
            <div class="row mb-5">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="borde_img h-100">
                        <div id="carouselExampleSlidesOnly" class="carousel slide h-100 w-100" data-ride="carousel">
                            <ol class="carousel-indicators mb-1">
                                @foreach($producto->imagenes as $key => $slider)
                                @if($loop->first)
                                <li data-target="#carouselExampleSlidesOnly" data-slide-to="{{$key}}" class="active"></li>
                                @else
                                        <li data-target="#carouselExampleSlidesOnly" data-slide-to="{{$key}}"></li>
                                        @endif
                                @endforeach
                            </ol>
                            <div class="carousel-inner" style="position: relative;">
                                @foreach($producto->imagenes as $slider)
                                    @if($loop->first)
                                    <div class="carousel-item active">
                                    @else
                                    <div class="carousel-item" >
                                    @endif
                                        <div class="position-relative" >
                                            <img onclick="ampliar(this)" src="{{asset($slider->imagen)}}" class="d-block img-fluid h-100 w-100 hover" data-toggle="modal" data-target="#modalImagen" alt="...">
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="modal fade" id="modalImagen" tabindex="-1" role="dialog" aria-labelledby="modalImagenLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header border-0 position-absolute" style="right:0">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <img class="w-100" id="img_ampliada" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="nombre_producto_ficha mb-4">
                        {{$producto->nombre}}
                    </div>
                    <div class="row caracteristicas">
                        @foreach ($caracteristicas as $caracteristica)
                            <div class="col-12 col-md-12 col-lg-12 d-flex align-items-center mb-3">
                                <img class="mr-4" src="{{asset($caracteristica->imagen)}}" alt="">
                                <div class="texto_caracteristicas">
                                    {!! $caracteristica->contenido !!}
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a href="{{route('presupuesto', ['producto' => $producto->nombre])}}" class="btn btn-base px-4 text-uppercase semi-bold">solititar presupuesto</a>
                </div>
            </div>
            @if(!is_null($producto->contenido))
            <div class="row mb-5">
                <div class="col-12 col-md-12 col-lg-12">
                    <span class="titulo_contenido mb-4">
                        Caracter&iacute;stica
                    </span>
                    <div class="contenido_producto mt-4">
                        {!! $producto->contenido !!}
                    </div>
                </div>
            </div>
            @endif
            <div class="fondo_relacionado">
                <div class="row p-4">
                    <div class="col-12 col-md-12 col-lg-12 mb-3">
                        <h5 style="color:#525252">Productos Relacionados</h5>
                    </div>
                    @foreach ($producto->relacionados as $relacionados)
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
                                <div class="nombre_producto pt-4 pb-2">
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
@push('script')
<script>
    function ampliar(img){
        let img_g = img.src;

        $('#img_ampliada').attr('src', img_g)
    }

</script>
@endpush