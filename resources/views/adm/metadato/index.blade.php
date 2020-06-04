@extends('adm.layouts.app')
@section('content')
<div class="contenido">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background:none;">
                <li class="breadcrumb-item"><a class="breadcrump-element" href="{{ route('adm_index') }}">Inicio</a></li>
                <li class="breadcrumb-item"><a class="breadcrump-element" href="{{ route('metadatos') }}">Meta-datos</a></li>
            </ol>
        </nav>
        @if(session('alert'))
        <div class="msg bg-success text-white text-center py-1 mb-3">
            <p class="m-0">{{session('alert')}}</p>
        </div>
        @endif
        <h5>Meta-datos</h5>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Keywords</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Secci&oacute;n</th>
                <th scope="col">Editar</th>
                </tr>
            </thead>
            <tbody>
            @forelse($metadata as $md)
                <tr>
                    <td>{!! $md->keyword !!}</td>
                    <td>{!! $md->descripcion !!}</td>
                    <td>{!! $md->seccion !!}</td>
                    <td>
                        <a href=" {{ route('metadatos_show', $md->id)}} " class="btn btn-editar"><i class="material-icons">create</i></a>
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
