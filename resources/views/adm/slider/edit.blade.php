@extends('adm.layouts.app')
@section('content')
<div class="contenido">
    <div class="col s12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background:none;">
                <li class="breadcrumb-item"><a class="breadcrump-element" href="{{ route('adm_index') }}">Inicio</a></li>
                <li class="breadcrumb-item"><a class="breadcrump-element" href="{{ route('slider', $slider->seccion) }}">Slider</a></li>
            </ol>
        </nav>
        <h3>Slider</h5>
        <div class="divider"></div>
        <form method="POST"  enctype="multipart/form-data" action="{{action('adm\SliderController@update', $slider->id)}}">
            @csrf
            @method('PUT')
            <input type="hidden" name="seccion" value="{{$slider->seccion}}">
            <div class="row w-100">
                <div class="col">
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" onChange="readURL(this, 'img_label')" name="imagen" id="imagen" aria-describedby="inputGroupFileAddon01" >
                            <label class="custom-file-label" id="img_label" for="imagen">Seleccione la imagen (Tamaño recomendado: 1400x450px)</label>
                        </div>
                    </div>
                    <div class="imagen_show">
                        <img class="img_slider" src="{{ asset($slider->imagen) }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row w-100">
                    <div class="col">
                        <div class="form-group">
                            <label for="contenido">Contenido</label>
                            <textarea class="form-control" id="contenido" name="contenido"  rows="3">{{$slider->contenido}}</textarea>
                        </div>
                    </div>
                </div>              
                <div class="row w-100">
                    <div class="col">
                        <div class="form-group">
                            <label for="orden">Orden</label>
                            <input type="text" class="form-control" id="orden" name="orden"  aria-describedby="ordenHelp" placeholder="Ingrese el orden" value="{{ $slider->orden }}">
                        </div>
                    </div>
                </div>   
                <div class="row w-100">
                    <div class="col">
                        <a href="{{ route('slider', $slider->seccion)  }}" class="btn btn-eliminar">Cancelar</a>
                    </div>
                    <div class="col">
                        <button class="btn btn-enviar d-flex align-items-center" type="submit" name="action">Guardar 
                            <i style="font-size:24px;" class="material-icons">send</i>
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