<?php

class HomeController extends BaseController {

	public function postMyResults() {
	
		$user = Input::get('user');
	}

	public function postSaveSolution() {
	
		$user = Auth::user()->id;
	
		$amount = 0;
		$rights = 0;
		
		# WTF?! Misses?
		
		$misses = 0;
	
		$win_rate = 0.7;
	
		foreach($_POST as $index => $answer) {
			
			$solution = new Solution();
			$solution->user = $user;
			$solution->question = $index;
			$solution->answer = $answer;
			
			$right_answer = Answer::where('question', '=', $index)->where('right', '=', 1)->first();
			
			if($right_answer->id == $answer) {
			
				$solution->right = 1;
				
				$rights ++;
			} else {
			
				$solution->right = 0;
				
				$misses ++;
			}
			
			if($solution->save()) {}
			
			$amount ++;
		}
		
		if($rights >= ($amount * $win_rate)) {
		
			$message = '¡Felicitaciones! Has aprobado la competencia con un total de: '.$rights.'/'.$amount;
		} else {
		
			$message = 'Has reprobado la competencia con un total de: '.$rights.'/'.$amount.'. Has fallado en más de un 30% de la prueba.';
		}
		
		return Redirect::to('/index.php')->with('message-alert', $message);
	}

	public function getIndex()
	{
		if(!Auth::check())
		{
			return Redirect::to('/login');
		}

		if(Auth::user()->tipo_user == 2){
			$users = User::where('tipo_user', '=', 3)->get();
			$courses = Course::where('id', '>', 0)->get();
			$challenges = Challenge::all();
			
			return View::make('profesor.index')->with('users', $users)->with('courses', $courses)->with('challenges', $challenges);
		}

		if(Auth::user()->tipo_user == 3){
			
			$userCourses = Routine::where('user','=',Auth::user()->id)
				->join('course','routine.course','=','course.id')
				->select('course.id', 'course.name')
				->get();
			
			$results = array();
			
			foreach($userCourses as $index => $course) {
			
				$tests = Test::where('test.course', '=', $course->id)->join('challenge', 'challenge.id', '=', 'test.challenge')->select("challenge.name", "challenge.id", "test.id AS test_id")->get();
				
				$my_tests = array();
				
				foreach($tests as $index => $test) {
				
					$my_tests[] = array($test->name, $test->id, $test->test_id);
				}
				
				$results[$course->id] = array($my_tests);
			}
			
			$questions = array();
			$answers = array();
			
			if(isset($_GET['test']) && isset($_GET['challenge'])) {
			
				$questions = Question::where('test', '=', $_GET['test'])->get();
				
				foreach($questions as $key => $question) {
				
					$answers_result = Answer::where('question', '=', $question->id)->get();
					$answers[$question->id] = $answers_result;
				}
			}
			
			return View::make('estudiante.index')->with('mycourses',$userCourses)->with('results', $results)->with('questions', $questions)->with('answers', $answers);
		}
		
		$courses = Course::all();
		
		$challenges = Challenge::all();
		
		$user_id = Auth::user()->id;
		$users = User::where('id','!=', $user_id)->get();
		$roles = Roles::all();
		
		return View::make('index')->with('users',$users)->with('roles',$roles)->with('courses', $courses)->with('challenges', $challenges);
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
