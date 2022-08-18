<?php
	include("Conexion_DB.php");

	$query = mysqli_query($enlace,"SELECT * FROM `categorias`");

	echo '<select name="CatPadre">
			<option value="">Ninguna</option>';

	while ($row = mysqli_fetch_array($query)) {
		echo '<option value='.$row['ID'].'>'.$row['Nombre'].'</option>';
	}

	echo '</select>';

	mysqli_close($enlace);
?>