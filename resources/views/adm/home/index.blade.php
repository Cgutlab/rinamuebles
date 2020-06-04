@extends('adm.layouts.app')
@section('content')
<div class="contenido">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background:none;">
                <li class="breadcrumb-item"><a class="breadcrump-element" href="{{ route('adm_index') }}">Inicio</a></li>
                <li class="breadcrumb-item"><a class="breadcrump-element" href="{{ route('slider', $seccion) }}">Slider</a></li>
            </ol>
        </nav>
        <h5>Slider</h5>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Imagen</th>
                <th scope="col">T&iacute;tulo</th>
                <th scope="col">Orden</th>
                <th scope="col">Opciones</th>
                </tr>
            </thead>    
            <tbody>
            @forelse($enlaces as $enlace)
                <tr>
                    <td><img onError="this.src='{{ asset('imagenes/estaticos/no_img.png')}}?t=<?php echo time(); ?>'" src="{{ asset($enlace->imagen) }}" class="icono_tabla"></td>
                    <td>{!! $enlace->titulo !!}</td>
                    <td>{!! $enlace->orden !!}</td>
                    <td>
                        <a href=" {{ route('home_show', $enlace->id)}} " class="btn btn-editar"><i class="material-icons ">create</i></a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td >No existen registros</td>
                </tr>
            @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
