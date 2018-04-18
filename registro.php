<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="./estilos/style.css">
	<title>Registro</title>
</head>
<body>
	<table>
		<thead>
			<caption>REGISTRO</caption>
		</thead>
		<tbody>
			<form action="registro.php" method=post>
				<tr>
					<td>USUARIO</td>
					<td><input type="text" name="usuario"></td>
				</tr>
				<tr>
					<td>PASSWORD</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td>TIPO USUARIO</td>
					<td>
						<select name="tipo">
							<option value="empleado">Empleado</option>
							<option value="administrador">Administrador</option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan=2>
						<input type="submit" value="Entrar" class=a name=boton>
					</td>
				</tr>
			</form>
		</tbody>
	</table>
</body>
</html>

<?php
require_once './dbase/conexion.php';
require_once './dbase/funciones.php';


	if (!empty($_POST['boton'])) {
		$usuario = $_POST['usuario'];
		$password = $_POST['password'];
		$tipo = $_POST['tipo'];
		
		$statement = $pdo->prepare('INSERT INTO usuarios(usuario, password, tipo_user) VALUE(:user, :pass, :tipo)');
		$statement->execute([
			':user'=>$usuario,
			':pass'=>$password,
			':tipo'=>$tipo
		]);

	}