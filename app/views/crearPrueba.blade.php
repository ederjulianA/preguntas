<h2>CREACION DE USUARIOS DESDE UN ADMIN INPROVIZADO</h2>

<div>
	<form method="post" action="/postNuevoUsuario">
	nombre de usuario <input type="text" name="username"> <br>
	Email <input type="email" name="email"> <br>
	
	password <input type="password" name="password"> <br>
	tipo de usuario : 
	<select name="tipo_user">
		<option value="1"> Aministrador</option>
		<option value="2"> Estusiante</option>
		
	</select>

	<input type="submit" value="crear">
		{{ Form::token()}}
	</form>
</div>