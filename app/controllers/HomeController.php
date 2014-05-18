<?php

class HomeController extends BaseController {

	

	public function getIndex()
	{
		if(!Auth::check())
		{
			return Redirect::to('/login');
		}
		$user_id = Auth::user()->id;
		$users = User::where('id','!=', $user_id)->get();
		$roles = Roles::all();
		return View::make('index')->with('users',$users)->with('roles',$roles);
	}

	public function getLogin()
	{
		return View::make('login');
	}

	public function postActualizarUsuario()
	{
		$user_id = Input::get('id_user');

		$user = User::where('id','=',$user_id)->first();
		if($user->count())
		{
			$user->username = Input::get('username');
			$user->email = Input::get('email');
			$user->tipo_user = Input::get('tipo_user');
			$user->active = Input::get('estado_user');

			if($user->save()){
				return Redirect::to('/')->with('message-alert','Usuario Actualizaro Correctamente');
			}else{
				return Redirect::to('/')->with('message-alert','Hubo un error al actualizar el usuario');
			}	
		}

		return Redirect::to('/')->with('message-alert','Error al actualizar el usuario');
	}

	public function postCrearUsuario()
	{
		$validator = Validator::make(Input::all(),array(

					'email' => 'required|email',
					'password' => 'required'
				)

			);

		if($validator->passes()){

			$user = new User;
			$user->username = Input::get('username');
			$user->email = Input::get('email');
			$user->password		=	Hash::make(Input::get('password'));
			$user->password_temp = "";
			$user->code = "";
			$user->active = 1;
			$user->tipo_user = Input::get('tipo_user');

			if($user->save()){
				return Redirect::to('/');
			}

		}else{
			die("ERROR EN LA CREACION DEL USUARIO");

		}
	}

	public function postLogin()
	{
		$validator = Validator::make(Input::all(),array(

					'email' => 'required|email',
					'password' => 'required'
				)

			);

		if($validator->passes()){
				$auth = Auth::attempt(array(
					
						'email'  => Input::get('email'),
						'password' => Input::get('password'),
						'active' => 1
					));


				if($auth){

					return Redirect::intended('/');
				}else{
					return Redirect::to('/login')
				->with('message-alert', 'El email o la contraseña no coinsiden, o la cuenta no esta activada');
				}

		}else{
			return Redirect::to('/login')->with('message-alert','Errores en el formulario');
		}
	}

	public function cerrarSesion() {
		Auth::logout();
		return Redirect::to('/login')->with('message-alert','Has Cerrado Sesion');
	}

}
