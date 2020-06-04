@extends('adm.layouts.app')
@section('content')
<div class="col-md-9">
    <div class="row">
        <div class="contenido">
            <div class="col s12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="background:none;">
                        <li class="breadcrumb-item"><a class="breadcrump-element" href="{{ route('adm_index') }}">Inicio</a></li>
                        <li class="breadcrumb-item"><a class="breadcrump-element" href="{{ route('productos', $producto->seccion) }}">{{$titulo}}</a></li>
                    </ol>
                </nav>
                <h5 class="mb-4">Editar {{$titulo}}</h5>
                <div class="divider"></div>
                <form method="POST"  enctype="multipart/form-data" action="{{action('adm\ProductoController@update', $producto->id)}}" >
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre" value="{{$producto->nombre}}">
                                <input type="hidden" id="seccion" name="seccion" value="{{$producto->seccion}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                @if($producto->seccion == 'producto')
                                <label for="contenido">Caracter&iacute;sticas</label>
                                @else
                                <label for="contenido">Descripci&oacute;n</label>
                                @endif
                                <textarea class="form-control" id="contenido" name="contenido"  rows="3">{!! $producto->contenido !!}</textarea>
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
                                <input type="text" class="form-control" id="orden" name="orden" placeholder="Ingrese el orden" value="{{$producto->orden}}">
                            </div>
                        </div>
                    </div>
                    @if($producto->seccion == 'producto')
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="familia">Familias</label>
                                <select class="js-example-basic-single form-control" id="familia" name="familia" >
                                <option value="0">Seleccione una familia</option>
                                    @foreach($familias as $familia)
                                        <option value="{{$familia->id}}">{{$familia->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div  class="row ">
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
                                <select class="js-example-basic-multiple form-control" id="relacionados" name="relacionados[]" multiple="multiple" style="width:100%">
                                    <option value="0">Seleccione los productos</option>
                                    @foreach($productos as $producto_op)
                                        @if($producto->id != $producto_op->id)
                                            <option value="{{$producto_op->id}}">{!! $producto_op->nombre !!}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <a href="{{ route('productos', $producto->seccion) }}" class="btn btn-eliminar">Cancelar</a>
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
@push('script')
    <script>
        //Asignamos los valores dinamicos del producto
        producto_id      = {!! $producto->id !!}
        familia_producto = {!! $producto->id_superior !!}
        galeria          = {!! $galeria !!}
        seccion         = "{{$producto->seccion}}"
        relacionados     = {!! json_encode($relacionados) !!}
        caracteristicas  = {!! json_encode($p_caracteristicas) !!}

        CKEDITOR.replace('contenido');
        CKEDITOR.config.height = '150px';
        CKEDITOR.config.width = '100%';
        
        if(seccion == "producto"){
            $('#familia').val(familia_producto)
            $('#contendor_caracteristicas').removeClass('no-visible')
            $("#caracteristicas").val(caracteristicas).trigger("change")
        }
        
        $('.js-example-basic-multiple').select2({
            placeHolder: 'Seleccione los productos',
            maximumSelectionLength: 3
        });
        $("#relacionados").val(relacionados).trigger("change")
/*                  No tocar
        function filtrarProducto(e){
            let familia_id = $(e).val();
            $('#titulo').empty()
            $('#productos_relacionados').removeClass('no-visible')
            let html2 = '';
            if(familia_id == 1){
                html2+= '<label for="bases">Bases</label>'
            }
            else{
                html2+= '<label for="bases">Productos Relacionados</label>'
            }
            $.ajax({
                type: "GET",
                url: ruta,
                success: function (data) {
                    $('#relacionadas').empty();
                    for(i=0;i<data.length;i++){
                        if(data[i].id != producto_id)
                            if(relacionados.includes(data[i].id)){
                                $('#relacionadas').append('<option value="'+ data[i].id +'" selected="selected">'+ data[i].nombre +'</option>');
                            }
                            else
                                $('#relacionadas').append('<option value="'+ data[i].id +'">'+ data[i].nombre +'</option>');
                    }
                    $('.js-example-basic-multiple').select2();
                }
            })

        }
*/
    //cargamos las imagenes de la galeria
    for (let i = 0; i < galeria.length; i++) {
        if(window.contadorI === undefined)
            window.contadorI = 0
        window.contadorI++
        imagen = galeria[i].imagen
        ruta_img = `{{asset('')}}`
        let html = '';
        html+= '<div class="col-6 imagen">';
            html+= '<div class="card" style="border-radius:0;">';
                html+= '<div class="boton-borrar">';
                    html+= '<button class="btn btn-danger" onClick="removerImagen(this)" type="button" style="border-radius:0;">X</button>';
                html+= '</div>';
                html+= '<div class="row">';
                    html+= '<div class="col-12 d-flex justify-content-center">';
                    html+= `<img src="${ruta_img+galeria[i].imagen}" class="imagen_producto">`;
                    html+= '</div>';
                html+= '</div>';
                html+= '<div class="row">';
                    html+= '<div class="col-6">';
                        html+= '<div class="custom-file">';
                            html+= `<input type="file" class="custom-file-input" name="imagenes[]" id="imagen-${window.contadorI}" style="border-radius:0;" aria-describedby="inputGroupFileAddon01">`;
                            html+= ` <input type="hidden" name="imagen_e[]" value="${galeria[i].imagen}">`;
                            html+= ` <label class="custom-file-label" style="border-radius:0;" for="imagen-${window.contadorI}">Subir</label>`;
                    html+= '</div>';
                html+= '</div>';
                html+= '<div class="col-6">';
                    html+= '<div class="form-group">';
                        html+= ` <input type="text" class="form-control" style="border-radius:0;" id="orden-${window.contadorI}" name="orden_imagen[]" placeholder="Ingrese el  orden" value="${galeria[i].orden}">`;
                    html+= '</div>';
                html+= '</div>';
            html+= '</div>';
        html+= '</div>';
        $('#imagenes').append(html)
    }
    
    //Creamos una variable global para contar las imagenes subidas e incrementamos
    //Creamos un elemento Html donde declaramos el los campos de imagen y Orden de la imagen
        function agregarImagen(){
            if(window.contadorI === undefined)
                window.contadorI = 0
            window.contadorI++
            let html = '';
            html+= '<div class="col-6 imagen">';
                html+= '<div class="card" style="border-radius:0;">';
                    html+= '<div class="boton-borrar">';
                        html+= '<button class="btn btn-danger" style="border-radius:0;" onClick="removerImagen(this)" type="button">X</button>';
                    html+= '</div>';
                    html+= '<div class="row">';
                        html+= '<div class="col-6">';
                            html+= '<div class="custom-file">';
                                html+= `<input type="file" style="border-radius:0;" class="custom-file-input" name="imagenes[]" id="imagen-${window.contadorI}" aria-describedby="inputGroupFileAddon01">`;
                                html+= ` <input type="hidden" name="imagen_e[]" >`;
                                html+= ` <label class="custom-file-label" style="border-radius:0;" for="imagen-${window.contadorI}">Subir</label>`;
                        html+= '</div>';
                    html+= '</div>';
                    html+= '<div class="col-6">';
                        html+= '<div class="form-group">';
                            html+= ` <input type="text" class="form-control" style="border-radius:0;" id="orden-${window.contadorI}" name="orden_imagen[]" placeholder="Ingrese el orden">`;
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