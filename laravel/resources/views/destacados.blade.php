



@extends('layouts.app')

@section('content')
<div id="app">
	<div class="site-main ">

	<div class="main_slider" style="background-image:url(images/slider_1.jpg)">
		<div class="container fill_height">
			<div class="row align-items-center fill_height">
				<div class="col">
					<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
						<h6>De una App</h6>
						<h1>Reservar un lugar nunca había sido tan fácil.</h1>
						<!--<div class="red_button shop_now_button"><a href="#">Saber más</a></div> -->
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>Encuentra lo que buscas</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					

						
						


						@foreach($companys as $company)
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
                            <div class="panel-footer contact-footer">
                                <div class="red_button "><a href="#" data-toggle="modal" data-target="#{{$company->id}}">Reservar</a></div>
                            </div>


                            <div width="100%" id="{{ $company->id }}" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                            <div  class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-close-area modal-close-df">
                                        <a class="align-items-center" data-dismiss="modal" href="#"> <i class="fa fa-close"></i> </a>
                                    </div>
                              <div class="modal-body">
                                     <div class="row">
                                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <center><img width="80%" alt="logo" class="img-circle m-b"src="{{ route('company.avatar', ['filename'=>$company->image])}}"><p>📍 {{ $company->address}}</br> <a href="{{ $company->maps}}" class="btn btn-custon-three btn-success">Como llegar</a></p></center>
                                     </div>
                                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <center><img width="40%" src="{{ route('company.avatar', ['filename'=>$company->logo])}}"><p>✅{{ $company->description }}</br>
                                        ⏳ {{ $company->abre }} - {{ $company->cierra }}</br>
                                             </p>
                                        	
                                          </center>
                                      </div>
                                    </div>
										                      @if ($company->tipop_id == '1')
                                          <h2>Menú</h2>
                                          @else
                                          <h2>Servicio</h2>
                                          @endif

                                     
                        @foreach($company->category_products as $category_product)
                       <div class="panel-group edu-custon-design" id="accordion">
                                <div class="panel ">
                                    <div class="panel-heading accordion-head">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#{{ $category_product->nick }}">
                   {{ $category_product->name }}</a>
                                        </h4>
                                    </div>
                                    <div id="{{ $category_product->nick}}" class="panel-collapse panel-ic collapse ">
                                        <div class="panel-body admin-panel-content ">
                                           <div class="static-table-list">
                                  @foreach($category_product->products as $product)
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td><img width="5%" src="{{ route('company.services', ['filename'=>$product->image_path])}}"> <strong>{{ $product->nombre}}</strong> - {{ $product->descripcion }}</td>

                                                <td><label class="checkbox-inline i-checks pull-left">
                                      <input type="checkbox" value="option1" id="inlineCheckbox1"></label></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                  @endforeach
                                </div>
                                        </div>
                                    </div>
                                </div>
                          </div>
                        @endforeach 
                      
                          
                             		<!-- @foreach($company->comments as $comment)
                             <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        	<div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#historial">Opiniones ({{ count($company->comments)}})</a></li>
                                <li><a href="#comentar">Opinar</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit st-prf-pro">
                                <div class="product-tab-list tab-pane fade active in" id="historial">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    
                               👤{{ $comment->content }}
                            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if (Auth::guest())
                                 <div class="product-tab-list tab-pane fade" id="comentar">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    
                               				Debes logearte para poder comentar
                            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="product-tab-list tab-pane fade" id="comentar">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    
                               		<form>
                               			@csrf
                               			<input type="hidden" name="company_id" value="{{ $company->id}}"/>
                               			<input width="100%" type="text" name="content" required> <button type="submit" class="btn btn-success">Comentar</button>
                               			

                               		</form> 
                            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif

                            </div>
                        </div>
						                </div>
                              	 @endforeach -->
                              	 <p>Oprime en DE UNA y llena tus datos de contacto para hacer efectiva la reserva</p>   
                                    </div>
                                  
                                    <div class="modal-footer product-status-wrap">
                                    	@if (Auth::guest())
                                        Debes logearte para poder reservar en este lugar 
                                        <a href="{{ route('login')}}" class="btn btn-custon-three btn-success">De una</a>

										@else
										<button data-dismiss="modal" class="btn btn-custon-rounded-four btn-danger">Cancelar</button>
									     <a href="#" class="btn btn-custon-three btn-success">De una</a>
									@endif
                                        
                                        

                                    </div>
                                </div>
                            </div>
						</div>
                        </div>
                    </div>
                    @endforeach

			</div>
			</div>
	</div>
</div>
<center>

  
    


<div class="benefit">
		<div class="container">
			<div class="row benefit_row">
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-hand-pointer-o" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>Escoge</h6>
							<p>Navega en nuestra amplia oferta</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-calendar-check-o" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>Reserva</h6>
							<p>Aparta tu lugar y ahorra tiempo</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-smile-o" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>Disfruta</h6>
							<p>Vive la experiencia</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-check" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>Califica</h6>
							<p>¿Que te pareció?</p>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
</center>
@endsection
