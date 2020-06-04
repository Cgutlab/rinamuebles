@extends('layouts.app')
@section('content')
<div class="container">
    @if(session('alert'))
        <div class="msg bg-success text-white text-center py-1 mb-3">
            <p class="m-0">{{session('alert')}}</p>
        </div>
    @endif
    <form enctype="multipart/form-data" action="{{route('presupuesto_send')}}" method="POST">
        @csrf
        <div id="form_1" class="mt-5 mb-5">
            <div class="row justify-content-center mb-4">
                <div class="col-12 col-md-12 col-lg-8">
                    <div class="d-flex justify-content-center">
                        <div class="contenedor_img text-center">
                            <img src="{{asset('imagenes/estaticos/presupuesto1_a.png')}}" onError="this.src='{{ asset('imagenes/estaticos/no_imagen.jpg')}}?t=<?php echo time(); ?>'" alt="">
                            <p class="text-uppercase texto_activo  mb-0 mt-4">sus datos</p>
                        </div>
                        <div class="w-50 px-4 mt-38">
                            <hr class="divisor_presupuesto w-100">
                        </div>
                        <div class="contenedor_img text-center">
                            <img src="{{asset('imagenes/estaticos/presupuesto2_b.png')}}" onError="this.src='{{ asset('imagenes/estaticos/no_imagen.jpg')}}?t=<?php echo time(); ?>'" alt="">
                            <p class="text-uppercase texto_inactivo mb-0 mt-4" style="white-space: nowrap;">su consulta</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-12 col-md-12 col-lg-8">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <input type="text" class="form-control mt-input" name="nombre" id="nombre" placeholder="Nombre *">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <input type="email" class="form-control mt-input" name="email" id="email" placeholder="Email *">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <input type="text" class="form-control mt-input" name="telefono" id="telefono" placeholder="Teléfono *">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <input type="text" class="form-control mt-input" name="localidad" id="localidad" placeholder="Localidad *">
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12 text-right mt-4">
                            <button class="btn btn-base text-uppercase px-4" type="button" onclick="validar()">siguiente</button>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <div id="form_2" class="d-none mt-5 mb-5">
            <div class="row justify-content-center mb-4">
                <div class="col-12 col-md-12 col-lg-8">
                    <div class="d-flex justify-content-center">
                        <div class="contenedor_img text-center">
                            <img src="{{asset('imagenes/estaticos/presupuesto1_b.png')}}" onError="this.src='{{ asset('imagenes/estaticos/no_imagen.jpg')}}?t=<?php echo time(); ?>'" alt="">
                            <p class="text-uppercase texto_inactivo mb-0 mt-4">sus datos</p>
                        </div>
                        <div class="w-50 px-4 mt-38">
                            <hr class="divisor_presupuesto w-100">
                        </div>
                        <div class="contenedor_img text-center">
                            <img src="{{asset('imagenes/estaticos/presupuesto2_a.png')}}" onError="this.src='{{ asset('imagenes/estaticos/no_imagen.jpg')}}?t=<?php echo time(); ?>'" alt="">
                            <p class="text-uppercase texto_activo mb-0 mt-4" style="white-space: nowrap;">su consulta</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-12 col-md-12 col-lg-8">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-6 mb-3">
                            <div class="form-group">
                               <textarea name="informacion" class="form-control mt-input w-100" id=""  placeholder="Describa lo que necesita..." rows="5">{{$producto}}</textarea>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-6">
                            <div class="input-group w-100 mb-3">
                                <div class="custom-file file">
                                    <input type="file" name="archivo" class="custom-file-input mt-input" id="inputGroupFile01" >
                                    <label class="custom-file-label mt-input" for="inputGroupFile01" data-browse="...">Adjuntar archivo</label>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center terminos_contacto">
                                <input type="checkbox" id="terminos_aceptados" class="terminos_check mt-1 mr-2" data-toggle="modal" data-target="#modal_terminos" required/>
                                <p>Acepto los términos y condiciones de privacidad</p>
                            </div>
                            <div class="modal fade" id="modal_terminos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">T&eacute;rminos y condiciones de la empresa</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            {!!$terminos!!}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" id="rechazar" class="btn btn-previo" data-dismiss="modal">Cerrar</button>
                                            <button type="button" id="aceptar" class="btn btn-base" data-dismiss="modal">Aceptar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="captcha d-flex justify-content-center">
                                <div class="g-recaptcha mb-4 mb-lg-0" data-sitekey="6Ldbq5oUAAAAAOUkdEMu4sYzDOPKf85c_-vRI7r3"></div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 text-lg-left mt-4">
                            <button class="btn btn-previo text-uppercase px-4" type="button" onclick="prevForm()">anterior</button>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 text-lg-right mt-4">
                            <button class="btn btn-base text-uppercase px-5" type="submit">enviar</button>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
@push('script')
    <script>
        function validateEmail(email) {
                var re = /\S+@\S+\.\S+/;
                console.log(re.test(email))
                return re.test(email);
            }
        function validar(){
            nombre    = $('#nombre').val();
            email     = $('#email').val();
            telefono  = $('#telefono').val();
            localidad = $('#localidad').val();
            
            if(!validateEmail(email)){
                alert('El email esta erroneo, debe tener la siguiente estructura: example@example.com'); return false
            }
            if(nombre !== '' && email !== '' && telefono !== '' && localidad !== '')
                nextForm();
            else
                alert('Debe completar los campos requeridos(*) para poder avanzar')
        }
        nextForm = function(){
           $('#form_1').addClass('d-none')
           $('#form_2').removeClass('d-none')
       }
       function prevForm(){
           $('#form_1').removeClass('d-none')
           $('#form_2').addClass('d-none')
       }
    </script>
@endpush