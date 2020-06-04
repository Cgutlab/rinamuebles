@extends('adm.layouts.app')
@section('content')
<div class="col-md-9">
    <div class="row">
        <div class="contenido">
            <div class="col s12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="background:none;">
                        <li class="breadcrumb-item"><a class="breadcrump-element" href="{{ route('adm_index') }}">Inicio</a></li>
                        <li class="breadcrumb-item"><a class="breadcrump-element" href="{{ route('redes') }}">Redes Sociales</a></li>
                    </ol>
                </nav>
                <h5>Editar</h5>
                <div class="divider"></div>
                <form method="POST"  enctype="multipart/form-data" action="{{action('adm\RedesController@update', $red->id)}}" >
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese la red"  value="{{ $red->nombre}}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="url">Url</label>
                                <input type="text" class="form-control" id="url" name="url" placeholder="Ingrese la url"  value="{{ $red->url}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <a href="{{ route('redes') }}" class="btn btn-eliminar">Cancelar</a>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-enviar d-flex align-items-center" type="submit" name="action">Guardar
                                <i style="font-size:24px;" class="material-icons">send</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection