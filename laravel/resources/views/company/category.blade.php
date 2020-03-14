 @extends('layouts.app')

@section('content')

	<h1>{{ $category->name}}</h1>
	<hr>
    <div class="form-group-inner">
    <div class="row">
        
        
                        <div class="container">
                <div class="button-drop-style-one btn-warning-bg">
                                            <a href="{{ route('company.maps')}}" class="btn btn-custon-four btn-warning warning-btn-cl">Ver en mapa</a>
                                            <button class="btn-button-ct btn-button-warning-ct"><i class="fa fa-map-marker"></i>
                                                </button>
                                        </div>
                                    </div>

    </div>
</div>

<div class="row">
				<div class="col"> 
@foreach($category->companys as $company)

                        @if (isset($idCity))
                            @if ($idCity==$company->city_id)
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel hblue contact-panel contact-panel-cs responsive-mg-b-30">
                            <div class="panel-body custom-panel-jw">
                              @if (Auth::guest())

                              @else
                                <div class="social-media-in">
                                    <!-- Comprobar si el usuario le dio like -->
                                    <?php $user_like = false; ?>
                                    @foreach($company->likes as $like)
                                      @if($like->user->id == Auth::user()->id)
                                        <?php $user_like = true; ?>
                                      @endif
                                    @endforeach

                                    @if($user_like)
                                    <a><img width="70%" data-id="{{ $company->id}}" src="{{ asset('img/rojo.png')}}" class="btn-like" /></a>
                                    @else
                                    <a><img width="70%" data-id="{{ $company->id}}" src="{{ asset('img/sinrojo.png')}}" class="btn-dislike" /></a>
                                    @endif
                                </div>

                              @endif
                                <img width="50%" alt="logo" class="img-circle m-b" src="{{ route('company.avatar', ['filename'=>$company->image])}}">
                                <img width="30%" src="{{ route('company.avatar', ['filename'=>$company->logo])}}">
                                <h3><a href="">{{ $company->name }}</a></h3>
                                <p class="all-pro-ad">{{ $company->city->name }}</p>
                                <p>
                                    {{ $company->description }}
                                </p>
                            </div>
                            @php
        $nombre = str_replace(" ", "_", $company->nick);
@endphp
                             @if ($company->category_id == '1')
                            <div class="red_button "><a href="{{ route('company.restaurantes',[$nombre])}}" data-toggle="modal" >Reservar</a></div>
                        @elseif($company->category_id == '3')
                            <div class="red_button "><a href="{{ route('company.canchas',[$nombre])}}" data-toggle="modal" >Reservar</a></div>
                        @elseif($company->category_id == '6')
                            <div class="red_button "><a href="{{ route('company.salones',[$nombre])}}" data-toggle="modal" >Reservar</a></div>
                        @elseif($company->category_id == '7')
                            <div class="red_button "><a href="{{ route('company.servicios',[$nombre])}}" data-toggle="modal" >Reservar</a></div>
                        @elseif($company->category_id == '8')
                            <div class="red_button "><a href="{{ route('company.eventos',[$nombre])}}" data-toggle="modal" >Reservar</a></div>
                        @else

                        @endif


                            
                        </div>
                    </div>
                        @endif
                    @else

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel hblue contact-panel contact-panel-cs responsive-mg-b-30">
                            <div class="panel-body custom-panel-jw">
                              @if (Auth::guest())

                              @else
                                <div class="social-media-in">
                                    <!-- Comprobar si el usuario le dio like -->
                                    <?php $user_like = false; ?>
                                    @foreach($company->likes as $like)
                                      @if($like->user->id == Auth::user()->id)
                                        <?php $user_like = true; ?>
                                      @endif
                                    @endforeach

                                    @if($user_like)
                                    <a><img width="70%" data-id="{{ $company->id}}" src="{{ asset('img/rojo.png')}}" class="btn-like" /></a>
                                    @else
                                    <a><img width="70%" data-id="{{ $company->id}}" src="{{ asset('img/sinrojo.png')}}" class="btn-dislike" /></a>
                                    @endif
                                </div>

                              @endif
                                <img width="50%" alt="logo" class="img-circle m-b" src="{{ route('company.avatar', ['filename'=>$company->image])}}">
                                <img width="30%" src="{{ route('company.avatar', ['filename'=>$company->logo])}}">
                                <h3><a href="">{{ $company->name }}</a></h3>
                                <p class="all-pro-ad">{{ $company->city->name }}</p>
                                <p>
                                    {{ $company->description }}
                                </p>
                            </div>
                            @php
        $nombre = str_replace(" ", "_", $company->nick);
@endphp
                         @if ($company->category_id == '1')
                            <div class="red_button "><a href="{{ route('company.restaurantes',[$nombre])}}" data-toggle="modal" >Reservar</a></div>
                        @elseif($company->category_id == '3')
                            <div class="red_button "><a href="{{ route('company.canchas',[$nombre])}}" data-toggle="modal" >Reservar</a></div>
                        @elseif($company->category_id == '6')
                            <div class="red_button "><a href="{{ route('company.salones',[$nombre])}}" data-toggle="modal" >Reservar</a></div>
                        @elseif($company->category_id == '7')
                            <div class="red_button "><a href="{{ route('company.servicios',[$nombre])}}" data-toggle="modal" >Reservar</a></div>
                        @elseif($company->category_id == '8')
                            <div class="red_button "><a href="{{ route('company.eventos',[$nombre])}}" data-toggle="modal" >Reservar</a></div>
                        @else

                        @endif


                            
                        </div>
                    </div>
                        @endif
@endforeach

</div>
</div>

@endsection