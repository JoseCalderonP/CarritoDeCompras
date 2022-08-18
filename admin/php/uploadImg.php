<?php
	$archivo = $_FILES['imgCat']['name'];
	if(isset($archivo) && $archivo =! ""){
		$tipo = $_FILES['imgCat']['type'];
		$tamano = $_FILES['imgCat']['size'];
		$temp = $_FILES['imgCat']['tmp_name'];

		if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 5000000))){
			echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
			-Se permiente archivos .gif, .jpg, .png y de 500 kb como máximo.</b></div>';
		}
		else{
			if(move_uploaded_file($temp, '../../img/Categorias/'.$archivo)){
				chmod('../../img/Categorias/'.$archivo, 0777);
				echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
				echo '<p><img src="images/'.$archivo.'"></p>';
			}
			else{
				echo '<div><b>Ocurrio algun error al subir el fichero. No pudo guardarse.</b></div>';
			}
		}
	}
?>