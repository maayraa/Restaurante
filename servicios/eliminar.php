<?php
include_once '../dbase/conexion.php';
include_once '../dbase/funciones.php';

$tabla = $_GET['tabla'];
$id = $_GET['id'];

switch ($tabla) {
	case 'empleados':
		if (!empty($_POST['idtabla'])) {
			$idtabla = $_POST['idtabla'];
			// $sql = 'DELETE FROM empleados WHERE id_emp ='.$idtabla;
			$statement = $pdo->prepare("DELETE FROM empleados WHERE id_emp = :idemp");
			$statement->execute([
				':idemp'=>$idtabla
			]);
			header('Location: consultas.php?con=empleados');
		}
		break;
	case 'ingredientes':
		if (!empty($_POST['idtabla'])) {
			$idtabla = $_POST['idtabla'];
			// $sql = 'DELETE FROM empleados WHERE id_emp ='.$idtabla;
			$statement = $pdo->prepare("DELETE FROM ingredientes WHERE id_ingrend = :iding");
			$statement->execute([
				':iding'=>$idtabla
			]);
			header('Location: consultas.php?con=ingredientes');
		}
		break;
	default:
		# code...
		break;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Eliminar</title>
	<style>
		form{
			padding: .5em;
    		margin: auto;
    		width: 50%;
    		border: 2px solid orange;
    		text-align: center;
    		font-family: arial;
		}
		button{
			padding: .5em;
    		background: red;
    		border: 1px solid red;
    		font-size: 1em;
    		color: white;
			cursor: pointer;
		}
		a{
			padding: .5em;
			border: 1px solid orange;
    		color: orange;
    		background: orange;
    		text-decoration: none;
    		color: white;
		}
	</style>
</head>
<body>
	<div class="content">
		<?php
			switch ($tabla) {
				case 'ingredientes':
					 echo '<form class="form-horizontal" action="eliminar.php?tabla=ingredientes&id='.$id.'" method="post">
					 <input type="hidden" name="idtabla" value="'.$id.'?>"/>
					 <p class="alert alert-error">¿Deseas eliminarlo?</p>
					 <div class="form-actions">
						 <button type="submit" class="btn btn-danger">Yes</button>
						 <a class="btn" href="consultas.php?con=ingredientes">No</a>
					 </div>
				 </form>';
					break;
				case 'empleados':
					echo '<form class="form-horizontal" action="eliminar.php?tabla=empleados&id='.$id.'" method="post">
					<input type="hidden" name="idtabla" value="'.$id.'?>"/>
					<p class="alert alert-error">¿Deseas eliminarlo?</p>
					<div class="form-actions">
						<button type="submit" class="btn btn-danger">Yes</button>
						<a class="btn" href="consultas.php?con=empleados">No</a>
					</div>
				</form>';
					break;
				default:
					# code...
					break;
			}
		?>
	</div>
</body>
</html>