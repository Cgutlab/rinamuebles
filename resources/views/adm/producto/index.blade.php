@extends('adm.layouts.app')
@section('content')
<div class="contenido">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background:none;">
                <li class="breadcrumb-item"><a class="breadcrump-element" href="{{ route('adm_index') }}">Inicio</a></li>
                <li class="breadcrumb-item"><a class="breadcrump-element" href="{{ route('productos', $seccion) }}">{{$titulo}}</a></li>
            </ol>
        </nav>
        @if(session('alert'))
        <div class="msg bg-success text-white text-center py-1">
            <p class="m-0">{{session('alert')}}</p>
        </div>
        @endif
        <h5>{{$titulo}}</h5>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Nombre</th>
                @if($seccion == 'producto')
                <th scope="col">Familia</th>
                @endif
                <th scope="col">Orden</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($productos as $producto)
                    <tr>
                        <td>{{ $producto->nombre }}</td>
                        @if($seccion == 'producto')
                        <td>{{ $producto->familia->nombre }}</td>
                        @endif                 
                        <td>{{ $producto->orden }}</td>
                        <td>
                            <a href=" {{ route('producto_show', $producto->id)}} " class="btn btn-editar"><i class="material-icons dp48">create</i></a>
                            <a onclick="return confirm('Realmente desea eliminar este registro?')"  href=" {{ action('adm\ProductoController@eliminar',  $producto->id)}} " class="btn btn-eliminar_listado"><i class="material-icons ">delete</i></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td >No existen registros</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
