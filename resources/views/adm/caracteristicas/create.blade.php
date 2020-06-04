@extends('adm.layouts.app')
@section('content')
<div class="contenido">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background:none;">
                <li class="breadcrumb-item"><a class="breadcrump-element" href="{{ route('adm_index') }}">Inicio</a></li>
                <li class="breadcrumb-item"><a class="breadcrump-element" href="{{ route('caracteristicas') }}">Caracter&iacute;sticas</a></li>
            </ol>
        </nav>
        <h3>Nuevo</h5>
        <div class="divider"></div>
        <form method="POST" enctype="multipart/form-data" action="{{action('adm\CaracteristicaController@store')}}">
            @csrf

            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="contenido">Contenido</label>
                    <textarea class="form-control" id="contenido" name="contenido"  rows="3">{{old('contenido')}}</textarea>
                    </div>
                </div>
            </div>   
                <div class="row">
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" onChange="readURL(this, 'img_label')" name="imagen" id="imagen" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" id="img_label" for="imagen">Seleccione (Tamaño recomendado: 57x59px)</label>
                            </div>
                        </div>
                    </div>
                </div>           
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="orden">Orden</label>
                            <input type="text" class="form-control" id="orden" name="orden"  aria-describedby="ordenHelp" placeholder="Ingrese el orden" value="{{old('contenido')}}">
                        </div>
                    </div>
                </div>   
                <div class="row">
                    <div class="col-6">
                        <a href="{{ route('caracteristicas') }}" class="btn btn-eliminar">Cancelar</a>
                    </div>
                    <div class="col-6">
                        <button class="btn btn-enviar d-flex align-items-center" type="submit" name="action">Guardar
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
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