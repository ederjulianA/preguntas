@extends('layouts.estudiante')

@section('titulo')
Index Estudiante
@stop

@section('content')
<div class="container">
		
		<div class="mis-cursos-container">
			<h2>Mis Cursos</h2>
				<ul>
					@foreach($mycourses as $course)
						<li><a href="#">{{$course->name}}</a></li>

					@endforeach
				</ul>
			
		</div>
		
</div>
@stop