@extends('layouts.app')

@section('content')

 <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <div class="row">
                                <div class="col-md-2">
                                    <img width="100%" alt="logo" class="img-circle m-b"src="images/product_1.png">
                                </div>
                                <div class="col-md-10">
                                    <h4>{{$datos_reserva[0]['name']}}</h4>
                                    <div>
                                        <p style="display: inline; margin-right: 12px;">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                            {!!\Carbon\Carbon::parse($datos_reserva[0]['fecha'])->format('d-m-Y')!!}
                                        </p>
                                        <p style="display: inline; margin-right: 12px;">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            {{$datos_reserva[0]['hora']}}
                                        </p>
                                        <p style="display: inline; margin-right: 12px;">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            Personas: {{$datos_reserva[0]['num_personas']}}
                                        </p>
                                        <p style="display: inline; margin-right: 12px;">
                                            <i class="fa fa-coffee" aria-hidden="true"></i>
                                            Motivo: {{$datos_reserva[0]['motivo_reserva']}}
                                        </p>

                                    </div>
                                </div>
                            </div>

                            <div class="asset-inner">
                                <table>
                                    <tr>
                                        <th>Image</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                        <th>Cantidad</th>
                                        <th>Total</th>
                                    </tr>
                                    @foreach ($itemsCart as $itemCart)
                                    <tr>
                                        <td><img src="{{ asset('img/$itemCart["imagen"]')}}" alt="" /></td>
                                        <td>{{$itemCart['name']}}</td>
                                        <td>
                                            {{$itemCart['price']}}
                                        </td>
                                        <td>{{$itemCart['quantity']}}</td>
                                        <td>
                                            @php
                                                $total = $itemCart['price'] * $itemCart['quantity'];
                                                echo $total;
                                            @endphp
                                        </td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="5" style="text-align:right; " style="background-color: red;">
                                            <h4>Total a pagar: ${{$total_reserva}}</h4>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12" style="background-color: #f9f9f9; padding: 10px;">
                        <div class="row">
                            <form action="{{ route('guardar-reserva') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-select-list basic-ele-mg-t-10">
                                        <input type="text" name="name" class="form-control" placeholder="Nombre" required>
                                        
                                    </div>
                                </div>
                               
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-select-list basic-ele-mg-t-10">
                                        <input type="text" name="correo" class="form-control" placeholder="Correo" required>
                                        
                                    </div>
                                </div>
                              
                                
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top: 20px;">
                                    <div class="form-select-list basic-ele-mg-t-10">
                                        <input type="text" name="phone" class="form-control" placeholder="Telefono" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top: 20px;">
                                    <div class="form-select-list basic-ele-mg-t-10">
                                        <strong>Nota: </strong>Se notificará el estado de las reservas por medio del correo electronico.
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 20px;">
                                    <div class="form-select-list basic-ele-mg-t-10">
                                        <textarea name="notas" rows="5" class="form-control" placeholder="Nota adicional" ></textarea>
                                    </div>
                                </div>
                                
                                @if ($datos_reserva[0]['id'] == "10")
                                <input type="hidden" name="user_id" value="{{$datos_reserva[0]['name']}}">
                                <input type="hidden" name="estado_id" value="1">
                                <input type="hidden" name="company_id" value="{{$datos_reserva[0]['id']}}">
                                <input type="hidden" name="monto_reserva" value="{{$total_reserva}}">
                                <input type="hidden" name="motivo" value="{{$datos_reserva[0]['motivo_reserva']}}">
                                <input type="hidden" name="num_personas" value="{{$datos_reserva[0]['num_personas']}}">
                                <input type="hidden" name="user_id" value="{{auth()->id()}}">
                                @else
                                <input type="hidden" name="user_id" value="{{$datos_reserva[0]['name']}}">
                                <input type="hidden" name="estado_id" value="1">
                                <input type="hidden" name="company_id" value="{{$datos_reserva[0]['id']}}">
                                <input type="hidden" name="monto_reserva" value="{{$total_reserva}}">
                                <input type="hidden" name="motivo" value="{{$datos_reserva[0]['motivo_reserva']}}">
                                <input type="hidden" name="num_personas" value="{{$datos_reserva[0]['num_personas']}}">
                                <input type="hidden" name="user_id" value="{{auth()->id()}}">
                                <input type="hidden" name="dia" value="{!!\Carbon\Carbon::parse($datos_reserva[0]['fecha'])->format('Y-m-d')!!}">
                                <input type="hidden" name="hora_inicio" value="{{$datos_reserva[0]['hora']}}">
                                <input type="hidden" name="hora_fin" value="{{$datos_reserva[0]['hora']}}">
                                @endif
                                
                                <br>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 20px;">
                                <div class="input-group custom-go-button">
                                <span class="input-group-btn">
                                <input class="btn btn-primary" type="submit" value="Reservar" name=""></span>
                                </div>
                            </div>



                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection