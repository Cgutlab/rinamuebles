<div class="sidebar p-0 m-0">
	<ul class="nav flex-sm-column h-100" id="sidenav">
		<li class="nav-item">
			<a class="nav-link d-flex justify-content-center" href="{{ route('adm_index') }}">
			<img class="logo" src="{{asset($logo_header->imagen)}}" alt="">
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link d-flex align-items-center" data-toggle="collapse" href="#home"><i class="material-icons pr-3">home</i>Home</a>
			<div id="home" class="collapse ">
				<ul class="nav flex-column ml-3">
					<li class="nav-item">
						<a class="nav-link  d-flex align-items-center" href="{{route('home_show', ['seccion' => 'producto'])}}"><i class="material-icons">navigate_next</i>Editar nuestros productos</a>
					</li>
					<!--
					<li class="nav-item">
						<a class="nav-link  d-flex align-items-center" href="{{route('home_show', ['seccion' => 'amoblamiento'])}}"><i class="material-icons">navigate_next</i>Editar ambientes realizados</a>
					</li>
					-->
					<li class="nav-item">
						<a class="nav-link  d-flex align-items-center" href="{{route('home_show', ['seccion' => 'desarrollo'])}}"><i class="material-icons">navigate_next</i>Editar desarrollo a medida</a>
					</li>
					<li class="nav-item">
						<a class="nav-link  d-flex align-items-center" href="{{route('home_show', ['seccion' => 'empresa'])}}"><i class="material-icons">navigate_next</i>Editar nuestra empresa</a>
					</li>
					<li class="nav-item">
						<a class="nav-link d-flex align-items-center" href="{{route('slider_create', ['seccion' => 'home'])}}"><i class="material-icons">navigate_next</i>Crear slider</a>
					</li>
					<li class="nav-item">
						<a class="nav-link d-flex align-items-center" href="{{route('slider',  ['seccion' => 'home'])}}"><i class="material-icons">navigate_next</i>Editar sliders</a>
					</li>
				</ul>
			</div>
		</li>
		<li class="nav-item">
			<a class="nav-link  d-flex align-items-center" data-toggle="collapse" href="#empresa"><i class="material-icons pr-3">business</i>Empresa</a>
			<div id="empresa" class="collapse">
			<ul class="nav flex-column ml-3">
				<li class="nav-item">
				<a class="nav-link d-flex align-items-center" href="{{ route('empresa')}}"><i class="material-icons">navigate_next</i>Editar empresa</a>
				</li>
				<li class="nav-item">
					<a class="nav-link d-flex align-items-center" href="{{route('slider_create',  ['seccion' => 'empresa'])}}"><i class="material-icons">navigate_next</i>Crear slider</a>
				</li>
				<li class="nav-item">
					<a class="nav-link d-flex align-items-center" href="{{route('slider',  ['seccion' => 'empresa'])}}"><i class="material-icons">navigate_next</i>Editar sliders</a>
				</li>
			</ul>
			</div>
		</li>
		<li class="nav-item">
			<a class="nav-link d-flex align-items-center" data-toggle="collapse" href="#producto"><i class="material-icons pr-3">shopping_cart</i>Productos</a>
			<div id="producto" class="collapse">
				<ul class="nav flex-column ml-3">
					<li class="nav-item">
						<a class="nav-link d-flex align-items-center" href="{{route('familia_create')}}"><i class="material-icons">navigate_next</i>Crear familia</a>
					</li>
					<li class="nav-item">
						<a class="nav-link d-flex align-items-center" href="{{route('familia')}}"><i class="material-icons">navigate_next</i>Ver familias</a>
					</li>
					<li class="nav-item">
						<a class="nav-link d-flex align-items-center" href="{{route('caracteristicas_create')}}"><i class="material-icons">navigate_next</i>Crear Caracter&iacute;sticas</a>
					</li>
					<li class="nav-item">
						<a class="nav-link d-flex align-items-center" href="{{route('caracteristicas')}}"><i class="material-icons">navigate_next</i>Ver Caracter&iacute;sticas</a>
					</li>
					<li class="nav-item">
						<a class="nav-link d-flex align-items-center" href="{{route('producto_create', ['seccion' => 'producto'])}}"><i class="material-icons">navigate_next</i>Crear Producto</a>
					</li>
					<li class="nav-item">
						<a class="nav-link d-flex align-items-center" href="{{route('productos', ['seccion' => 'producto'])}}"><i class="material-icons">navigate_next</i>Ver Productos</a>
					</li>
				</ul>
			</div>
		</li>
		<li class="nav-item">
			<a class="nav-link d-flex align-items-center" data-toggle="collapse" href="#amoblamiento"><i class="material-icons pr-3">local_shipping</i>Ambientes</a>
			<div id="amoblamiento" class="collapse">
				<ul class="nav flex-column ml-3">
					<li class="nav-item">
						<a class="nav-link d-flex align-items-center" href="{{route('producto_create', ['seccion' => 'ambiente'])}}"><i class="material-icons">navigate_next</i>Crear Ambiente</a>
					</li>
					<li class="nav-item">
						<a class="nav-link d-flex align-items-center" href="{{route('productos', ['seccion' => 'ambiente'])}}"><i class="material-icons">navigate_next</i>Ver Ambientes</a>
					</li>
				</ul>
			</div>
		</li>
		<li class="nav-item">
			<a class="nav-link d-flex align-items-center" data-toggle="collapse" href="#metadatos"><i class="material-icons pr-3">settings</i>Meta-datos</a>
			<div id="metadatos" class="collapse">
			<ul class="nav flex-column ml-3">
				<li class="nav-item">
				<a class="nav-link d-flex align-items-center" href="{{ route('metadatos')}}"><i class="material-icons">navigate_next</i>Ver metadatos</a>
				</li>
			</ul>
			</div>
		</li>
		<li class="nav-item">
			<a class="nav-link d-flex align-items-center" data-toggle="collapse" href="#logo"><i class="material-icons pr-3">insert_photo</i>Logos</a>
			<div id="logo" class="collapse">
			<ul class="nav flex-column ml-3">
				<li class="nav-item">
					<a class="nav-link d-flex align-items-center" href="{{ route('logo')}}"><i class="material-icons">navigate_next</i>Ver Logos</a>
				</li>
			</ul>
			</div>
		</li>
		<li class="nav-item">
			<a class="nav-link d-flex align-items-center" data-toggle="collapse" href="#datos"><i class="material-icons pr-3">contacts</i>Datos</a>
			<div id="datos" class="collapse">
			<ul class="nav flex-column ml-3">
				<li class="nav-item">
					<a class="nav-link d-flex align-items-center" href="{{ route('datos_show', ['seccion'=>'direccion'])}}"><i class="material-icons">navigate_next</i>Editar Direcci&oacute;n</a>
				</li>
				<li class="nav-item">
					<a class="nav-link d-flex align-items-center" href="{{ route('datos_show', ['seccion'=>'telefono'])}}"><i class="material-icons">navigate_next</i>Editar telefonos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link d-flex align-items-center" href="{{ route('datos_show', ['seccion'=>'email'])}}"><i class="material-icons">navigate_next</i>Editar Email</a>
				</li>
				<li class="nav-item">
					<a class="nav-link d-flex align-items-center" href="{{ route('datos_show', ['seccion'=>'terminos'])}}"><i class="material-icons">navigate_next</i>Editar Terminos y condiciones de la empresa</a>
				</li>
			</ul>
			</div>
		</li>
		<li class="nav-item">
				<a class="nav-link d-flex align-items-center" data-toggle="collapse" href="#redes"><i class="material-icons pr-3">share</i>Redes Sociales</a>
				<div id="redes" class="collapse">
				<ul class="nav flex-column ml-3">
					<li class="nav-item">
					<a class="nav-link d-flex align-items-center" href="{{ route('redes')}}"><i class="material-icons">navigate_next</i>Ver Redes</a>
					</li>
				</ul>
				</div>
			</li>
		@if(Auth::user()->isAdmin == '1')
		<li class="nav-item">
			<a class="nav-link d-flex align-items-center" data-toggle="collapse" href="#usuario"><i class="material-icons pr-3">people</i>Usuarios</a>
			<div id="usuario" class="collapse">
			<ul class="nav flex-column ml-3">
				<li class="nav-item">
					<a class="nav-link d-flex align-items-center" href="{{route('usuario_create')}}"><i class="material-icons">navigate_next</i>Crear usuario</a>
				</li>
				<li class="nav-item">
					<a class="nav-link d-flex align-items-center" href="{{route('usuario')}}"><i class="material-icons">navigate_next</i>Ver usuarios</a>
				</li>
			</ul>
			</div>
		</li>
		@endif
		<li class="nav-item">
			<div class="row">
				<div class="col md-6" style="padding-right:0;">
					<a href="https://osole.freshdesk.com/support/home" target="_blank" class="btn-info py-2 btn-block text-uppercase text-center"><i class="fas fa-ticket-alt mr-2"></i>soporte</a>
				</div>
					<div class="col md-6" style="padding-left:0;">
					<a href="{{ route('logout') }}"  class="btn-danger btn-block py-2 text-uppercase text-center" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-power-off mr-2"></i>Cerrar Sesión</a>
				</div>
			</div>
		</li>
	</ul>
	<form class="form-inline my-2 my-lg-0" id="logout-form" action="{{ route('logout') }}" method="POST">
		{{ csrf_field() }}
	</form>
</div>