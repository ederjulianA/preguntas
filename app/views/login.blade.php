@extends('layouts.main')

@section('titulo')
Iniciar sesion
@stop

@section('content')
	<div class="form-container">
		<h2>Inicio de sesion</h2>

		<form class="form-login" method="post" action="/postLogin">

			<div>
				<label for="email">Email :</label>
				<input type="email" name="email" placeholder="ejemplo@ejemplo.com">
			</div>

			<div>
				<label for="email">Contraseña :</label>
				<input type="password" name="password"  placeholder="******">
			</div>

			
				<input type="submit" value="Iniciar Sesion" class="btn btn-info btn-iniciar-sesion">
			
			
			{{ Form::token()}}
		</form>
		
	</div>
@stop