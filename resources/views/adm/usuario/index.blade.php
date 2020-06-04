@extends('adm.layouts.app')
@section('content')
<div class="contenido">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background:none;">
                <li class="breadcrumb-item"><a class="breadcrump-element" href="{{ route('adm_index') }}">Inicio</a></li>
                <li class="breadcrumb-item"><a class="breadcrump-element" href="{{ route('usuario') }}">Usuario</a></li>
            </ol>
        </nav>
        @if(session('alert'))
        <div class="msg bg-success text-white text-center py-1 mb-3">
            <p class="m-0">{{session('alert')}}</p>
        </div>
        @endif
        <h5>Usuarios</h5>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Nombre de usuario</th>
                <th scope="col">Nombre</th>
                <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
            @forelse($usuarios as $user)
                <tr>
                    <td>{!! $user->username !!}</td>
                    <td>{!! $user->name !!}</td>
                    <td>
                        <a href=" {{ route('usuario_show', $user->id)}} " class="btn btn-editar"><i class="material-icons">create</i></a>
                        @if(Auth::user()->id != $user->id)
                            <a onclick="return confirm('Realmente desea eliminar este registro?')"  href=" {{ action('adm\UserController@eliminar', $user->id)}} " class="btn btn-eliminar_listado ">
                                <i class="material-icons">delete</i>
                            </a>
                        @endif
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
