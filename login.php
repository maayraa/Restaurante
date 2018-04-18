<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="./estilos/style.css">
	<title>Login</title>
</head>
<body>
	<table>
		<thead>
			<caption>LOGIN</caption>
		</thead>
		<tbody>
			<form action="login.php" method=post>
				<tr>
					<td>USUARIO</td>
					<td><input type="text" name="usuario"></td>
				</tr>
				<tr>
					<td>PASSWORD</td>
					<td><input type="password" name="password"></td>
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
		
		$statement = $pdo->prepare('SELECT * FROM usuarios WHERE usuario = :user AND password = :pass');
		$statement->execute([
			':user'=>$usuario,
			':pass'=>$password
		]);

		$tipo = $statement->fetch();

		switch ($tipo['tipo_user']) {
			case 'empleado':
				echo 'empleado';
				break;
			case 'administrador':
				header('Location: '.RUTA.'inicio_rest.html');
				break;
			default:
				echo '¿quien eres?';
				break;
		}
	}