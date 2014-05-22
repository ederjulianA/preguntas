@extends('layouts.main')
@section('titulo')
	Index
@stop


@section('content')
	<h1>Bienvenido al administrador de preguntas y respuestas</h1>
	<div class="container-admin">
		<div class="col-md-12">
			<h2>Usuarios</h2>
			<a href="#" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">Nuevo Usuario</a>

			<table class="table table-striped">
			  <tr>
			  		<th>id</th>
			  		<th>usuario</th>
			  		<th>email</th>
			  		<th>rol</th>
			  		<th>Estado</th>
			  		<th>Acciones</th>
			  </tr>
			  @foreach($users as $user)
			  		<tr>
			  			<td> @if($user->tipo_user == 1){{HTML::image('img/admin.jpg', 'preguntas', array('width'=>'30px', 'height'=>'30px'))}} @endif {{$user->id}}</td>
			  			<td>{{$user->username}}</td>
			  			<td>{{$user->email}}</td>
			  			<td>{{ Rol::usuarioRol($user->tipo_user)}}</td>
			  			<td>{{ Rol::estado($user->active)}}</td>
			  			<td><a href="#" data-toggle="modal" data-target="#{{$user->id}}" class="btn btn-info">Editar</a></td>
			  		</tr>


			  @endforeach
			</table>
			
		</div>

		<script type = 'text/javascript'>
			function addAnswer() {
			
				var answer_container = document.getElementById('answer_container');
				
				var html = "<input name = 'answer[]' type = 'text' placeholder = 'Digita la respuesta' class = 'Full-Input' required/><label class = 'My-Label'>Respuesta correcta:</label><select name = 'answer_right[]' class = 'Full-Input' required> <option value = '1'>Sí</option><option value = '2'>No</option></select><hr/>";
				
				answer_container.innerHTML += html;
				
				return false;
			}
		</script>
		<div class="row My-Row">
				<div class = 'Questions-Container'>
					<h1 class = 'My-Title'>
						Creación de preguntas
					</h1>
					<form action = 'guardarpregunta' method = 'POST'>
						<label class = 'My-Label'>
							Curso:
						</label>
						<select name = 'course' id = 'course' class = 'Full-Input' required>
							@foreach($courses as $course)
								<option value="{{$course->id}}">{{$course->name}} </option>
							@endforeach
						</select>
						<label class = 'My-Label'>
							Competencia:
						</label>
						<select name = 'challenge' id = 'challenge' class = 'Full-Input' required>
							@foreach($challenges as $challenge)
								<option value="{{$challenge->id}}">{{$challenge->name}} </option>
							@endforeach
						</select>
						<label class = 'My-Label'>
							Pregunta:
						</label>
						<input  id = 'question' name = 'question' type = 'text' class = 'Full-Input' required/>
						<p class = 'My-P'>
							A continuación podrá asignar respuesta a cada pregunta indicando si ésta es o no la correcta. Una pregunta puede tener más de una respuesta verdadera.
						</p>
						<h1 class = 'My-Title-2'>
							Respuestas:
						</h1>
						<div id = 'answer_container' class = 'Answer-Container'>
						</div>
						<div class = 'Action-Container'>
							<input type = 'submit' value = 'Agregar respuesta' onclick = 'return addAnswer();' class = 'btn btn-info'/>
							<input type = 'submit' value = 'Guardar pregunta' class = 'btn btn btn-primary'/>
						</div>
					</form>
				</div>
			
		</div>
		<div class="row My-Row">
				<div class = 'Questions-Container'>
					<h1 class = 'My-Title'>
						Creación de cursos
					</h1>
					<form action = 'crearcurso' method = 'POST'>
						<label class = 'My-Label'>
							Nombre del curso:
						</label>
						<input  id = 'course' name = 'course' type = 'text' class = 'Full-Input' required/>
						<div class = 'Action-Container'>
							<input type = 'submit' value = 'Crear curso' class = 'btn btn btn-primary'/>
						</div>
					</form>
				</div>
			
		</div>
	</div>




	    <!-- Modal para crear nuevo usuario -->
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
</div><!-- FIN DEL MODAL PARA CREAR USUARIO NUEVO-->



	    <!-- Modal para crear nuevo ROL -->
<div class="modal fade" id="rol" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        <h4 class="modal-title" id="myModalLabel">Crear Nuevo Rol</h4>
		      </div>
		      <div class="modal-body">
		        <form role="form" autocomplete ="off" method="post" action="/postNuevoRol">
						  <div class="form-group">
						    <label for="exampleInputEmail1">Rol:</label>
						    <input type="text"name="rol" class="form-control" id="" placeholder="Nuevo Rol">
						  </div>

						  
						 

						  
						
						  
						  <button type="submit" class="btn btn-primary">Crear Rol</button>
						  {{ Form::token()}}
				</form>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				        
				      </div>
				    </div>
				  </div>
</div><!-- FIN DEL MODAL PARA CREAR ROL NUEVO-->

@foreach($users as $user)
			  						  		<!-- Modal -->
<div class="modal fade" id="{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modal {{$user->username}}</h4>
      </div>
      <div class="modal-body">
        			        <form role="form" autocomplete ="off" method="post" action="/postActualizarUser">
						  <div class="form-group">
						    <label for="exampleInputEmail1">Nombre de Usuario</label>
						    <input type="text"name="username" class="form-control" id="" placeholder="" value="{{$user->username}}">
						  </div>

						  <div class="form-group">
						    <label for="exampleInputEmail1">Email</label>
						    <input type="email" class="form-control" name="email" id="" placeholder="" value="{{$user->email}}" required>
						  </div>
						 

						  <div class="form-group">
						    <label for="exampleInputPassword1">Rol del Usuario</label>
						    <label> : {{ Rol::usuarioRol($user->tipo_user)}}</label><br>
						    <select name="tipo_user">
						    	
						    	@foreach($roles as $rol)

						    		@if($rol->id == $user->tipo_user)
										<option value="{{$rol->id}}" selected>{{$rol->rol}}</option>
									@else
						    		<option value="{{$rol->id}}">{{$rol->rol}} </option>

						    		@endif
						    	@endforeach
						    	
						    </select>
						  </div>


						    <div class="form-group">
						    <label for="exampleInputPassword1">Estado Actual</label>
						    <label> Estado: {{ Rol::estado($user->active)}}</label><br>
						    <select name="estado_user">
						    		@if($user->active == 0)
										<option value="0" selected>No activo</option>
										<option value="1" > activo</option>
									@else
						    		<option value="1" selected> activo</option>
						    		<option value="0" >No activo</option>

						    		@endif
						    	
						    	
						    	
						    </select>
						  </div>
						  <input type="hidden" value="{{$user->id}}" name="id_user">
						
						  
						  <button type="submit" class="btn btn-primary">Actualizar Usuario</button>
						  {{ Form::token()}}
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>

@endforeach

@stop