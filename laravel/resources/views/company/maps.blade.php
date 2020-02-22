@extends('layouts.app')

@section('content')

	<h1>Mapa</h1>
	<hr>
    

<div class="row">
				<div id="map"></div>


  <script>
    var map = new GMaps({
      el: '#map',
      lat: 7.132109,
      lng: -73.118130,
    });
  </script>
  
  @foreach($companys as $company)
  @if($company->category_id == 1)
  <script type="text/javascript">
        $ (map.addMarker({
          lat: '{{ $company->lat}}',
          lng: '{{ $company->lng}}',
          title: 'Lima',
          icon: "{{ asset('img/restaurante.png') }}",
          infoWindow: {
              content: '<p><strong>{{ $company->name}}</strong></p><br><center> <a href="{{ route("company.profile",[$company->name])}}"><img src="{{ asset("img/reserva.png") }}"></a></center>'
            }
        }));
    </script>
@elseif($company->category_id == 2)
<script type="text/javascript">
        $ (map.addMarker({
          lat: '{{ $company->lat}}',
          lng: '{{ $company->lng}}',
          title: 'Lima',
          icon: "{{ asset('img/bar.png') }}",
          infoWindow: {
              content: '<p><strong>{{ $company->name}}</strong></p><br><center> <a href="{{ route("company.profile",[$company->id])}}"><img src="{{ asset("img/reserva.png") }}"></a></center>'
            }
        }));
    </script>
@elseif($company->category_id == 3)
<script type="text/javascript">
        $ (map.addMarker({
          lat: '{{ $company->lat}}',
          lng: '{{ $company->lng}}',
          title: 'Lima',
          icon: "{{ asset('img/cancha.png') }}",
          infoWindow: {
              content: '<p><strong>{{ $company->name}}</strong></p><br><center> <a href="{{ route("company.profile",[$company->id])}}"><img src="{{ asset("img/reserva.png") }}"></a></center>'
            }
        }));
    </script>
@elseif($company->category_id == 4)
<script type="text/javascript">
        $ (map.addMarker({
          lat: '{{ $company->lat}}',
          lng: '{{ $company->lng}}',
          title: 'Lima',
          icon: "{{ asset('img/marcador.png') }}",
          infoWindow: {
              content: '<p><strong>{{ $company->name}}</strong></p><br><center> <a href="{{ route("company.profile",[$company->id])}}"><img src="{{ asset("img/reserva.png") }}"></a></center>'
            }
        }));
    </script>
@elseif($company->category_id == 5)
<script type="text/javascript">
        $ (map.addMarker({
          lat: '{{ $company->lat}}',
          lng: '{{ $company->lng}}',
          title: 'Lima',
          icon: "{{ asset('img/barber.png') }}",
          infoWindow: {
              content: '<p><strong>{{ $company->name}}</strong></p><br><center> <a href="{{ route("company.profile",[$company->id])}}"><img src="{{ asset("img/reserva.png") }}"></a></center>'
            }
        }));
    </script>
@elseif($company->category_id == 6)
<script type="text/javascript">
        $ (map.addMarker({
          lat: '{{ $company->lat}}',
          lng: '{{ $company->lng}}',
          title: 'Lima',
          icon: "{{ asset('img/salon.png') }}",
          infoWindow: {
              content: '<p><strong>{{ $company->name}}</strong></p><br><center> <a href="{{ route("company.profile",[$company->id])}}"><img src="{{ asset("img/reserva.png") }}"></a></center>'
            }
        }));
    </script>
@else
<script type="text/javascript">
        $ (map.addMarker({
          lat: '{{ $company->lat}}',
          lng: '{{ $company->lng}}',
          title: 'Lima',
          icon: "{{ asset('img/service.png') }}",
          infoWindow: {
              content: '<p><strong>{{ $company->name}}</strong></p><br><center> <a href="{{ route("company.profile",[$company->id])}}"><img src="{{ asset("img/reserva.png") }}"></a></center>'
            }
        }));
    </script>


  @endif
@endforeach
  

</div>

@endsection