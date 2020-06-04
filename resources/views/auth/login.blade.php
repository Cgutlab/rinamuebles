@extends('layouts.login')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>
                <div class="card-img text-center mt-4">
                    <img class="img-fluid" onError="this.src='{{ asset('imagenes/estaticos/no_imagen.jpg')}}?t=<?php echo time(); ?>'" src="{{asset($logo_header->imagen)}}" alt="Card image cap">
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class=" form-group text-left ">
                            <label for="username" >{{ __('Username') }}</label>
                            <input id="username" type="name" class="form-control bg-white @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
    
                        <div class=" form-group text-left">
                            <label for="password" class="">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control bg-white @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="form-check text-center">
                                <input class=" form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn" style="background-color: #666666; color: #FEC524; font-family:'Montserrat',sans-serif;">
                                    {{ __('Login') }}
                                </button>
                        <!--
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
