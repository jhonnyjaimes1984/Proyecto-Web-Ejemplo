<?php 
if(!isset($_POST["nombre"]) || !isset($_POST["apellido"])) exit();  

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];

include_once "configuracion.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM listaContactos WHERE nombre = ? and apellidos= ?");
$sentencia->execute([$nombre, $apellido]);
$contacto = $sentencia->fetch(PDO::FETCH_OBJ);


if($contacto === FALSE){
	echo "¡No existe algún contacto con esos datos!";
  ?> 
<br>
<br><a  href="index.php">volver al inicio</a> 
  <?php
	exit(); } ?> 
  <h1 >Detalles del Contacto</h1> 
  <h3><?php echo 'Nombres: '. $contacto->nombre ?></h3> 
  <br> 
  <h3><?php echo 'Apellidos: '. $contacto->apellidos ?></h3> 
  <br> 
  <h3><?php echo 'Email: '. $contacto->email ?></h3>
  <br> 
  <h3><?php echo 'Telefono: '. $contacto->telefono ?></h3>
  <br> 
  <h3><?php echo 'Fecha Nacimiento: '. date('d-m-Y',strtotime($contacto->fechaNacimiento)); ?></h3>
  <br>
  <a href="<?php echo "editar2.php?id=" . $contacto->id?>">Editar contacto</a>
  <br>
  <br>
  <a  href="index.php">Volver al inicio</a> 

              
              