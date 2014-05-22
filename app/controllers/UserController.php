<?php

class UserController extends BaseController {

	public function getPerfil()
	{
		return View::make('user.perfil');
	}

		public function postCambiarPassword()
	{
		$validator = Validator::make(Input::all(),
				array(
						'contrasena_actual' => 'required',
						'nueva_contrasena' => 'required|min:5',
						'confirmar_contrasena' => 'required|same:nueva_contrasena'
					)

			);

		if($validator->fails())
		{
			return Redirect::to('/perfil')->with('message-alert','Error en el formulario')->withErrors($validator);
		}else
		{
			//CAMBIAMOS LA CONTRASEÑA DEL USUARIO

			$user = User::find(Auth::user()->id);

			$old_password = Input::get('contrasena_actual');
			$password = Input::get('nueva_contrasena');

			if(Hash::check($old_password, $user->getAuthPassword())){
				$user->password = Hash::make($password);

					if($user->save()){
						return Redirect::to('/perfil')
						->with('message-alert','Contreaseña actualizada');
					}
			}else{
						return Redirect::to('/perfil')
						->with('message-alert','Las contraseñas No coinciden');
					}
		}

		return Redirect::to('/perfil')->with('message-alert','Error al intentar actualizar tu contraseña');

	}

	public function postSaveQuestion() {

		$user = User::find(Auth::user()->id);
	
		$test = new Test();
		$test->course = Input::get('course');
		$test->challenge = Input::get('challenge');
	
		$question = new Question();
		$question->user = $user->id;
		$question->content = Input::get('question');
		
		$auxiliary = Test::where('course', '=', $test->course)
						->where('challenge', '=', $test->challenge)
						->first();
		
		if(!empty($auxiliary->id)) {
		
			$question->test = $auxiliary->id;
		
			if($question->save()) {
			
				$answers = Input::get('answer');
				$answer_right = Input::get('answer_right');
		
				foreach($answers as $key => $answer_content) {
				
					$answer = new Answer();
					$answer->question = $question->id;
					$answer->content = $answer_content;
					$answer->right = $answer_right[$key];
					
					if($answer->save()) {}
				}
				
				return Redirect::to('../#')->with('message-alert','Pregunta creada satisfactoriamente.');
			} else {}
		} else {
			
			if($test->save()) {
		
				$question->test = $test->id;
		
				if($question->save()) {
				
					$answers = Input::get('answer');
					$answer_right = Input::get('answer_right');
			
					foreach($answers as $key => $answer_content) {
					
						$answer = new Answer();
						$answer->question = $question->id;
						$answer->content = $answer_content;
						$answer->right = $answer_right[$key];
						
						if($answer->save()) {}
					}
					
					return Redirect::to('../#')->with('message-alert','Pregunta creada satisfactoriamente.');
				} else {}
			}
		}
	}
	
	public function postCrearCurso() {
	
		$course = new Course();
		$course->name = Input::get('course');
		
		if($course->save()) {
		
			return Redirect::to('../#')->with('message-alert','Curso creado satisfactoriamente.');
		} else {
		
			return Redirect::to('../#')->with('message-alert','Ha ocurrido un problema, por favor vuelva a intentarlo.');
		}
	}
	
	public function postAsignarCurso() {
	
		$routine = new Routine();
		$routine->user = Input::get('user');
		$routine->course = Input::get('course');
		
		if($routine->save()) {
		
			return Redirect::to('../#')->with('message-alert','Asignación realizada satisfactoriamente.');
		} else {
		
			return Redirect::to('../#')->with('message-alert','Ha ocurrido un problema, por favor vuelva a intentarlo.');
		}
	}
	
	public function postEditarPerfil()
	{
		$user_id = $_POST['id_user'];

		$user = User::where('id','=', $user_id)->first();
		if($user->count()){
			$user->username = Input::get('username');
			$user->email  =Input::get('email');

			if($user->save()){
						return Redirect::to('/perfil')
						->with('message-alert','Perfil actualizado');
			}else{
					return Redirect::to('/perfil')->with('message-alert','Error al actualizar');
			}
		}
	}
}