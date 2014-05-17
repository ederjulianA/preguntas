<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
<head>
	<title>@yield('titulo')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    {{ HTML::style('bootstrap/css/bootstrap.min.css', array('media' => 'screen'))}}

    <!--  My styles-->
    {{ HTML::style('css/mios.css', array('media' => 'screen'))}}
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>

@yield('content')


<!--  javascript
    ================================================== -->
    <!-- se cargan las respectivas libreria de JS al final de la pagina para optimizar el cargado del documento -->
	
	<!-- Jquery -->
	{{ HTML::script('js/jquery-1.10.2.min.js')}}
</body>
</html>