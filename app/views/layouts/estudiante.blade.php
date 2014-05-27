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


<nav class="navbar navbar-default" role="navigation">

  <div class="container-fluid">

  		@if(Auth::check())
  						  <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Evaluador de Competencias</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="/">Inicio</a></li>
	        
	        <!--<li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <b class="caret"></b></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Accion</a></li>
	         
	          </ul>
	        </li>-->
	      </ul>
	     
	      <ul class="nav navbar-nav navbar-right">
	        
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Auth::user()->username}} <b class="caret"></b></a>
	          <ul class="dropdown-menu">
	            <li><a href="/perfil">Perfil</a></li>
	        
	            <li><a href="/cerrar-sesion">Cerrar sesion</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->

  		@else

  				<div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Preguntas y respuestas</a>
	    </div>


	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	    <ul class="nav navbar-nav">
	        <li class="active"><a href="/login">Iniciar Sesion</a></li>
	        
	       
	      </ul>
	    	

	    </div>


  		@endif
  


  </div><!-- /.container-fluid -->
  @if(Session::has('message-alert'))
						<p class="alert alert-danger mensaje-global" style="top:20%;"> {{Session::get('message-alert')}}</p>
				@endif
</nav>

<div class="container">
	<div class="row">

		<div class="label label-success">
			Estudiante
			
		</div>
			@yield('content')
	</div>
	
</div>







<!--  javascript
    ================================================== -->
    <!-- se cargan las respectivas libreria de JS al final de la pagina para optimizar el cargado del documento -->
	
	<!-- Jquery -->
	{{ HTML::script('js/jquery-1.10.2.min.js')}}

	<!-- Bootstrap -->
	{{ HTML::script('bootstrap/js/bootstrap.min.js')}}
</body>
</html>