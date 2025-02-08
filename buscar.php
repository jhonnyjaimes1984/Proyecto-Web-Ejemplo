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
<div class="container justify-content-md-center col-10">
	<br>
	<h1>Coloque los datos del contactos para buscarlo</h1>
<br>
	<form method="post" action="contacto.php"> 
		<label for="nombre">Nombres: </label>
		<br>
		<input type="text" name="nombre" id="nombre"  placeholder="Nombre del contacto"  required autocomplete="off" >
		<br><br>
		<label for="apellido" >Apellidos: </label>
		<br>
		<input type="text" name="apellido" id="apellido"  placeholder="Apellidos del contacto"  required autocomplete="off" >
		<br><br><br> 
		<button type="submit">Buscar</button> 
	</form>
	<br>
	<a href="index.php">Volver al inicio</a>
</body>
</html>