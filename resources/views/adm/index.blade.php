@extends('adm.layouts.app')

@section('content')
<div class="contenido">
   <h1 class="text-center text-uppercase mt-5 color"> Bienvenido, {{ ucfirst(Auth::user()->name) }}</h1>
</div>
@endsection