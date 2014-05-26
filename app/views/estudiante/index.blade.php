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
						<li>{{$course->name}}
							@foreach($results as $key => $result)
										<ul>
										<?php
										if($key == $course->id) {
											
											foreach($result[0] as $challenge) {
											
												?>
												<li>
													<a href = '?challenge=<?php echo($challenge[1]);?>&test=<?php echo($challenge[2]);?>'>
														Evaluar 
														<?php
															echo($challenge[0]);
														?>
													</a>
												</li>
												<?php
											}
										}
									?>
									</ul>
							@endforeach
						</li>

					@endforeach
				</ul>
			
		</div>
		<?php
			if(!empty($questions)) {
			
				?>
				<div class="mis-cursos-container">
					<h2>Preguntas para la competencia selecionada</h2>
					<p>
						Opción múltiple con única respuesta.
					</p>
						<form action = 'savesolution' method = 'POST'>
							<ul>
								@foreach($questions as $question)
									<li>{{$question->content}}
										@foreach($answers as $key => $answer)
											<?php
												if($key == $question->id) {
													?>
													<ul>
													<?php
													foreach($answer as $info) {
														
														?>
														<label>
															<?php echo($info->content);?>
														</label>
														<input name = '<?php echo($info->question);?>' type = 'radio' value = '<?php echo($info->id);?>' required>
														<br />
														<?php
													}
													?>
													</ul>
													<?php
												}
											?>
										@endforeach
									</li>
								@endforeach
							</ul>
							<div class = 'Action-Container'>
								<input type = 'submit' value = 'Enviar solución' class = 'btn btn btn-primary'/>
							</div>
						</form>
				</div>
				<?php
			} else {
			
				?>
				<div class="mis-cursos-container">
					<h2>Para evaluar seleccione una de las categorías indicadas anteriormente</h2>
				</div>
				<?php
			}
		?>
</div>
@stop