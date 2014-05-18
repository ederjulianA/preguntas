@extends('layouts.main')
@section('titulo')
	Index
@stop


@section('content')
	<h1>Bienvenido al administrador de preguntas y respuestas</h1>
	<div class="container-admin">
		<div class="col-md-6">
			<h2>Usuarios</h2>
			<a href="#" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">Nuevo Usuario</a>

			<table class="table table-striped">
			  <tr>
			  		<th>id</th>
			  		<th>usuario</th>
			  		<th>email</th>
			  		<th>rol</th>
			  		<th>Estado</th>
			  </tr>
			  @foreach($users as $user)
			  		<tr>
			  			<td>{{$user->id}}</td>
			  			<td>{{$user->username}}</td>
			  			<td>{{$user->email}}</td>
			  			<td>{{ Rol::usuarioRol($user->tipo_user)}}</td>
			  			<td>{{ Rol::estado($user->active)}}</td>
			  		</tr>
			  @endforeach
			</table>
			
		</div>

		<div class="col-md-4">
			<h2>Editar</h2>
			
		</div>
	</div>


	    <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Crear Nuevo Usuario</h4>
      </div>
      <div class="modal-body">
        <form role="form" autocomplete ="off" method="post" action="/postNuevoUsuario">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Nombre de Usuario</label>
				    <input type="text"name="username" class="form-control" id="" placeholder="Nombre de usuario">
				  </div>

				  <div class="form-group">
				    <label for="exampleInputEmail1">Email</label>
				    <input type="email" class="form-control" name="email" id="" placeholder="Email del usuario" required>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Contraseña</label>
				    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
				  </div>

				  <div class="form-group">
				    <label for="exampleInputPassword1">Rol del Usuario</label>
				    <select name="tipo_user">
				    	<option value="0"> Escoge el Rol</option>
				    	@foreach($roles as $rol)
				    		<option value="{{$rol->id}}">{{$rol->rol}} </option>
				    	@endforeach
				    	
				    </select>
				  </div>
				
				  
				  <button type="submit" class="btn btn-primary">Crear usuario</button>
				  {{ Form::token()}}
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
@stop