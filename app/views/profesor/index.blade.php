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
						Pendientes de evaluación
					</h1>
				</div>
		</div>
	</div>
@stop