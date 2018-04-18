<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../estilos/style.css">
	<title>Almacen</title>

</head>
<body>
	<form action="./almacen.php" method="post">
		<table>
			<caption>ALMACEN</caption>
			<tr>
			<td>Proveedor</td>
				<td>
					<select name="prov" >
						<option value="">Seleccionar</option>
						<?php
							foreach ($provs as $prov) {
								echo '<option value='.$prov['id_prov'].'>'.$prov['nom_com'].'</option>';
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Empleado</td>
				<td>
					<select name="emp">
						<option value="">Seleccionar</option>
						<?php
							foreach ($emps as $emp) {
								echo '<option value='.$emp['id_emp'].'>'.$emp['nom_emp'].'</option>';
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Descripcion</td>
				<td>
					<textarea name="descr" id="" cols="30" rows="10"></textarea>
				</td>
			</tr>
			<tr>
				<td>Ingredientes</td>
				<td>
					<textarea name="ing" id="" cols="30" rows="10"></textarea>
				</td>
			</tr>
			<tr>
				<td>Fecha Ingreso</td>
				<td>
					<input type="date" name="fecha">
				</td>
			</tr>
			<tr>
				<td>Estatus</td>
				<td>
					<input type="text" name="estatus">
				</td>
			</tr>
			<tr>
				<td>
					<a href="../inicio_rest.html">Regresar</a>
				</td>
				<td>
					<input type="submit" class="a">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>