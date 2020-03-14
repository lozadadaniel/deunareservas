@php
    $cartCollection = Cart::getContent();
@endphp
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-145000454-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-145000454-1');
</script>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name=”distribution” content=”global”/>
    <meta http-equiv="Content-Language" content="es"/>

    <meta name="description" content="Somos una empresa inspirada por esas familias, parejas y amigos, que con el dia a dia y sus obligaciones olvidan lo importante que es compartir. DE UNA se enfoca en despertar nuevamente esos lazos de union, amor y buenas relaciones. Inspirando por medio de nuestra marca y nuestros servicios, esa semilla de unidad y armonia para con los demas sin importar en donde se encuentren. De santander - Colombia" />
    <meta name="keywords"content="de una reservas,donde reservar,reservas,deunareservas,bucaramanga,reservar,donde,fácil,rápido,facil,rapido,ahora,canchassinteticas,cancha,futbol,restaurante,restaurantes,comida,comida rapida,reserva ahora,donde,que hacer,colombia,rappi,comida china,comida arabe,jugar,barberia,barberias,bucaramanga,cucuta,medellin,bogotá,bogota">
    
    <meta property="og:locale" content="es_CO">
    <meta property="og:locale:alternate" content="es_ES">
    <meta property="og:locale:alternate" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="De una reservas - Reserva restaurantes, canchas, eventos, entretenimiento y más.">
    <meta property="og:description" content="Encuentra los mejores planes reserva restaurantes, canchas, eventos, entretenimiento y más en tu ciudad.">
    <meta property="og:url" content="/">
    <meta property="og:site_name" content="De una reservas">
    <meta property="article:publisher" content="https://www.facebook.com/De-una-reservas-110473643639462/">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>De una reservas - Reserva restaurantes, canchas, eventos, entretenimiento y más.</title>

    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- educate icon CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/educate-custon-icon.css') }}">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/morrisjs/morris.css') }}">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- Carrusel CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('vendors/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/OwlCarousel2-2.2.1/animate.css') }}">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/metisMenu/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/metisMenu/metisMenu-vertical.css') }}">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/calendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/calendar/fullcalendar.print.min.css') }}">
    <!-- datapicker CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/datapicker/datepicker3.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.min.css') }}">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Preloader CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/preloader/preloader-style.css') }}">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('styles/main_styles.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/responsive.css') }}">

    

    <!-- jquery
        ============================================ -->
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>


    <!-- modernizr JS
        ============================================ -->
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
    
    <script src="{{ asset('js/gmaps.js') }}"></script>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCK8-KPBJteTR7Obq3xheZ1cKXZo-dtF-M&sensor=TRUE"></script>

    <style type="text/css">
    #map {
      width: 100%;
      height:500px;
    }
  </style>
</head>

