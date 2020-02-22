<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">

<title>De una app</title>

</head>

<body style="margin:0;padding:0;">

<table width="100%" align="center" bgcolor="#959595" cellpadding="0" cellspacing="0" style="text-align:center;font-family:Arial, Helvetica, sans-serif;color:#000000; font-size:12px;">
<tbody>
<tr>
<td>

	<table width="600" cellpadding="0" cellspacing="0" align="center" style="font-size:12px;">
	<tbody>
	<tr><td height="28" align="center" style="color:#FFFFFF;">&nbsp;&nbsp;Problemas para visualizar | <a href="https://appdeuna.com" style="color:#3CF; text-decoration:none;" target="_blank">Ver on-line</a></td>
    </tr>
	</tbody></table>

</td>
</tr>
<tr>
<td>
<table cellpadding="0" cellspacing="0" width="600" bgcolor="#FFFFFF" align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;">
<tr><td bgcolor="#fff800" height="75" align="center" style="color:#FFFFFF; text-align:center;"><a href="https://appdeuna.com" target="_blank" style="border:none;"><img src="{{ asset('email/images/logo.png') }}" border="0" /></a>
</td></tr>
<tr><td height="5" bgcolor="#000000"></td></tr>
<tr><td height="155" align="center" style="font-family:Arial, Helvetica, sans-serif; text-align:center;">







<p style="color:#000000; font-size:22px;">Hola! tienes una reserva programada en {{ $company->name }}</p>
<p style="color:#878787; font-size:16px;">Hola {{ $datos['name'] }}, Bienvenido(a) a nuestra familia.</p>
@if (isset ($datos['dia']) )
<p style="color:#878787; font-size:16px;"><strong>Fecha:</strong> {{  $datos['dia'] }}</p>
<p style="color:#878787; font-size:16px;"><strong>Hora:</strong> {{  $datos['hora_inicio'] }}</p>
@else 
<p style="color:#878787; font-size:16px;">Recuerde consultar la hora y ubicación en el flyer del evento</p>
@endif
<p style="color:#878787; font-size:16px;"><strong>Telefono:</strong> {{  $datos['phone'] }}</p>
<p style="color:#878787; font-size:16px;"><strong>Notas:</strong> {{  $datos['notas'] }}</p>

</td></tr>
<tr><div class="asset-inner">
                                <table cellpadding="0" cellspacing="0" width="500">
                                    <tr>
                                        
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                        <th>Cantidad</th>
                                        <th>Total</th>
                                    </tr>
                                    @foreach ($shopping_cart as $shopping_cart)
                                    <tr>
                                        
                                        <td>{{$shopping_cart['name']}}</td>
                                        <td>
                                            {{$shopping_cart['price']}}
                                        </td>
                                        <td>{{$shopping_cart['quantity']}}</td>
                                        <td>
                                            @php
                                                $total = $shopping_cart['price'] * $shopping_cart['quantity'];
                                                echo $total;
                                            @endphp
                                        </td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="5" style="text-align:right; " style="background-color: red;">
                                            <h4>Total a pagar: ${{ $datos['monto_reserva'] }}</h4>
                                        </td>
                                    </tr>
                                </table>
                            </div></tr>
<tr><td>
<table cellpadding="0" cellspacing="0" width="600">
<tr><td width="25"></td>
<td width="25"></td></tr>
</table>
</td></tr>
<tr><td height="30"></td></tr>
</table>
<table cellpadding="0" cellspacing="0" width="600" bgcolor="#eaeaea" align="center" style="font-family:Arial, Helvetica, sans-serif;">
<tr><td height="10"></td></tr>
<tr><td height="80" align="center" style="text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#878787;">&iquest;Quieres seguir descubriendo m&aacute;s ofertas y promociones?</td></tr>
<tr><td>
<table cellpadding="0" cellspacing="0" width="600" bgcolor="#eaeaea" align="center" style="font-family:Arial, Helvetica, sans-serif;">
<tr>
<td width="145"></td>
<td width="310" height="42" bgcolor="#fff800" align="center" style="background-color:#fff800; text-align:center; border-bottom:3px solid #000000;">
<a href="https://appdeuna.com" target="_blank" style="font-size:19px; color:#000000; text-decoration:none;">VISITA NUESTRO SITIO</a>
</td>
<td width="145"></td>
</tr>
</table>
</td></tr>
<tr><td height="50">&nbsp;</td></tr>
</table>
</td>
</tr>
<tr><td>
<table cellpadding="0" cellspacing="0" width="600" bgcolor="#676767" align="center">
<tr>
<td height="80" width="30"></td>
<td height="80" width="465" align="left" style="font-family:Arial, Helvetica, sans-serif; color:#FFFFFF; font-size:12px; text-align:left;">
<strong style="font-size:14px;">New World Economy S.A.S</strong><br />
Bucaramanga, Colombia<br />
</td>
<td width="30"><a href="https://www.facebook.com/deunapp" target="_blank" style="border:none;"><img src="{{ asset('email/images/facebook.gif') }}" border="0" /></a></td>
<td width="15"></td>
<td width="30"><a href="https://www.instagram.com/deunapp" target="_blank" style="border:none;"><img src="{{ asset('email/images/inst.jpg') }}" border="0" /></a></td>
<td height="80" width="30"></td>
</tr>
</table>
</td></tr>
</tbody>
</table>

</body>
</html>

