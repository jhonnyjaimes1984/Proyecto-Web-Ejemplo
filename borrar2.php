<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "configuracion.php";
$sentencia = $base_de_datos->prepare("DELETE FROM listaContactos WHERE id = ?;");
$resultado = $sentencia->execute([$id]);
if($resultado === TRUE){
	header("Location: index.php");
	exit;
}
else echo "Algo salió mal";
?>