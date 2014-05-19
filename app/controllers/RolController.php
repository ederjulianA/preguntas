<?php

class RolController extends BaseController {

	public function postNuevoRol()
	{
		if(isset($_POST['rol'])){

			$roles = new Roles;
			$roles->rol = Input::get('rol');

			if($roles->save()){
				return Redirect::to('/')->with('message-alert','Rol creado exitosamente');
			}else{
				return Redirect::to('/')->with('message-alert','problemas al crear el Rol');
			}	

		}
	}

}