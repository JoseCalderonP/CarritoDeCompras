<?php
	include("Conexion_DB.php");
	$opt=$_GET['opt'];

	$query = mysqli_query($enlace,"SELECT * FROM `categorias`");

	echo '<table class="table table-hover" id="myTable">
		  <thead class="table-dark">
		  	<tr>
                <th scope="col" class"x">#</th>
                <th scope="col" >CATEGORIA</th>
                <th scope="col" class"x">DESCRIPCIÓN</th>
                <th scope="col" class"x">IMAGEN</th>
                <th scope="col" ><img src="../img/editar.png"></th>
                <th scope="col" ><img src="../img/eliminar.png"></th>
            </tr>
            </thead>
            <tbody>';
	$contador=0;
	while ($row = mysqli_fetch_array($query)) {
		$contador++;
		echo '<tr class="">
				<th scope="row" class="x">'.$contador.'</th>
				<td>'.$row['Nombre'].'</td>
				<td class="x">'.$row['Descripcion'].'</td>
				<td class="x"><a href="../'.$row['Imagen'].'" target="_blank"><img style="width:auto; height:50px;" src="../'.$row['Imagen'].'"></a></td>
				<td><a href="#"><img src="../img/editar.png" onclick="document.getElementById("modificarCat").style.display="block""></a></td>
				<td><a href="#"><img src="../img/eliminar.png" data-toggle="modal" data-target="#exampleModal" onclick="document.getElementById(&quot;catBaja&quot;).innerHTML=&quot;'.$row['Nombre'].'&quot;;
				document.getElementById(&quot;idCat&quot;).value=&quot;'.$row['ID'].'&quot;;"></a></td>
			 </tr>';
	}
	echo '</tbody> 
		</table>';
	mysqli_close($enlace);
?>