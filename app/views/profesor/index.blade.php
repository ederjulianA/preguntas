@extends('layouts.profesor')

@section('titulo')
	Index profesor
@stop

@section('content')
	<div class="container">
		<div class="row My-Row">
				<div class = 'Questions-Container'>
					<h1 class = 'My-Title'>
						Asignación de cursos a estudiantes
					</h1>
					<form action = 'asignarcurso' method = 'POST'>
						<label class = 'My-Label'>
							Curso:
						</label>
						<select name = 'course' id = 'course' class = 'Full-Input' required>
							@foreach($courses as $course)
								<option value="{{$course->id}}">{{$course->name}} </option>
							@endforeach
						</select>
						<label class = 'My-Label'>
							Estudiantes:
						</label>
						<select name = 'user' id = 'user' class = 'Full-Input' required>
							@foreach($users as $user)
								<option value="{{$user->id}}">{{$user->username}} </option>
							@endforeach
						</select>
						<div class = 'Action-Container'>
							<input type = 'submit' value = 'Asignar curso' class = 'btn btn btn-primary'/>
						</div>
					</form>
				</div>
		</div>
		<div class="row My-Row">
				<div class = 'Questions-Container'>
					<h1 class = 'My-Title'>
						Resultados
					</h1>
					<form action = 'myresults' method = 'POST'>
						<label class = 'My-Label'>
							Estudiante:
						</label>
						<input name = 'user' type = 'text' placeholder = 'Correo del estudiante:' class = 'Full-Input' required/>
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
						<div class = 'Action-Container'>
							<input type = 'submit' value = 'Buscar' class = 'btn btn btn-primary'/>
						</div>
					</form>
				</div>
		</div>
	</div>
@stop