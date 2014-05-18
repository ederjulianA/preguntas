<?php 
class Rol {
	public static function usuarioRol($rol)
	{
		if($rol == 1)
		{
			$tipo_user = "Admin";
		}else if ($rol == 2)
		{
			$tipo_user = "Profesor";
		}else if($rol == 3)
		{
			$tipo_user = "Estudiante";
		}

		return $tipo_user;

	}

	public static function estado($est)

	{
		if($est == 1)
		{
			$estado = "<label class='label label-success'>Activo</label>";
		}else if($est == 0)
		{
			$estado = "<label class='label label-danger'>No activo</label>";
		}

		return $estado;

	}
}