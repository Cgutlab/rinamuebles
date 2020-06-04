@extends('adm.layouts.app')
@section('content')
<div class="contenido">
    <div class="col s12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background:none;">
                <li class="breadcrumb-item"><a class="breadcrump-element" href="{{ route('adm_index') }}">Inicio</a></li>
                <li class="breadcrumb-item"><a class="breadcrump-element" href="{{ route('familia') }}">Familia</a></li>
            </ol>
        </nav>
        <h3>Editar</h5>
        <div class="divider"></div>
        <form method="POST"  enctype="multipart/form-data" action="{{action('adm\FamiliaController@update', $familia->id)}}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre"  aria-describedby="nombreHelp" placeholder="Ingrese el nombre" value="{{ $familia->nombre }}">
                    </div>
                </div>
            </div>   
            <div class="row">
                <div class="col-12">
                    <label for="imagen">Imagen</label>
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" onChange="readURL(this, 'img_label')" name="imagen" id="imagen" aria-describedby="inputGroupFileAddon01" >
                            <label class="custom-file-label" id="img_label" for="imagen">Seleccione la imagen (Tama&ntilde;o recomendado: 558x244px)</label>
                        </div>
                    </div>
                    <div class="imagen_show">
                        <img class="img_show" src="{{ asset($familia->imagen) }}" alt="">
                    </div>
                </div>
            </div>            
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="orden">Orden</label>
                        <input type="text" class="form-control" id="orden" name="orden"  aria-describedby="ordenHelp" placeholder="Ingrese el orden" value="{{ $familia->orden }}">
                    </div>
                </div>
            </div>   
            <div class="row ">
                <div class="col-12">
                    <div class="form-group">
                        <label for="active">Activo</label>
                        <input type="checkbox" id="active" name="active" value="1"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <a href="{{ route('familia')}}" class="btn btn-eliminar">Cancelar</a>
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
@endsection
@push('script')
    <script>
        var active  = {{$familia->active}}
        if(active == 1)
            $('#active').prop('checked', true);
        </script>
@endpush