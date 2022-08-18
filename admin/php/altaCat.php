<?php
	include("Conexion_DB.php");

	$nombre=$_POST['cat_name'];
	$desc=($_POST['descripcion']) ? $_POST['descripcion'] : 'NULL';
	$catPadre=($_POST['catPadre']) ? $_POST['catPadre'] : NULL;
	$img="img/Categorias/".$_FILES['imgCat']['name'];

	$query = "INSERT INTO `categorias`(`ID`, `Nombre`, `Descripcion`, `Imagen`, `cat_padre`) VALUES (NULL,'$nombre','$desc','$img','$catPadre')";

	if(mysqli_query($enlace, $query)){
		echo "Categoria agregada correctamente";
		include("uploadImg.php");
	}else{
		echo "Algo ocurrio mal, no se agrego la categoria";
	}
	mysqli_close($enlace);
?>