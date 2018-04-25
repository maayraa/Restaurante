<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../estilos/style.css">
	<title>Nominas</title>

</head>
<body>
	<form action="" method="post">
		<table>
			<caption>NOMINAS</caption>
			<tr>
				<td>Id de empleado</td>
				<td>
					<select name="id_emp">
						<?php
							foreach ($emp as $emps) {
								echo '<option value="'.$emps['id_emp'].'">'.$emps['nom_comp'].'</option>';
							}
						?>
					</select>
				</td>
			</tr>
			<tr>    
				<td>Periodo</td>
				<td>
					<input type="text" name="periodo">
				</td>
			</tr>
			<tr>
				<td>Descripcion</td>
				<td>
					<input type="text" name="descr">
				</td>
			</tr>
			<tr>
				<td>Salario diario</td>
				<td>
					<input type="text" name="sal_dro">
				</td>
			</tr>
			<tr>
				<td>Dias trabajados</td>
				<td>
					<input type="text" name="dias_trb">
				</td>
			</tr>
			<tr>
				<td>Comisiones</td>
				<td>
					<input type="text" name="cmson">
				</td>
			</tr>
			<tr>
				<td>Horas extra</td>
				<td>
					<input type="text" name="hrs_extr">
				</td>
			</tr>
			<tr>
				<td>Seguro social</td>
				<td>
					<input type="date" name="seg_soc">
				</td>
			</tr>
			<tr>
				<td>Infonavit</td>
				<td>
					<input type="text" name="infonavit">
				</td>
			</tr>
			<tr>
				<td>Credito</td>
				<td>
					<input type="text" name="credito">
				</td>
			</tr>
			<tr>
				<td>Total de deducciones</td>
                <td>
                    <input type="text" name="total_d">
                </td>
            </tr>
            <tr>
				<td>Total de percepciones</td>
                <td>
                    <input type="text" name="total_p">
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