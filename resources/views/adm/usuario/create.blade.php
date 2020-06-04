@extends('adm.layouts.app')
@section('content')
        <div class="contenido">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="background:none;">
                        <li class="breadcrumb-item"><a class="breadcrump-element" href="{{ route('adm_index') }}">Inicio</a></li>
                        <li class="breadcrumb-item"><a class="breadcrump-element" href="{{ route('usuario') }}">Usuario</a></li>
                    </ol>
                </nav>
                <h3>Editar</h5>
                <div class="divider"></div>
                <form method="POST"  enctype="multipart/form-data" action="{{action('adm\UserController@store')}}">
                    @csrf
                    @method('POST')
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="username">Nombre de usuario</label>
                                <input type="text" class="form-control" id="username" name="username"  aria-describedby="usernameHelp" placeholder="Ingrese el nombre de usuario">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" class="form-control" id="name" name="name"  aria-describedby="nameHelp" placeholder="Ingrese el nombre">
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="password">Contrase&ntilde;a</label>
                                <input type="password" class="form-control" id="password" name="password"  aria-describedby="passwordHelp" placeholder="Ingrese la contrase&ntilde;a">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="input-group mb-3">
                                <select class="custom-select" name="isAdmin" id="isAdmin">
                                    <option value="0">::Seleccione Tipo de Usuario::</option>
                                    <option value="1"> Administrador</option>
                                    <option value="2"> Usuario</option>
                                </select>
                                <div class="input-group-append">
                                    <label class="input-group-text" for="isAdmin">Tipo de usuario</label>
                                </div>
                            </div>
                        </div>
                    </div>         
                        <div class="row">
                            <div class="col-6">
                                <a href="{{ route('usuario') }}" class="btn btn-eliminar">Cancelar</a>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-enviar d-flex justify-content-center" type="submit" name="action">Guardar
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection