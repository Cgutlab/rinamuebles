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
                <li class="breadcrumb-item"><a class="breadcrump-element" >{{$home->titulo}}</a></li>
            </ol>
        </nav>
        <h3>Editar</h3>
        <div class="divider"></div>
        <form method="POST"  enctype="multipart/form-data" action="{{action('adm\HomeController@update', $home->id)}}">
            @csrf
            @method('PUT')
            <input type="hidden" name="seccion" value="{{$home->seccion}}">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="titulo">T&iacute;tulo</label>
                        <input type="text" class="form-control" id="titulo" name="titulo"  aria-describedby="tituloHelp" placeholder="Ingrese el título" value="{{ $home->titulo }}">
                    </div>
                </div>
            </div>   
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="contenido">Contenido</label>
                        <textarea class="form-control" id="contenido" name="contenido"  rows="3">{{$home->contenido}}</textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <label id="" for="imagen">Imagen</label>
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" onChange="readURL(this, 'img_label')" name="imagen" id="imagen" aria-describedby="inputGroupFileAddon01" >
                            <label class="custom-file-label" id="img_label" for="imagen">Seleccione la imagen (Tamaño recomendado: {{$tamaño}})</label>
                        </div>
                    </div>
                    <div class="imagen_show">
                        <img class="img_show" src="{{ asset($home->imagen) }}" alt="">
                    </div>
                </div>
            </div>        
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="orden">Orden</label>
                        <input type="text" class="form-control" id="orden" name="orden"  aria-describedby="ordenHelp" placeholder="Ingrese el orden" value="{{ $home->orden }}">
                    </div>
                </div>
            </div>   
            <div class="row">
                <div class="col-12 text-right">
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