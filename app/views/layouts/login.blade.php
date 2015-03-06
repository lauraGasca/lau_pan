<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Panaderia el triunfo.">
        <meta name="keywords" content="panaderias, panes, panaderia, el triunfo, acambaro, guanajuato">
        <meta name="author" content="Incubamas">
        <title>El triunfo | Iniciar Sesion</title>
        <!-- BOOTSTRAP CSS (REQUIRED ALL PAGE)-->
        {{ HTML::style('/css-sentir/bootstrap.min.css') }}
        <!-- MAIN CSS (REQUIRED ALL PAGE)-->
        {{ HTML::style('/plugins/font-awesome/css/font-awesome.min.css') }}
        {{ HTML::style('/css-sentir/style.css') }}
        {{ HTML::style('/css-sentir/style-responsive.css') }}
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        {{ HTML::script('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}
        {{ HTML::script('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}
        <![endif]-->
        <link rel="shortcut icon" href="{{ asset('images/logoB.png') }}">
    </head>

    <body class="login tooltips">
        <div class="login-header text-center">
            {{ HTML::image('images/logo2.png', 'Logo',['style'=>"height:200px"]) }}
        </div>
        <div class="login-wrapper">
            @if(Session::has('login_errors'))
                <div class="alert alert-warning alert-bold-border fade in alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true" >&times;</button>
                    <strong>¡Error!</strong>
                    Nombre de usuario y/o contrase&ntilde;a incorrectos
                </div>
            @endif
            {{Form::open(array('url'=>'sistema/login','method'=>'post','role'=>"form"))}}
                {{Form::text('user', '',['placeholder'=>'Nombre de usuario','class'=>'form-control no-border input-lg rounded'])}}
                <br/>
                {{Form::password('password', ['placeholder'=>'Contraseña','class'=>'form-control no-border input-lg rounded'])}}
                <br/>
                <label class="checkbox">
                    {{Form::checkbox('remember', true, false)}} Mantener la sesi&oacute;n iniciada
                </label>
                <button type="submit" class="btn btn-warning btn-lg btn-perspective btn-block">Ingresar</button>
            {{Form::close()}}
        </div>
    </body>

</html>