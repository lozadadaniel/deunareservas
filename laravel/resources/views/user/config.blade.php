@extends('layouts.app')

@section('content')

<div class="basic-form-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="container-fluid">
                        <div class="sparkline8-list mt-b-30">
                            <div class="sparkline8-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                            <div class="basic-login-inner">
                                                <h3>Configuración de mi cuenta</h3>
                                                <p>A continuación puedes actualizar tus datos en caso de que hayan cambiado.</p>
                                                @if (session('message'))
                                                    <div class="alert alert-success">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        <strong>Bien hecho! </strong>{{ session('message') }}
                                                    </div>
                                                    @endif
                                                <form method="POST" action="{{ route('user.update') }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group-inner">
                                                        <label>Nombre</label>
                                                        <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ Auth::user()->name }}" placeholder="¿como es tu nombre?" />
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    </div>

                                                    <div class="form-group-inner">
                                                        <label>Apellido</label>
                                                        <input type="text" id="surname" name="surname" class="form-control @error('surname') is-invalid @enderror" value="{{ Auth::user()->surname }}" placeholder="¿Como es tu apellido?" />
                                                    @error('surname')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    </div>

                                                    <div class="form-group-inner">
                                                        <label>Apodo</label>
                                                        <input type="text" id="nick" name="nick" class="form-control @error('nick') is-invalid @enderror" value="{{ Auth::user()->nick }}" placeholder="¿Como te apodan?" />
                                                    @error('nick')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    </div>

                                                    <div class="form-group-inner">
                                                        <label>Telefono</label>
                                                        <input type="text" id="phone" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ Auth::user()->phone }}" placeholder="¿Como es tu telefono?" />
                                                    @error('phone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    </div>

                                                    <div class="form-group-inner">
                                                        <label>Email</label>
                                                        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ Auth::user()->email }}" placeholder="¿Como es tu correo?" />
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">

                                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">

                                                                <label for="image_path" class="login2 pull-right pull-right-pro">Cambia tu imagen de perfil</label>
                                                            </div>
                                                            @if (Auth::user()->image)
                                                                    <img width="10%" src="{{ route('user.avatar', ['filename'=>Auth::user()->image])}}">
                                                            @endif
                                                    </div>
                                                    <div class="form-group-inner">
                                                            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="file-upload-inner ts-forms">
                                                                    <div class="input append-small-btn">
                                                                        <div class="file-button">
                                                                                 <input id="image_path" name="image_path" type="file" class=" @error('image_path') is-invalid @enderror" onchange="document.getElementById('append-small-btn').value = this.value;">
                                                                            
                                                                            @error('image_path')
                                                                            <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}
                                                                            </strong>
                                                                            </span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                             
                                                        </div>
                                                    </div>
                                                    <div> 
                                                    &nbsp;
                                                    </div>
                                                   

                                                    <div class="login-btn-inner">
                                                        <div class="inline-remember-me">
                                                            
                                                            <center><button class="btn btn-sm btn-primary  login-submit-cs" type="submit">Guardar cambios</button></center>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="basic-login-inner">
                                                <h3>Te gusta de una?</h3>
                                                <p>Recomiendanos con tus amigos y vivamos la experiencia juntos.</p>
                                                <div class="create-account-sign">
                                                    <a href="https://api.whatsapp.com/send?text=https://deunareservas.com/public/" data-action="share/whatsapp/share"><img src="img/friends.png"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
@endsection