<body>

                                
   
    
       <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="{{ route('index') }}"><img class="main-logo" src="{{ asset('img/logo/logo.png') }}" alt="" /></a>
                <strong><a href="#"><img src="{{ asset('img/logo/logosn.png') }}" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li> 
                            <a title="Landing Page" href="{{ route('index') }}" aria-expanded="false"><span class="educate-icon educate-star icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Explorar</span></a>
                        </li>
                        <li >
                            <a class="has-arrow" href="#">
                                   <span class="educate-icon educate-department icon-wrap"></span>
                                   <span class="mini-click-non">Categorias</span>
                                </a>
                            <ul class="submenu-angle" aria-expanded="true">
                                 
                                <li><a title="Dashboard v.1" href="{{ route('index')}}/categoria/restaurantes"><span class="mini-sub-pro">Restaurantes</span></a></li>
                                <li><a title="Dashboard v.1" href="{{ route('index')}}/categoria/canchas-sinteticas"><span class="mini-sub-pro">Canchas Sintéticas</span></a></li>
                                <li><a title="Dashboard v.1" href="{{ route('index')}}/categoria/salones-de-belleza"><span class="mini-sub-pro">Salones de Belleza</span></a></li>
                                <li><a title="Dashboard v.1" href="{{ route('index')}}/categoria/servicios"><span class="mini-sub-pro">Servicios</span></a></li>
                                <li><a title="Dashboard v.1" href="{{ route('index')}}/categoria/eventos"><span class="mini-sub-pro">Eventos</span></a></li>
                                 
                                
                            </ul>
                        </li>
                        <!--<li>
                            <a title="Landing Page" href="#" aria-expanded="false"><span class="educate-icon educate-checked icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Promociones</span></a>
                        </li> -->
                        <li>
                            <a title="Landing Page" href="{{ route('nosotros') }}" aria-expanded="false"><span class="educate-icon educate-info icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Sobre Nosotros</span></a>
                        </li>
                        <li>
                            <a title="Landing Page" href="https://aliados.deunareservas.com/" aria-expanded="false"><span class="educate-icon educate-info icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Quiero aliarme</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="{{ route('index') }}"><img class="main-logo" src="{{ asset('img/logo/logo.png') }}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                    <i class="educate-icon educate-nav"></i>
                                                </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                 <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                            <span class="admin-name">{{$cartCollection->count()}}</span>
                                                           
                                                    </a>
                                                    >
                                                </li>
                                                @guest
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                            <img src="{{ asset('img/product/account.png') }}" alt="" />
                                                            <span class="admin-name">Cuenta</span>
                                                            <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                    </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="{{ route('login') }}"><span class="edu-icon edu-user-rounded author-log-ic"></span>Iniciar sesión</a>
                                                        </li>
                                                        @if (Route::has('register'))
                                                        <li><a href="{{ route('register') }}"><span class="edu-icon edu-locked author-log-ic"></span>Registrarte</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                               

                                                @endif
                                                @else
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                        @if (Auth::user()->image)
                                                                    <img width="20%" src="{{ route('user.avatar', ['filename'=>Auth::user()->image])}}">
                                                        @endif
                                                            <span class="admin-name">{{ Auth::user()->name }}</span>
                                                            <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                    </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="{{ route('profile', ['id'=>Auth::user()->id]) }}"><span class="edu-icon edu-user-rounded author-log-ic"></span>Mi perfil</a>
                                                        </li>
                                                        <li><a href="{{ route('config') }}"><span class="edu-icon edu-user-rounded author-log-ic"></span>Configuración</a>
                                                        </li>
                                                        <li>
                                                            <a class="edu-icon edu-locked author-log-ic" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Cerrar sesión') }}
                                                            </a>
                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                    @csrf
                                                            </form> 
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!--<li class="nav-item dropdown">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-message edu-chat-pro" aria-hidden="true"></i><span class="indicator-ms"></span></a>
                                                    <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                        <div class="message-single-top">
                                                            <h1>Message</h1>
                                                        </div>
                                                        <ul class="message-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/contact/1.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="message-view">
                                                            <a href="#">View All Messages</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notifications</h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="educate-icon educate-checked edu-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="notification-view">
                                                            <a href="#">View All Notification</a>
                                                        </div>
                                                    </div>
                                                </li> -->
                                                @endguest
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Categorias<span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            
                                            <ul class="collapse dropdown-header-top">
                                                <li><a title="Dashboard v.1" href="{{ route('index')}}/categoria/restaurantes"><span class="mini-sub-pro">Restaurantes</span></a></li>
                                <li><a title="Dashboard v.1" href="{{ route('index')}}/categoria/canchas-sinteticas"><span class="mini-sub-pro">Canchas Sintéticas</span></a></li>
                                <li><a title="Dashboard v.1" href="{{ route('index')}}/categoria/salones-de-belleza"><span class="mini-sub-pro">Salones de Belleza</span></a></li>
                                <li><a title="Dashboard v.1" href="{{ route('index')}}/categoria/servicios"><span class="mini-sub-pro">Servicios</span></a></li>
                                <li><a title="Dashboard v.1" href="{{ route('index')}}/categoria/eventos"><span class="mini-sub-pro">Eventos</span></a></li>
                                           </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="all-content-wrapper">
        <main class="py-4">
            @yield('content')
        </main>
    </div>


    <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2019. All rights reserved. NWE S.A.S.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- bootstrap JS
        ============================================ -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- wow JS
        ============================================ -->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="{{ asset('js/jquery-price-slider.js') }}"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="{{ asset('js/jquery.meanmenu.js') }}"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <!-- likes
        ============================================ -->
    <script src="{{ asset('js/inicio.js') }}"></script>
    <!-- datapicker JS
        ============================================ -->
    <script src="{{ asset('js/datapicker/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('js/datapicker/datepicker-active.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
    <script type="text/javascript">
  $(function() {
    $('#datetimepicker3').datetimepicker({
      pickDate: false,
      format: 'DD MMM YYYY hh:mm A'
    });
  });

    
</script>

    
    
    <!-- scrollUp JS
        ============================================ -->
    <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="{{ asset('js/counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/counterup/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/counterup/counterup-active.js') }}"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="{{ asset('js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/scrollbar/mCustomScrollbar-active.js') }}"></script>
    <!-- Carrusel JS
        ============================================ -->
     <script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('vendors/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
    margin:10,
    loop:true,
    autoWidth:true,
    items:4
})
    </script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="{{ asset('js/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('js/metisMenu/metisMenu-active.js') }}"></script>
    
    <!-- morrisjs JS
        ============================================ -->
    <script src="{{ asset('js/morrisjs/raphael-min.js') }}"></script>
    <script src="{{ asset('js/morrisjs/morris.js') }}"></script>
    <script src="{{ asset('js/morrisjs/morris-active.js') }}"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="{{ asset('js/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('js/sparkline/jquery.charts-sparkline.js') }}"></script>
    <script src="{{ asset('js/sparkline/sparkline-active.js') }}"></script>
    <!-- calendar JS
        ============================================ -->
    <script src="{{ asset('js/calendar/moment.min.js') }}"></script>
    <script src="{{ asset('js/calendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('js/calendar/fullcalendar-active.js') }}"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="{{ asset('js/plugins.js') }}"></script>

    <!-- main JS
        ============================================ -->
    <script src="{{ asset('js/main.js') }}"></script>

    <script type="text/javascript">
   $("#btnReservar").click(function()
    {
       
        if($('.chk_producto').is(':checked'))
        {
            $('#add_cart').submit();
        }
        else
        {
            alert("Selecciona un Producto o Servicio");
        }
    });

    $('.chk_producto').click(function()
    {
        let idCantidad = $(this).val();
        if($(this).is(':checked'))
        {
            $('#'+idCantidad).val('1');
            $('#'+idCantidad).removeAttr( "disabled" );
        }
        else
        {
            $('#'+idCantidad).val('');
            $('#'+idCantidad).attr( "disabled",true );
        }
        
    });

    // $(elemento).val()
    </script>
    
    <script src="//code.tidio.co/wk8o077g0bdi4pi0bthrd4bppyfpxzbn.js"></script>

</body>
</html>
