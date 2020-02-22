@extends('layouts.login')

@section('content')
<div class="error-pagewrap">
<div class="error-page-int">
            <div class="text-center m-b-md custom-login">
            </div>
            <div class="content-error">
                <div class="hpanel">
                    <div class="panel-body">
                        <center>
                         <img src="{{ asset('images/logo01.png') }}">
                                                <p>Esperamos que llegues para quedarte</p>
                                            </center>
                        <form action="{{ route('login') }}" id="loginForm" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="control-label" for="username">Correo</label>
                                <input type="text" placeholder="example@gmail.com" title="ingresa tu correo" required="" value="" name="email" id="email" class="form-control @error('email') is-invalid @enderror">
                                @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                @enderror
                                
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Contraseña</label>
                                <input type="password" title="ingresa tu contraseña" placeholder="******" required="" value="" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
                                @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                @enderror
                                
                            </div>
                            <div class="checkbox login-checkbox">
                                <label>
                                        <input type="checkbox" class="i-checks"> Recordarme </label>
                                
                            </div>
                            <center><button class="btn btn-success  loginbtn">Ingresar</button> <a class="btn btn-success  loginbtn" href="{{ route('register')}}">Crear cuenta</a>
                            
                        
                                            
                            </center>
                        </form>
                        <div class="row">
                            
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <center> <div class="login-social-inner"> 
                                            <hr>
                                           </br>
                                                <a href="{{ route('redirect')}}" class="button btn-social basic-ele-mg-b-10 facebook span-left"> <span><i class="fa fa-facebook"></i></span>Ingresar con Facebook </a>
                                            </div>
                                        </center>
                                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>




@endsection
