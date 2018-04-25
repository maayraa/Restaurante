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
	case 'comanda':
		if(!empty($_POST['idtabla'])){
			$idtabla = $_POST['idtabla'];
			$statement = $pdo->prepare("DELETE FROM comanda WHERE fol_coman = :idcom");
			$statement->execute([
				':idcom'=>$idtabla
			]);
			header('location:consultas.php?con=comanda');
		}
		break;
	case 'cliente':
		if(!empty($_POST['idtabla'])){
			$idtabla = $_POST['idtabla'];
			$statement = $pdo->prepare("DELETE FROM cliente WHERE id_clte = :idclte");
			$statement->execute([
				':idclte'=>$idtabla
			]);
			header('location:consultas.php?con=cliente');
		}
		break;
	case 'puestos':
		if(!empty($_POST['idtabla'])){
			$idtabla = $_POST['idtabla'];
			$statement = $pdo->prepare("DELETE FROM puestos WHERE id_puesto = :idpuesto");
			$statement->execute([
				':idpuesto'=>$idtabla
			]);
			header('location:consultas.php?con=puestos');
		}
		break;
	case 'proveedores':
		if(!empty($_POST['idtabla'])){
			$idtabla = $_POST['idtabla'];
			$statement = $pdo->prepare("DELETE FROM proveedores WHERE id_prov = :idprov");
			$statement->execute([
				':idprov'=>$idtabla
			]);
			header('location:consultas.php?con=proveedores');
		}
		break;
	case 'platillo':
		if(!empty($_POST['idtabla'])){
			$idtabla = $_POST['idtabla'];
			$statement = $pdo->prepare("DELETE FROM platillo WHERE id_plat = :idplat");
			$statement->execute([
				':idplat'=>$idtabla
			]);
			header('location:consultas.php?con=platillo');
		}
		break;
	case 'nomina':
		if(!empty($_POST['idtabla'])){
			$idtabla = $_POST['idtabla'];
			$statement = $pdo->prepare("DELETE FROM nomina WHERE id_nomi = :idnomi");
			$statement->execute([
				':idnomi'=>$idtabla
			]);
			header('location:consultas.php?con=nomina');
		}
		break;
	case 'factura':
		if(!empty($_POST['idtabla'])){
			$idtabla = $_POST['idtabla'];
			$statement = $pdo->prepare("DELETE FROM factura WHERE id_fact = :idfac");
			$statement->execute([
				':idfac'=>$idtabla
			]);
			header('location:consultas.php?con=factura');
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
				case 'cliente':
					echo '<form class="form-horizontal" action="eliminar.php?tabla=cliente&id='.$id.'" method="post">
					<input type="hidden" name="idtabla" value="'.$id.'?>"/>
					<p class="alert alert-error">¿Deseas eliminarlo?</p>
					<div class="form-actions">
						<button type="submit" class="btn btn-danger">Yes</button>
						<a class="btn" href="consultas.php?con=cliente">No</a>
					</div>
				</form>';
					break;
				case 'puestos':
					echo '<form class="form-horizontal" action="eliminar.php?tabla=puestos&id='.$id.'" method="post">
					<input type="hidden" name="idtabla" value="'.$id.'?>"/>
					<p class="alert alert-error">¿Deseas eliminarlo?</p>
					<div class="form-actions">
						<button type="submit" class="btn btn-danger">Yes</button>
						<a class="btn" href="consultas.php?con=puestos">No</a>
					</div>
				</form>';
				case 'proveedores':
					 echo '<form class="form-horizontal" action="eliminar.php?tabla=proveedores&id='.$id.'" method="post">
					 <input type="hidden" name="idtabla" value="'.$id.'?>"/>
					 <p class="alert alert-error">¿Deseas eliminarlo?</p>
					 <div class="form-actions">
						 <button type="submit" class="btn btn-danger">Yes</button>
						 <a class="btn" href="consultas.php?con=proveedores">No</a>
					 </div>
				 </form>';
					break;
				case 'platillo':
					echo '<form class="form-horizontal" action="eliminar.php?tabla=platillo&id='.$id.'" method="post">
					<input type="hidden" name="idtabla" value="'.$id.'?>"/>
					<p class="alert alert-error">¿Deseas eliminarlo?</p>
					<div class="form-actions">
						<button type="submit" class="btn btn-danger">Yes</button>
						<a class="btn" href="consultas.php?con=platillo">No</a>
					</div>
				</form>';
					break;
				case 'nomina':
					echo '<form class="form-horizontal" action="eliminar.php?tabla=nomina&id='.$id.'" method="post">
					<input type="hidden" name="idtabla" value="'.$id.'?>"/>
					<p class="alert alert-error">¿Deseas eliminarlo?</p>
					<div class="form-actions">
						<button type="submit" class="btn btn-danger">Yes</button>
						<a class="btn" href="consultas.php?con=nomina">No</a>
					</div>
				</form>';
				   break;
				case 'almacen':
					echo '<form class="form-horizontal" action="eliminar.php?tabla=almacen&id='.$id.'" method="post">
					<input type="hidden" name="idtabla" value="'.$id.'?>"/>
					<p class="alert alert-error">¿Deseas eliminarlo?</p>
					<div class="form-actions">
						<button type="submit" class="btn btn-danger">Yes</button>
						<a class="btn" href="consultas.php?con=almacen">No</a>
					</div>
				</form>';
				   break;
				case 'factura':
					echo '<form class="form-horizontal" action="eliminar.php?tabla=factura&id='.$id.'" method="post">
					<input type="hidden" name="idtabla" value="'.$id.'?>"/>
					<p class="alert alert-error">¿Deseas eliminarlo?</p>
					<div class="form-actions">
						<button type="submit" class="btn btn-danger">Yes</button>
						<a class="btn" href="consultas.php?con=factura">No</a>
					</div>
				</form>';
				   break;
				case 'comanda':
					echo '<form class="form-horizontal" action="eliminar.php?tabla=comanda&id='.$id.'" method="post">
					<input type="hidden" name="idtabla" value="'.$id.'?>"/>
					<p class="alert alert-error">¿Deseas eliminarlo?</p>
					<div class="form-actions">
						<button type="submit" class="btn btn-danger">Yes</button>
						<a class="btn" href="consultas.php?con=comanda">No</a>
					</div>
				</form>';
				   break;
				   case 'nota_venta':
				   echo '<form class="form-horizontal" action="eliminar.php?tabla=nota_venta&id='.$id.'" method="post">
				   <input type="hidden" name="idtabla" value="'.$id.'?>"/>
				   <p class="alert alert-error">¿Deseas eliminarlo?</p>
				   <div class="form-actions">
					   <button type="submit" class="btn btn-danger">Yes</button>
					   <a class="btn" href="consultas.php?con=nota_venta">No</a>
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