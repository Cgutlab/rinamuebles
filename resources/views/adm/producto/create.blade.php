@extends('adm.layouts.app')
@section('content')
    <div class="contenido">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="background:none;">
                    <li class="breadcrumb-item"><a class="breadcrump-element" href="{{ route('adm_index') }}">Inicio</a></li>
                    <li class="breadcrumb-item"><a class="breadcrump-element" href="{{ route('productos', $seccion) }}">{{$titulo}}</a></li>
                </ol>
            </nav>
            <h5 class="mb-4">Nuevo {{$titulo}}</h5>
            <div class="divider"></div>
            <form method="POST"  enctype="multipart/form-data" action="{{action('adm\ProductoController@store')}}" >
                @csrf
                @method('POST')
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre">
                            <input type="hidden" id="seccion" name="seccion" value="{{$seccion}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            @if($seccion == 'producto')
                            <label for="contenido">Caracter&iacute;sticas</label>
                            @else
                            <label for="contenido">Descripci&oacute;n</label>
                            @endif
                            <textarea class="form-control" id="contenido" name="contenido"  rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex flex-column">
                        <div>
                            <button class="btn btn-eliminar" onClick="agregarImagen()" type="button">Agregar Imagen</button>
                        </div>
                        <p class="m-0"> Tamaño Recomendado: {{$tamaño}}</p>
                    </div>
                </div>
                <div id="imagenes" class="row mb-4"></div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="orden">Orden</label>
                            <input type="text" class="form-control" id="orden" name="orden" placeholder="Ingrese el orden">
                        </div>
                    </div>
                </div>
                @if($seccion == 'producto')
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="familia">Familia</label>
                            <select class="form-control" id="familia" name="familia">
                                <option value="">Seleccione una familia</option>
                                @foreach($familias as $familia)
                                    <option value="{{$familia->id}}">{{$familia->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="caracteristicas">Caracter&iacute;sticas</label>
                            <select class="js-example-basic-multiple form-control" id="caracteristicas" name="caracteristicas[]" multiple="multiple" style="width:100%">
                                <option value="0">Seleccione las Caracter&iacute;sticas</option>
                                @foreach($caracteristicas as $caracteristica)
                                    <option value="{{$caracteristica->id}}">{!! $caracteristica->contenido !!}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                @endif
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="relacionadas">Productos Relacionados</label>
                            <select class="js-example-basic-multiple form-control" id="relacionadas" name="relacionados[]" multiple="multiple" style="width:100%">
                                <option value="0">Seleccione los productos</option>
                                @foreach($productos as $producto)
                                    <option value="{{$producto->id}}">{!! $producto->nombre !!}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <a href="{{ route('productos', $seccion) }}" class="btn btn-eliminar">Cancelar</a>
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
        CKEDITOR.replace('contenido');
        CKEDITOR.config.height = '150px';
        CKEDITOR.config.width = '100%';

        seccion = "{{$seccion}}"
        if(seccion == "producto")
            $("#familia").prop('required', true);
        $('.js-example-basic-multiple').select2({
            placeHolder: 'Seleccione los productos',
            maximumSelectionLength: 3
        });

        /*  No tocar
        function cargarProducto(){
            let html2 = '';
            html2+= '<label for="bases">Productos Relacionados</label>'
            $('#titulo').append(html2)
            var ruta = '{{ route('lista_productos') }}'    
            $.ajax({
                type: "GET",
                url: ruta,
                success: function (data) {
                    $('#relacionadas').empty();
                    for(i=0;i<data.length;i++){
                        $('#relacionadas').append('<option value="'+ data[i].id +'">'+ data[i].nombre +'</option>');
                    }
                    $('.js-example-basic-multiple').select2();
                }
            })
        }
    cargarProducto()
    */
    //Creamos una variable global para contar las imagenes subidas e incrementamos
    //Creamos un elemento Html donde declaramos el los campos de imagen y Orden de la imagen
        function agregarImagen(){
            if(window.contadorI === undefined)
                window.contadorI = 0
            window.contadorI++

            if(seccion == "ambiente")
                $texto = ''
            if(seccion == "producto")
                $texto = ''
            let html = '';
            html+= '<div class="col-6 imagen">';
                html+= '<div class="" style="border-radius:0;">';
                    html+= '<div class="row">';
                        html+= '<div class="col-5">';
                            html+= '<div class="custom-file m-0">';
                                html+= `<input type="file" style="border-radius:0;" class="custom-file-input" name="imagenes[]" onChange="readURL(this, 'img_label_${window.contadorI}')" id="imagen-${window.contadorI}" aria-describedby="inputGroupFileAddon01">`;
                                html+= ` <input type="hidden" name="imagenes[]" value="">`;
                                html+= ` <label class="custom-file-label" style="border-radius:0;" id="img_label_${window.contadorI}" for="imagen-${window.contadorI}">Subir</label>`;
                        html+= '</div>';
                    html+= '</div>';
                    html+= '<div class="col-5">';
                        html+= '<div class="form-group m-0">';
                            html+= ` <input type="text" class="form-control" style="border-radius:0;" id="orden-${window.contadorI}" name="orden_imagen[]" placeholder="Ingrese el orden">`;
                        html+= '</div>';
                    html+= '</div>';
                    html+= '<div class="col-2">';
                        html+= '<div class="form-group m-0">';
                            html+= `<button class="btn btn-danger" style="border-radius:0;" onClick="removerImagen(this)" type="button">X</button>`;
                        html+= '</div>';
                    html+= '</div>';
                html+= '</div>';
            html+= '</div>';
            $('#imagenes').append(html)
        }
        //Elimina la imagen creada mas cercada a la clase .imagen y disminuye en 1 el contadpr
        function removerImagen(t){
            $(t).closest(".imagen").remove();
            window.contadorI--;
        }
    </script>
@endpush