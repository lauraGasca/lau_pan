<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">

    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Quattrocento+Sans:400,400italic,700,700italic' rel='stylesheet'
          type='text/css'>

    <!-- CSS LIBRARY -->
    {{ HTML::style('/css/lib/bootstrap.min.css') }}
    {{ HTML::style('/css/lib/owl.carousel.css') }}
    {{ HTML::style('/css/lib/font-awesome.min.css') }}

    <!-- AWE FONT -->
    {{ HTML::style('/css/awe-fonts.css') }}

    <!-- PAGE STYLE -->
    {{ HTML::style('/css/style.css') }}
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">


    <title>
        @section('titulo')
            El triunfo
        @show
    </title>

</head>
<body class="home">


<!-- PAGE WRAP -->
<div id="page-wrap">

    <!-- HEADER -->
    <header id="header" class="header header-1">
        <div class="container">
            <!-- LOGO -->
            <div class="logo"><a href="{{url('/')}}">{{ HTML::image('images/logo.png', 'Logo') }}</div>
            <!-- END / LOGO -->

            <!-- OPEN MENU MOBILE -->
            <div class="open-menu-mobile">
                <span>Toggle menu mobile</span>
            </div>
            <!-- END / OPEN MENU MOBILE -->

            <!-- NAVIGATION -->
            <nav class="navigation text-right" data-menu-type="1200">
                <!-- NAV -->
                <ul class="nav text-uppercase">
                    <li><a href="{{url('/')}}">Inicio</a></li>
                    <li><a href="{{url('/nosotros')}}">Nosotros</a></li>
                    <li><a href="{{url('/productos')}}">Productos</a></li>
                    <!--<li><a href="{{url('/eventos')}}">Sucursales</a></li>-->
                    <li><a href="{{url('/contacto')}}">Contactanos</a></li>
                </ul>
                <!-- END / NAV -->

                <!-- SOCIAL -->
                <div class="head-social">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                </div>
                <!-- END / SOCIAL -->
            </nav>
            <!-- END / NAVIGATION -->
        </div>

    </header>
    <!-- END / HEADER -->

    @section('contenido')
        @show


                <!-- FOOTER -->
        <footer id="footer" class="footer">
            <div class="divider divider-1 divider-color"></div>
            <div class="awe-color"></div>
            <div class="container">
                <div class="copyright text-center">
                    © El triunfo
                </div>
            </div>
        </footer>
        <!-- END / FOOTER -->


</div>
<!-- END / PAGE WRAP -->

<!-- LOAD JQUERY -->
{{ HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js') }}

<!-- GOOGLE MAP -->
{{ HTML::script('http://maps.google.com/maps/api/js?sensor=false') }}
{{ HTML::script('/js/lib/bootstrap.min.js') }}
{{ HTML::script('/js/lib/jquery.bxslider.min.js') }}
{{ HTML::script('/js/lib/jquery.easing.min.js') }}
{{ HTML::script('/js/lib/jquery.owl.carousel.min.js') }}
{{ HTML::script('/js/lib/masonry.pkgd.min.js') }}
{{ HTML::script('/js/lib/perfect-scrollbar.min.js') }}
{{ HTML::script('/js/lib/jquery.magnific-popup.min.js') }}
{{ HTML::script('/js/lib/jquery.parallax-1.1.3.js') }}
{{ HTML::script('/js/lib/retina.min.js') }}
{{ HTML::script('/js/lib/jquery.form.min.js') }}
{{ HTML::script('/js/lib/jquery.validate.min.js') }}
{{ HTML::script('/js/scripts.js') }}
</body>
</html>