@extends('adm.layouts.app')
@section('content')
<div class="contenido">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background:none;">
                <li class="breadcrumb-item"><a class="breadcrump-element" href="{{ route('adm_index') }}">Inicio</a></li>
                <li class="breadcrumb-item"><a class="breadcrump-element" href="{{ route('usuario') }}">Meta-datos</a></li>
            </ol>
        </nav>
        <h3>Editar</h5>
        <div class="divider"></div>
        <form method="POST"  enctype="multipart/form-data" action="{{action('adm\MetadatoController@update', $metadata->id)}}">
            @csrf
            @method('PUT')
            <div class="row w-100">
                <div class="col">
                    <div class="form-group">
                        <label for="orden">Keywords</label>
                        <input type="text" class="form-control" id="keyword" name="keyword"  aria-describedby="titulo_espHelp" placeholder="Ingrese los keywords"  value="{{ $metadata->keyword}}">
                    </div>
                </div>
            </div>
            <div class="row w-100">
                <div class="col">
                    <div class="form-group">
                        <label for="descripcion">Descripci&oacute;n</label>
                        <textarea class="form-control" name="descripcion" id="descripcion" rows="3">{{$metadata->descripcion}}</textarea>
                    </div>
                </div>
            </div>
            <div class="row w-100">
                <div class="col">
                    <div class="input-group mb-3">
                        <select class="custom-select" name="seccion" id="seccion">
                            <option selected>Seleccione</option>
                            <option value="home">Home</option>
                            <option value="empresa">Empresa</option>
                            <option value="producto">Productos</option>
                            <option value="ambientes">Ambientes</option>
                            <option value="presupuesto"> Solicitar Presupuesto</option>
                            <option value="contacto">Contacto</option>
                        </select>
                        <div class="input-group-append">
                            <label class="input-group-text" for="seccion">Secci&oacute;n</label>
                        </div>
                    </div>
                </div>
            </div>         
                <div class="row w-100">
                    <div class="col">
                        <a href="{{ route('metadatos') }}" class="btn btn-eliminar">Cancelar</a>
                    </div>
                    <div class="col">
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
    var seccion = "{!!$metadata->seccion!!}"
    $('#seccion').val(seccion)
</script>
    
@endpush