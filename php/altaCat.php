<?php
	include("Conexion_DB.php");

	$nombre=$_POST['cat_name'];
	$desc=$_POST['descripcion'];
	$img="imgs/categorias".$_POST['imgCat'];
	$catPadre=($_POST['catPadre']) ? $_POST['catPadre'] : 'NULL';

	$query = "INSERT INTO `categorias`(`ID`, `Nombre`, `Descripcion`, `Imagen`, `cat_padre`) VALUES (NULL,'$nombre','$desc','$img','$catPadre'";

	if(mysqli_query($enlace, $query)){
		echo "Categoria agregada correctamente";
	}else{
		echo "Algo ocurrio mal, no se agrego la categoria";
	}
	mysqli_close($enlace);
?>