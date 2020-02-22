@extends('layouts.login')

@section('content')

<div class="error-pagewrap">
<div class="error-page-int">
            <div class="text-center m-b-md custom-login">
                
                <h4>Preparado?</h4>
            </div>
            <div class="content-error">
                <div class="hpanel">
                    <div class="panel-body">
                        <center>
                        <img src="{{ asset('images/logo01.png') }}">
                                                <p>Coloca tus datos de ingreso</p>
                                            </center>
                        <form action="{{ route('register') }}" id="loginForm"  method="POST">
                            @csrf
                            <input type="hidden" name="surname" value="n">
                            <div class="form-group-inner">
                                                        <label>Nombre</label>
                                                        <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="¿como es tu nombre?" />
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    </div>

                                                    <div class="form-group-inner">
                                                        <label>Telefono</label>
                                                        <input type="text" id="phone" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" placeholder="¿Como es tu telefono?" />
                                                    @error('phone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    </div>

                                                    <div class="form-group-inner">
                                                        <label>Email</label>
                                                        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="¿Como es tu correo?" />
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <label>Contraseña</label>
                                                        <input type="password" name="password" id="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Introduce tu contraseña" />
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <label>Repite tu Contraseña</label>
                                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Repite tu contraseña" />
                                                    </div>
                                                    <p><b>Al hacer clic en De una, aceptas las Condiciones y la Política de datos. Es posible que te enviemos notificaciones por SMS que podrás desactivar cuando quieras.</b></p>
                           <center> <button type="submit" class="btn btn-success  loginbtn" >Ingresar</button> <a class="btn btn-success  loginbtn" href="{{ route('login')}}">Atrás</a></center>
                            
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


<!--<section class="reservation-area section_gap_top">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="contact-form-section">
                            <h1>Preparado?</h1>
                            <form class="contact-form-area contact-page-form contact-form text-right" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Nombre" onfocus="this.placeholder = ''"
                                     onblur="this.placeholder = 'Nombre'" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control @error('surname') is-invalid @enderror" id="surname" name="surname" value="{{ old('surname') }}" placeholder="Apellido" onfocus="this.placeholder = ''"
                                     onblur="this.placeholder = 'Apellido'" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control @error('nick') is-invalid @enderror" id="nick" name="nick" value="{{ old('nick') }}" placeholder="Apodo" onfocus="this.placeholder = ''"
                                     onblur="this.placeholder = 'Apodo'" >
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}" placeholder="Telefono" onfocus="this.placeholder = ''"
                                     onblur="this.placeholder = 'Telefono'" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="form-group col-md-12">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Correo Electronico" onfocus="this.placeholder = ''"
                                     onblur="this.placeholder = 'Correo Electronico'" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" onfocus="this.placeholder = ''"
                                     onblur="this.placeholder = 'Contraseña'" required="">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="form-group col-md-12">
                                    <input type="password" class="form-control" id="password-confirm" name="password_confirmation" placeholder="Repetir contraseña" onfocus="this.placeholder = ''"
                                     onblur="this.placeholder = 'Repetir contraseña'" required="">
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button class="primary-btn text-uppercase">De una</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
</section> -->