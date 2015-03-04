<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Panel de panaderia el triunfo.">
        <meta name="keywords" content="panaderia, panes, triunfo">
        <meta name="author" content="Incubamas">
        <title>
            @section('titulo')
                El triunfo
            @show
        </title>
        <!-- BOOTSTRAP CSS (REQUIRED ALL PAGE)-->
        {{ HTML::style('/css-sentir/bootstrap.min.css') }}
        <!-- MAIN CSS (REQUIRED ALL PAGE)-->
        {{ HTML::style('/css-sentir/font-awesome.css') }}
        {{ HTML::style('/css-sentir/style.css') }}
        {{ HTML::style('/css-sentir/style-responsive.css') }}
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        {{ HTML::script('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}
        {{ HTML::script('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}
        <![endif]-->

        <link rel="shortcut icon" href="{{ asset('images/logoB.png') }}">
    </head>

    <body class="tooltips">
        <div class="wrapper">
            <div class="top-navbar">
                <div class="top-navbar-inner">
                    <div class="logo-brand">
                        <a href="{{url('inicio')}}">
                            {{ HTML::image('images/logoB.png', 'Logo', ['style'=>"height: 50px;"]) }}
                        </a>
                    </div>
                    <div class="top-nav-content">
                        <div class="btn-collapse-sidebar-left">
                            <i class="fa fa-bars icon-dinamic"></i>
                        </div>
                    </div>
                    <ul class="nav-user navbar-right">
                        <li class="dropdown">
                            <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
                                {{ HTML::image('images/logo.png', 'Logo', ['style'=>"height: 30px;"]) }}
                                <strong>Configuraci&oacute;n</strong>
                            </a>
                            <ul class="dropdown-menu square primary margin-list-rounded with-triangle">
                                <!--<li><a href="#fakelink">Cambiar Contrase&ntilde;a</a></li>
                                <li class="divider"></li>-->
                                <li>{{ HTML::link('sistema/logout', 'Cerrar sesi&oacute;n')}}</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sidebar-left sidebar-nicescroller">
                <ul class="sidebar-menu">
                    <li><a href="{{url('inicio')}}"><i class="fa fa-send icon-sidebar"></i>Suscripciones</a></li>
                    <li><a href="{{url('producto')}}"><i class="fa fa-cubes icon-sidebar"></i>Productos</a></li>
                </ul>
            </div>
            <div class="page-content">
                <div class="container-fluid">
                    @section('contenido')
                    @show
                </div>
            </div>
        </div>
        <!-- MAIN JAVASRCIPT (REQUIRED ALL PAGE)-->
        {{ HTML::script('/js-sentir/jquery.min.js') }}
        {{ HTML::script('/js-sentir/bootstrap.min.js') }}
        {{ HTML::script('/plugins/retina/retina.min.js') }}
        {{ HTML::script('/plugins/nicescroll/jquery.nicescroll.js') }}
        {{ HTML::script('/plugins/slimscroll/jquery.slimscroll.min.js') }}
        {{ HTML::script('/plugins/backstretch/jquery.backstretch.min.js') }}
        <!-- PLUGINS -->
        {{ HTML::script('/plugins/skycons/skycons.js') }}
        {{ HTML::script('/plugins/prettify/prettify.js') }}
        {{ HTML::script('/plugins/magnific-popup/jquery.magnific-popup.min.js') }}
        {{ HTML::script('/plugins/owl-carousel/owl.carousel.min.js') }}
        {{ HTML::script('/plugins/chosen/chosen.jquery.min.js') }}
        {{ HTML::script('/plugins/icheck/icheck.min.js') }}
        {{ HTML::script('/plugins/datepicker/bootstrap-datepicker.js') }}
        {{ HTML::script('/plugins/timepicker/bootstrap-timepicker.js') }}
        {{ HTML::script('/plugins/mask/jquery.mask.min.js') }}
        {{ HTML::script('/plugins/validator/bootstrapValidator.min.js') }}
        {{ HTML::script('/plugins/datatable/js/jquery.dataTables.min.js') }}
        {{ HTML::script('/plugins/datatable/js/bootstrap.datatable.js') }}
        {{ HTML::script('/plugins/summernote/summernote.min.js') }}
        {{ HTML::script('/plugins/markdown/markdown.js') }}
        {{ HTML::script('/plugins/markdown/to-markdown.js') }}
        {{ HTML::script('/plugins/markdown/bootstrap-markdown.js') }}
        {{ HTML::script('/plugins/slider/bootstrap-slider.js') }}
        <!-- EASY PIE CHART JS -->
        {{ HTML::script('/plugins/easypie-chart/easypiechart.min.js') }}
        {{ HTML::script('/plugins/easypie-chart/jquery.easypiechart.min.js') }}
        <!-- KNOB JS -->
        <!--[if IE]>
        {{ HTML::script('/plugins/jquery-knob/excanvas.js') }}
        <![endif]-->
        {{ HTML::script('/plugins/jquery-knob/jquery.knob.js') }}
        {{ HTML::script('/plugins/jquery-knob/knob.js') }}
        <!-- FLOT CHART JS -->
        {{ HTML::script('/plugins/flot-chart/jquery.flot.js') }}
        {{ HTML::script('/plugins/flot-chart/jquery.flot.tooltip.js') }}
        {{ HTML::script('/plugins/flot-chart/jquery.flot.resize.js') }}
        {{ HTML::script('/plugins/flot-chart/jquery.flot.selection.js') }}
        {{ HTML::script('/plugins/flot-chart/jquery.flot.stack.js') }}
        {{ HTML::script('/plugins/flot-chart/jquery.flot.time.js') }}
        <!-- MORRIS JS -->
        {{ HTML::script('/plugins/morris-chart/raphael.min.js') }}
        {{ HTML::script('/plugins/morris-chart/morris.min.js') }}
        <!-- C3 JS -->
        {{ HTML::script('/plugins/c3-chart/d3.v3.min.js') }}
        {{ HTML::script('/plugins/c3-chart/c3.min.js') }}
        <!-- MAIN APPS JS -->
        {{ HTML::script('/js-sentir/apps.js') }}
    </body>

</html>