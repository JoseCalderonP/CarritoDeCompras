<!DOCTYPE html>
<html lang="es-MX">
	<head>
		<title>Carrito de compras</title>
		
		<meta charset="utf-8">
		<meta keywords="">
		<meta description="">
		<meta name="viewport" content="width=device-width, user-scalable=no">

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

		<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
		<link rel="stylesheet" type="text/css" href="../estilos/bootstrapOrange.min.css">
		
	</head>

	<body>
		<header>
			<h1 id="encabezadoAdmin"> 
				<img src="../img/LogoSuple.png" id="logoAdmin"> Administrador del Carrito de compras 2020
			</h1>
			
			<!-- Navegación principal -->
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			  <a class="navbar-brand" href="#"></a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarColor01">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item active">
			        <a class="nav-link" href="index.html">INICIO<span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item active">
			        <a class="nav-link" href="categorias.html">CATÁLOGOS<span class="sr-only">(current)</span></a>
			      </li>

			      <li class="nav-item">
			        <a class="nav-link" href="#">MENÚ</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">PIE DE PÁGINA</a>
			      </li>
			    </ul>

			    <form class="form-inline my-2 my-lg-0">
			      <input class="form-control mr-sm-2" type="text" placeholder="Buscar...">
			      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
			      <img src="../img/search.png" class="btos">
			      <img src="../img/account.png" class="btos">
			      <div id="loginSession">
			      	<?php
			      		echo "<font color ='white'> Hola ".$_SESSION['Nombre']."(<a href='Salir.php'>Salir</a>)</font>";
			      	?>
			      </div>
			      <img src="../img/carrito.png" class="btos">
			    </form>
			  </div>
			</nav>
			<!-- Fin navegación principal -->
		</header>


		<!-- Breadcrumbs -->
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item active" aria-current="page"></li>
		  </ol>
		</nav>
		<!-- Fin Breadcrumbs -->
	</body>
</html>
