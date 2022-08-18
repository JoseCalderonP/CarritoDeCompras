<?
session_start();
if($_SESSION['autentificado'] != "SI" || $_SESSION['Grupo'] != "Admin"){
	header("Location: ../index.html");
	echo "Datos erróneos";
	exit();
}
?>
