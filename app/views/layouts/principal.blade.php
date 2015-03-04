<!DOCTYPE html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="Panaderia el triunfo.">
        <meta name="keywords" content="panaderias, panes, triunfo, acambaro, guanajuato">
        <meta name="author" content="Incubamas">
        <!-- GOOGLE FONT -->
        <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Quattrocento+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <!-- CSS LIBRARY -->
        {{ HTML::style('/css/lib/bootstrap.min.css') }}
        {{ HTML::style('/css/lib/owl.carousel.css') }}
        {{ HTML::style('/css/lib/font-awesome.min.css') }}
        <!-- AWE FONT -->
        {{ HTML::style('/css/awe-fonts.css') }}
        <!-- PAGE STYLE -->
        {{ HTML::style('/css/style.css') }}
        <!--[if lt IE 9]>
        {{ HTML::script('http://html5shim.googlecode.com/svn/trunk/html5.js') }}
        {{ HTML::script('http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js') }}
        <![endif]-->
        <link rel="shortcut icon" href="{{ asset('images/logoB.png') }}">
        <title>
            @section('titulo')
                El triunfo
            @show
        </title>
    </head>

    <body class="home">
        <div id="page-wrap">
            <header id="header" class="header header-1">
                <div class="container">
                    <div class="logo">
                        <a href="{{url('/')}}">
                            {{ HTML::image('images/logoB.png', 'Logo',['style'=>"height:90px"]) }}
                        </a>
                    </div>
                    <nav class="navigation text-right" data-menu-type="1200">
                        <ul class="nav text-uppercase">
                            <li>{{ HTML::link('/', 'Inicio')}}</li>
                            <li>{{ HTML::link('nosotros', 'Nosotros')}}</li>
                            <li>{{ HTML::link('productos', 'Productos')}}</li>
                            <li>{{ HTML::link('contacto', 'Contactanos')}}</li>
                        </ul>
                        <div class="head-social">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </div>
                    </nav>
                </div>
            </header>
            @section('contenido')
            @show
            <footer id="footer" class="footer">
                <div class="divider divider-1 divider-color"></div>
                <div class="awe-color"></div>
                <div class="container">
                    <div class="copyright text-center">
                        {{ HTML::link('sistema', '© El triunfo',['style'=>"color: #020202;", 'target'=>"_blank"])}}
                    </div>
                </div>
            </footer>
        </div>
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