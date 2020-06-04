@extends('adm.layouts.app')
@section('content')
<div class="contenido">
    @if(session('alert'))
    <div class="msg bg-success text-white text-center py-1 mb-3">
        <p class="m-0">{{session('alert')}}</p>
    </div>
    @endif
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background:none;">
                <li class="breadcrumb-item"><a class="breadcrump-element" href="{{ route('adm_index') }}">Inicio</a></li>
                <li class="breadcrumb-item"><a class="breadcrump-element">Empresa</a></li>
            </ol>
        </nav>
        <h3>Editar</h5>
        <div class="divider"></div>
        <form method="POST"  enctype="multipart/form-data" action="{{action('adm\EmpresaController@update', $empresa->id)}}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="titulo">T&iacute;tulo</label>
                        <input type="text" class="form-control" id="titulo" name="titulo"  aria-describedby="tituloHelp" placeholder="Ingrese el título" value="{{ $empresa->titulo }}">
                    </div>
                </div>
            </div>   
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="contenido">Contenido</label>
                        <textarea class="form-control" id="contenido" name="contenido"  rows="3">{{$empresa->contenido}}</textarea>
                    </div>
                </div>
            </div>                   
            <div class="row ">
                <div class="col-12">
                    <button class="btn btn-enviar d-flex align-items-center" type="submit" name="action">Guardar 
                        <i style="font-size:24px;" class="material-icons">send</i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@push('script')
    <script>
        CKEDITOR.replace('contenido');
        CKEDITOR.config.height = '150px';
        CKEDITOR.config.width = '100%';
    </script>
@endpush