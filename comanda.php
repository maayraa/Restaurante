<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../estilos/style.css">
	<title>Comanda</title>

</head>
<body>
	<form action="" method="post">
		<table>
			<caption>COMANDA</caption>
			<tr>
				<td>Cliente</td>
				<td>
					<select name="id_clte">
						<?php
							foreach ($clientes as $cliente) {
								echo '<option value="'.$cliente['id_clte'].'">'.$cliente['nom_comp'].'</option>';
							}
						?>
					</select>
				</td>
			</tr>
			<tr>    
				<td>Platillo</td>
				<td>
					<select name="id_plat">
						<?php
							foreach ($platillos as $platillo) {
								echo '<option value="'.$platillo['id_plat'].'">'.$platillo['presen'].'</option>';
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Bebida</td>
				<td>
					<input type="text" name="bebida">
				</td>
			</tr>
			<tr>
				<td>Descripcion</td>
				<td>
					<input type="text" name="descr">
				</td>
			</tr>
			<tr>
				<td>Cantidad</td>
				<td>
					<input type="text" name="cant">
				</td>
			</tr>
			<tr>
				<td>Precio</td>
				<td>
					<input type="text" name="prec">
				</td>
			</tr>
			<tr>
				<td>Numero de mesa</td>
				<td>
					<input type="text" name="num_mesa">
				</td>
			</tr>
			<tr>
				<td>Fecha</td>
				<td>
					<input type="date" name="fecha">
				</td>
			</tr>
			<tr>
				<td>Nombre de empleado</td>
				<td>
					<select name="nom_emp" id="">
					<?php
							foreach ($empleado as $emp) {
								echo '<option value="'.$emp['id_emp'].'">'.$emp['nom_emp'].'</option>';
							}
					?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Nota de venta</td>
				<td>
					<input type="text" name="nota_venta">
				</td>
			</tr>
			<tr>
				<td>
					<a href="../inicio_rest.html">Regresar</a>
				</td>
				<td>    
					<input type="submit" value="Enviar" class="a">
				</td>
			</tr>
		</table>
	</form>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		$(function () { 
			$('.mas').click(function(){
				$('.mas').before('<input type="text" name="array[]" class="input-mas">');
			});
		});
	</script>
</body>
</html>