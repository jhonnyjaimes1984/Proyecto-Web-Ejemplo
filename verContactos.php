<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title> </title>
	<meta name="lang" content="es">
	<meta name="author" content="">
	<meta name="robots" content="index,follow"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<link href="style.css" rel="stylesheet">
</head>
<body>
<?php include_once "configuracion.php";

$sentencia = $base_de_datos->query("SELECT * FROM listaContactos;"); 
$productos = $sentencia->fetchAll(PDO::FETCH_OBJ);?> 
<div class="container justify-content-md-center col-10">
<br>
    <h1>Tabla de todos los contactos</h1>
<br>

<table class="table table-striped">
    <thead>
        <tr>
            <th><center>Identificador</center></th> 
            <th><center>Nombres</center></th> 
            <th><center>Apellidos</center></th>
            <th><center>Email</center></th>
            <th><center>Telefono</center></th>
            <th><center>Fecha nacimiento</center></th>
            <th><center>Editar contacto</center></th>
        </tr> 
    </thead> 
    <tbody> 
        <?php foreach($productos as $producto){?> 
            <tr align="center"> 
                <td><?php echo $producto->id?></td> 
                <td><?php echo $producto->nombre ?></td> 
                <td><?php echo $producto->apellidos ?></td>
                <td><?php echo $producto->email?></td>
                <td><?php echo $producto->telefono ?></td>
                <td><?php echo date('d-m-Y',strtotime($producto->fechaNacimiento)); ?></td>
                <td><a href="<?php echo "editar2.php?id=" . $producto->id?>">Editar Contacto</a></td> 
            </tr> 
        <?php } ?> 
    </tbody> 
</table> 
<br> 
<a href="index.php">Volver al inicio</a> 
</div>

