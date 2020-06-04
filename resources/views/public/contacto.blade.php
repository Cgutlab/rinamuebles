@extends('layouts.app')
@section('content')
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.852900410578!2d-58.56995488504961!3d-34.68366186923886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc63b1ba05ab7%3A0x310940ea02513694!2sRina+Amoblamientos!5e0!3m2!1ses-419!2sar!4v1560187029092!5m2!1ses-419!2sar" height="350" frameborder="0" style="border:0; width:100%;" allowfullscreen></iframe>
@if(session('alert'))
<div class="msg bg-success text-white text-center py-1 mb-3">
    <p class="m-0">{{session('alert')}}</p>
</div>
@endif
<form action="{{route('contacto_send')}}" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="container">
        <div class="row mt-4 mb-5">
            <div class="col-12 col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
                <i class="material-icons icon_contacto">location_on</i>
                <div class="texto_iconos_contacto">
                    {{$direccion['calle'].' '. $direccion['altura'].', '.
                    $direccion['localidad'].', '. $direccion['provincia']}}
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
                <i class="material-icons icon_contacto">phone_in_talk</i>
                <div class="texto_iconos_contacto">
                    @foreach($telefonos as $telefono)
                    {{$telefono}}<br>
                    @endforeach
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
                <i class="material-icons icon_contacto">send</i>
                <div class="texto_iconos_contacto">
                    {{$email}}
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-12 col-lg-8">              
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-6 mb-2">
                        <div class="form-group">
                            <input type="text" class="form-control mt-input" name="nombre" id="nombre" placeholder="Nombre *" required>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6">
                        <div class="form-group">
                            <input type="email" class="form-control mt-input" name="email" id="email" placeholder="Email *" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-6 mb-2">
                        <div class="form-group">
                            <input type="text" class="form-control mt-input" name="telefono" id="telefono" placeholder="Teléfono">
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control mt-input" name="localidad" id="localidad" placeholder="Localidad">
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <textarea name="informacion" class="form-control mt-input w-100" id=""  placeholder="Mensaje" rows="5"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-12 col-md-12 col-lg-12 ">
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

                </div>
                <div class="row mb-4">
                    <div class="col-12 col-md-12 col-lg-12 ">
                        <div class="captcha d-flex justify-content-center">
                            <div class="g-recaptcha mb-4 mb-lg-0" data-sitekey="6Ldbq5oUAAAAAOUkdEMu4sYzDOPKf85c_-vRI7r3"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 text-center">
                        <button class="btn btn-base text-uppercase px-5" type="submit">enviar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection