<div class="footer">
	<div class="container">
		<div class="row pt-5">
			<div class="col-12 col-md-12 col-lg-4 order-2 order-lg-1">
				<h5 class="titulo_footer text-uppercase text-center text-lg-left">secciones</h5>
				<div class="d-flex justify-content-center justify-content-lg-start">
					<ul class="list-unstyled mapa pr-5">
                        <li>
                            <a href="{{route('index')}}" class="enlace_footer">Inicio</a>
                        </li>
                        <li>
                            <a href="{{route('seccion_empresa')}}" class="enlace_footer">Empresa</a>
                        </li>
                        <li>
                            <a href="{{route('familias')}}" class="enlace_footer">Productos</a>
                        </li>
                    </ul>
	                <ul class="list-unstyled mapa">
	                    <!--
						<li>
							<a href="{{route('ambientes')}}" class="enlace_footer">Ambientes</a>    
						</li>
						-->
	                    <li>
	                        <a href="{{route('presupuesto')}}" class="enlace_footer"> Solicitar Presupuesto</a>
	                    </li>
	                    <li>
	                        <a href="{{route('contacto')}}" class="enlace_footer">Contacto</a>
	                    </li>
	                </ul>
                </div>
			</div>
			<div class="col-12 col-md-12 col-lg-4 text-center mb-4 mb-lg-0 mt-4 mt-lg-0 order-1 order-lg-2">
	            <a href="{{route('index')}}" class="navbar-brand p-0 m-0">
                	<img onError="this.src='{{ asset('imagenes/estaticos/no_img.png')  }}'" src="{{asset($logo_footer->imagen)}}?t=<?php echo time(); ?>" class="img-fluid" >
            	</a>
                <a href="{{$redes->url}}" class="d-flex justify-content-center mt-4 align-items-center enlace_footer_datos" target="_blank">
                    Seguinos en 
                    <i class="fab fa-facebook-square icono_red icon_footer ml-3"></i>
                </a>
			</div>
			<div class="col-12 col-md-12 col-lg-4 order-3">
				<h5 class="titulo_footer text-uppercase text-center text-lg-left">rina amoblamientos</h5>
                <div class="d-flex justify-content-center justify-content-lg-start mb-3">
					<i class="material-icons icon_footer">location_on</i>
                    <a href="{{url('https://www.google.com.ar/maps/search/'.$direccion['calle'].'+'.$direccion['altura'].'+'.$direccion['localidad'].'+'.$direccion['provincia']  )}}" class="enlace_footer_datos ml-2" target="_blank">
                        {{$direccion['calle'].' '. $direccion['altura']}}<br>
                        {{$direccion['localidad'].' '. $direccion['provincia']}}
                    </a>
                </div>
				<div class="d-flex justify-content-center justify-content-lg-start mb-3">
					<i class="material-icons icon_footer">phone_in_talk</i>
	                <div class="d-flex flex-column ml-2" style="line-height: 1.3;">
	                    @foreach($telefonos as $telefono)
	                    <a href="{{url('tel:'.$telefono)}}" class="enlace_footer_datos" target="_blank">{{$telefono}}</a>
	                    @endforeach
	                </div>
				</div>
				<div class="d-flex justify-content-center justify-content-lg-start mb-3">
					<i class="material-icons icon_footer">send</i>
                	<a href="{{url('mailto:'.$email)}}" class="enlace_footer_datos ml-2 icon_footer" target="_blank">{{$email}}</a>
				</div>
			</div>		
		</div>
	    <div class="row justify-content-center footer_menu">
	        <div class="d-flex border_footer py-3 w-100">
	            <div class="col-12 col-md-12 col-lg-12 text-right p-0">
	                <p class="f_autor m-0 text-uppercase"> by osole </p>
	            </div>
	        </div>
	    </div>
	</div>

</div>