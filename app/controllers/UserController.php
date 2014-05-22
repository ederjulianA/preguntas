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
	
		$question = new Question();
		$question->user = $user->id;
		$question->content = Input::get('question');
		$question->course = Input::get('course');
		
		if($question->save()) {
		
			return Redirect::to('/#');
		} else {
		
			return Redirect::to('/#');
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