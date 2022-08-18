<?php
	include("Conexion_DB.php");
	$id_cat = $_POST['idCat'];

	$query = mysqli_query($enlace, "DELETE FROM `categorias` WHERE `ID`=".$id_cat);

	if($query){
		echo "Categoria eliminada";
	}else{
		echo "Algo ocurrio mal";
	}
	mysqli_close($enlace);
?>