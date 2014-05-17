<?php

class HomeController extends BaseController {

	

	public function getIndex()
	{
		return View::make('index');
	}

	public function getLogin()
	{
		return View::make('login');
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

}
