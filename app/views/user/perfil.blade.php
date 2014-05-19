@extends('layouts.main')

@section('titulo')

@stop

@section('content')
	<div class="container-admin">

		<div class="perfil-usuario">
				<h2>Perfil de usuario </h2>

				<form class="form-perfil" method="post" action="/editarPerfil">
					<div>
							<label for="nombre_usuario">Nombre de usuario :</label>
							<input type="text" name="username" value="{{Auth::user()->username}}">
					</div>

					<div>
							<label for="nombre_usuario">Email :</label>
							<input type="text" name="email" value="{{Auth::user()->email}}">
					</div>

					<input type="hidden" name="id_user" value="{{Auth::user()->id}}">

					<input type="submit" value="Actualizar" class="btn btn-info" >

					{{ Form::token()}}
				</form>

				<hr>

				<form class="form-perfil" method="post" action="/postCambiarPassword">
						@if($errors->has())
							<div class="alert alert-success" style="text-align:center;">
								<p>Errores en el formulario :</p>
								<ul>
									@foreach($errors->all() as $error)
										<li>{{$error }}</li>
									@endforeach
								</ul>
				
							</div> <!--  end form errors-->
							@endif
					<div>
							<label for="contrasena_actual">Contraseña Actual :</label>
							<input type="password" name="contrasena_actual" value="" required>
					</div>

					<div>
							<label for="nueva_contrasena">Contraseña Nueva :</label>
							<input type="password" name="nueva_contrasena" value="" required>
					</div>

					<div>
							<label for="confirmar_contrasena">Confirmar Contraseña :</label>
							<input type="password" name="confirmar_contrasena" value="" required>
					</div>
					<input type="hidden" name="id_user" value="{{Auth::user()->id}}">

					<input type="submit" value="Actualizar" class="btn btn-info" >

					{{ Form::token()}}

				</form>
			
		</div>
			


	</div>
@stop