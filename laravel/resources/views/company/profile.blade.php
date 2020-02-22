@extends('layouts.appcompany')

@section('content')

<div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="profile-info-inner">
                            <div class="profile-img">
                                <img width="80%" alt="logo" class="img-circle m-b"src="{{ route('company.avatar', ['filename'=>$company->image])}}">
                            </div>
                            <div class="profile-details-hr">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr">
                                            <p><b>{{ $company->name}}</b></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                            <p><b>{{ $company->address}}</b><br/><a href="{{ $company->maps}}" class="btn btn-custon-three btn-success">📍</a> </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="address-hr">
                                            <img width="30%" src="{{ route('company.avatar', ['filename'=>$company->logo])}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-12">
                            <div class="col-12">
                              @if(Session::get('message'))
                                <div class="alert alert-danger">
                                  {{ Session::get('message')  }}
                                </div>
                              @endif
                            </div>
                          </div>
                     <form action="{{ route('insert-shopping-cart') }}" method="POST" id="add_cart">
                         {{ csrf_field() }}
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        @if ($company->tipop_id == '1')
                                          <h2>Menú</h2>
                                          @else
                                          <h2>Servicio</h2>
                                          @endif
                                          
                                            @foreach($company->category_products as $category_product)
                       <div class="panel-group edu-custon-design" id="accordion">
                                <div class="panel ">
                                    <div class="panel-heading accordion-head">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#{{ $category_product->nick }}">
                                        <h4 class="panel-title">
                                            
                   {{ $category_product->name }}
                                        </h4></a>
                                    </div>
                                    <div id="{{ $category_product->nick}}" class="panel-collapse panel-ic collapse ">
                                        <div class="panel-body admin-panel-content ">
                                           <div class="static-table-list">
                                   
                                  @foreach($category_product->products as $product)
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td style="width: 800px;"><strong>{{ $product->nombre}}</strong> - {{ $product->descripcion }}</td>
                                                <td><strong>${{ $product->price }}</strong></td>

                                                <td>
                                                    
                                                       
                                                        <label>
                                                            <input type="checkbox" value="{{$product->id}}" class="chk_producto"  name="productos[]" required>
                                                        </label>
                                                </td>
                                                <td>

                                                    @if($product->con_cantidad)
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <label>cantidad</label>
                                                            <input name="cantidad[]" id="{{$product->id}}" style="width: 67px;" type="number" class="form-control" disabled />
                                                        </div>
                                                    @else
                                                        <input type="hidden" name="cantidad[]" value="1">
                                                    @endif

                                                    
                                                </td>
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
                        
                            @if ($company->con_motivo)
                                <div class="chosen-select-single mg-b-20">
                                    <label class="pull-right-pro">Motivo de tu reserva:</label>
                                    <select name="motivo_reserva" data-placeholder="Choose a Country..." class="chosen-select" tabindex="-1">
                                        <option value="">Selecciona</option>
                                        <option value="Cumpleaños">Cumpleaños</option>
                                        <option value="Aniversario">Aniversario</option>
                                        <option value="Familia">Familia</option>
                                        <option value="Amigos">Amigos</option>
                                        <option value="Cita">Cita</option>
                                        <option value="otra">otra...</option>
                                    </select>
                                </div>
                            @endif

                            @if ($company->con_num_personas)
                                <div class="chosen-select-single mg-b-20">
                                    <label class="pull-right-pro">¿Cuantas personas?</label>
                                    <select name="num_personas" data-placeholder="Choose a Country..." class="chosen-select" tabindex="-1">
                                        <option value="">Selecciona</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">mas...</option>
                                    </select>
                                </div>
                            @endif
                            
                            @if ($company->category_id == "8")
                            
                            <p> Recuerda llegar 10 Mn antes de dar inicio al evento</p>
                            
                            @else
                            
                                     <div class="form-group data-custon-pick" id="data_1">
                                        <label>¿Cuando vendrás?</label>
                                        <div class="input-group date">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input type="text" class="form-control" value="" name="fecha">
                                        </div>
                                    </div>
                                    <div class="form-group data-custon-pick" id="data_2">
                                        <label>¿A que horas vendrás?</label>
                                        <div id="datetimepicker3" class="input-group">
                                <span class="input-group-addon add-on">
                                  <i class="fa fa-clock-o"></i>
                                </span>
                                <input name="hora"  type="text" class="form-control" data-format="hh:mm:ss" type="text" value="18:00:00">
                            </div>
                            </div>
                            @endif
                            @if ($company->con_decoracion)
                               <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                            <label class="pull-right-pro">¿Necesitas decoración?</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                            <div class="bt-df-checkbox">
                                                <input name="decoracion" class="pull-left" type="checkbox"> Sí
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            
                                                       <!-- @if (Auth::guest())
                                        Debes ingresar para poder reservar en este lugar 
                                        <a href="{{ route('login')}}" class="btn btn-custon-three btn-warning">De una</a>

                                        @else
                                         @if ($company->con_decoracion)
                                          <p>Recuerda que si requieres decoración para tu reserva podría tener costos adicionales  
                                         @endif
                                        <input type="hidden" name="idCompany" value="{{$company->id}}">
                                        <button class="btn btn-custon-three btn-success align-center" id="btnReservar">De una</button></p>
                                    @endif -->
                                    @if ($company->con_decoracion)
                                          <p>Recuerda que si requieres decoración para tu reserva podría tener costos adicionales  
                                         @endif
                                        <input type="hidden" name="idCompany" value="{{$company->id}}">
                                        <a class="btn btn-custon-three btn-success align-center" id="btnReservar">De una</a></p>
                            
                                            
                                         
                                                </div>
                                                </form>
                                                {{-- Fin Form --}}
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

