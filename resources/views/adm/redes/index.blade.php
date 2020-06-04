@extends('adm.layouts.app')
@section('content')
<div class="contenido">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background:none;">
                <li class="breadcrumb-item"><a class="breadcrump-element" href="{{ route('adm_index') }}">Inicio</a></li>
                <li class="breadcrumb-item"><a class="breadcrump-element" href="{{ route('redes') }}">Redes Sociales</a></li>
            </ol>
        </nav>
        @if(session('alert'))
        <div class="msg bg-success text-white text-center py-1 mb-3">
            <p class="m-0">{{session('alert')}}</p>
        </div>
        @endif
        <h5>Redes Sociales</h5>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Url</th>
                <th scope="col">Editar</th>
                </tr>
            </thead>
            <tbody>
            @forelse($redes as $red)
                <tr>
                    <td>{{$red->nombre }}</td>
                    <td>{{$red->url }}</td>
                    <td>
                        <a href=" {{ route('redes_show', $red->id)}} " class="btn btn-editar"><i class="material-icons dp48">create</i></a>
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
