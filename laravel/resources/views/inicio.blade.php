
@extends('layouts.app')

@section('content')
<div id="app">
  <img width="100%" height="auto" src="{{ asset('images/baner.png')}}">

 @if (session('message'))
                                                    <div class="alert alert-success">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        <strong>Bien hecho! </strong>{{ session('message') }}
                                                    </div>
                                                    @endif

<div class="new_arrivals">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <p><br> </p>
            <div class="owl-carousel owl-theme">
    <div class="item" style="width:280px"><img  alt="logo" src="{{ asset('images/item/ESCOGE.png')}}"></div>
    <div class="item" style="width:280px"><img  alt="logo" src="{{ asset('images/item/RESERVA.png')}}"></div>
    <div class="item" style="width:280px"><img  alt="logo" src="{{ asset('images/item/DISFRUTA.png')}}"></div>
    <div class="item" style="width:280px"><img  alt="logo" src="{{ asset('images/item/CALIFICA.png')}}"></div>
     
    </div>
            

          
        </div>
      </div>

      <div class="row">
        <div class="col text-center">
          <div class="section_title new_arrivals_title">
            <h2>Encuentra lo que buscas</h2>
            

          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
           
            
  

          

      </div>
      </div>
  </div>
</div> 
<p><br> </p>
<div class="owl-carousel owl-theme">
    <div class="item" style="width:200px"><a href="{{ route('index')}}/categoria/restaurantes"><img  alt="logo" src="{{ asset('categorias/restaurantes.png')}}"></a></div>
    <!--<div class="item" style="width:200px"><a href="{{ route('company.category',2)}}"><img  alt="logo" src="{{ asset('categorias/bares.png')}}"></a></div>-->
    <div class="item" style="width:200px"><a href="{{ route('index')}}/categoria/canchas-sinteticas"><img  alt="logo" src="{{ asset('categorias/canchas.png')}}"></a></div>
    <!--<div class="item" style="width:200px"><a href="{{ route('company.category',4)}}"><img  alt="logo" src="{{ asset('categorias/entrete.png')}}"></a></div>-->
    <!--<div class="item" style="width:200px"><a href="{{ route('company.category',5)}}"><img  alt="logo" src="{{ asset('categorias/barberias.png')}}"></a></div>-->
    <div class="item" style="width:200px"><a href="{{ route('index')}}/categoria/salones-de-belleza"><img  alt="logo" src="{{ asset('categorias/salon.png')}}"></a></div>
    <div class="item" style="width:200px"><a href="{{ route('index')}}/categoria/servicios"><img  alt="logo" src="{{ asset('categorias/servicios.png')}}"></a></div>
    <div class="item" style="width:200px"><a href="{{ route('index')}}/categoria/eventos"><img  alt="logo" src="{{ asset('categorias/eventos.png')}}"></a></div>
    </div>
<!-- Destacados -->
<div class="new_arrivals">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <div class="section_title new_arrivals_title">
            <h2>Destacados</h2>
            
          </div>
        </div>
      </div>

      
            
      
        
           
          <div class="owl-carousel owl-theme">

            

           @foreach($destacados as $destacado)
<div class="item" style="width:300px">
              <div class="col-lg-6">
                        
                                
                                <a href="{{ route('company.profile',[$destacado->company_id])}}"><img width="30%" src="{{ route('company.avatar', ['filename'=>$destacado->companys->logo])}}"></a>
                                
             </div>
        </div>
        @endforeach

    
</div>

      
      
    
    
  </div>
</div>


<center>

 
</center>
@endsection
