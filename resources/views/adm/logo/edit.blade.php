@extends('adm.layouts.app')
@section('content')
<div class="contenido">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background:none;">
                <li class="breadcrumb-item"><a class="breadcrump-element" href="{{ route('adm_index') }}">Inicio</a></li>
                <li class="breadcrumb-item"><a class="breadcrump-element" href="{{ route('logo') }}">Logos</a></li>
            </ol>
        </nav>
        <h3>Editar</h5>
        <div class="divider"></div>
        <form method="POST"  enctype="multipart/form-data" action="{{action('adm\LogoController@update', $logo->id)}}">
            @csrf
            @method('PUT')
            <div class="row w-100 mb-2">
                <div class="col">
                    <div class="custom-file mb-2">
                        <input type="file" class="custom-file-input" name="imagen" id="imagen" onChange="readURL(this, 'img_label')" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" id="img_label" for="imagen">Seleccione la imagen (recomendado: 188x81px)</label>
                    </div>
                    <div class="imagen_show">
                        <img src="{{ asset($logo->imagen) }}" alt="">
                    </div>
                </div>
            </div>  
            <div class="row w-100">
                <div class="col">
                    <div class="input-group mb-3">
                        <select class="custom-select" name="seccion" id="seccion">
                            <option selected>Seleccione</option>
                            <option value="header">Header</option>
                            <option value="footer">Footer</option>
                        </select>
                        <div class="input-group-append">
                            <label class="input-group-text" for="seccion">Secci&oacute;n</label>
                        </div>
                    </div>
                </div>
            </div>      
            <div class="row w-100">
                <div class="col">
                    <a href="{{ route('logo') }}" class="btn btn-eliminar">Cancelar</a>
                </div>
                <div class="col">
                    <button class="btn btn-enviar d-flex justify-content-center align-items-center" type="submit" name="action">Guardar
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@push('script')
    <script>
        var seccion = "{{ $logo->seccion }}"
        $('#seccion').val(seccion)
    </script>
@endpush