<?php

include_once "configuracion.php";

if(!isset($_POST['nombre']) || 
	!isset($_POST['apellido']) ||
	!isset($_POST['fecha']) ||
	!isset($_POST['email']) ||
	!isset($_POST['telefono'])
	){
	echo "Algo salio mal. Por favor verifica que los datos son correctos";
exit();

}

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fecha = $_POST['fecha']; // (Y-m-d) -->>> date('d-m-Y',strtotime($_POST['fecha'])); 
$email = $_POST['email'];
$telefono = $_POST['telefono'];


$sentencia = $base_de_datos->prepare("UPDATE `listaContactos` SET nombre= ?, apellidos= ?,email= ?,telefono= ?,fechaNacimiento=? WHERE id = ?;");
$resultado = $sentencia->execute([$nombre, $apellido, $email, $telefono, $fecha, $id]);

if($resultado === TRUE){
	header("Location: index.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que el contacto existe";
?>