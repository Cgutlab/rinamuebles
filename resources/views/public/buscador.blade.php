@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{route('buscador')}}" method="post">
        @csrf
        <div class="row pt-5">
            <div class="col-6">
                <div class="form-group">
                    <input type="text" name="datos" class="form-control mt-input" placeholder="Buscar..." required>
                </div>
            </div>
            <div class="col-6">
                <button class="btn btn-base text-uppercase" type="submit">buscar</button>
            </div>
        </div>
    </form>
    <div class="row mb-5">
        <div class="col-12">
            <h4 class="texto-color border-bottom">Resultados</h4>
        </div>
    </div>
    <div class="row">
        @if (!is_null($coincidencias))   
            @forelse ($coincidencias as $item)        
            <div class="col-12 col-md-6 col-lg-4 mb-5">
                <span class="etiqueta text-left text-uppercase p-2">{{$item->seccion}}</span>
                <div class="borde_producto text-center">
                    @if(!is_null($item->id_superior))
                        <a href="{{route('producto_info', $item->id)}}" class="enlace_producto">
                    @else
                        <a href="{{route('ambiente_info', $item->id)}}" class="enlace_producto">
                    @endif
                            <div class="contenedor_borde">
                                <div class="contenedor_diametro">
                                    <div class="contenedor_informacion">
                                        <div class="efecto_imagen">
                                            <p class="icon m-0">+</p>
                                        </div>
                                        <img src="{{asset($item->imagenes->first()['imagen'])}}" class="img-fluid position-relative w-100 h-100" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="nombre_producto pt-2 pb-2">
                                {{$item->nombre}}
                            </div>
                        </a> 
                    </div>
                </div>
                @empty
                <div class="col-12 col-md-12 col-lg-12">
                    <h4 class="texto-color">No hay coincidencias en la busqueda realizada</h4>
                </div>
                @endforelse
            @endif
        </div>
</div>
@endsection