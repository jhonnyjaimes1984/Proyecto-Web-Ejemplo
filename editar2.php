<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "configuracion.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM listaContactos WHERE id = ?;");
$sentencia->execute([$id]);
$contacto = $sentencia->fetch(PDO::FETCH_OBJ);
if($contacto === FALSE){
  echo "¡No existe algún contacto con ese ID!";
  exit();} ?>

  <body>
    <form  action="guardarEditado.php" method="post">
     <input type="hidden" name="id" value="<?php echo $contacto->id; ?>">
     <h1>Edite los campos del contacto para guardarlos en la base de datos</h1>
     <br>
     <label for="nombre">Nombres: </label>
     <br>
     <input type="text" name="nombre" id="nombre"  placeholder="Nombre del contacto"  required value="<?php echo $contacto->nombre; ?>" >
     <br><br>
     <label for="apellido" >Apellidos: </label>
     <br>
     <input type="text" name="apellido" id="apellido"  placeholder="Apellidos del contacto"  required value="<?php echo $contacto->apellidos; ?>" >
     <br><br>
     <label for="fecha" >Fecha de nacimiento: </label>
     <br>
     <input type="date" name="fecha" id="fecha"  placeholder="fecha de nacimiento"  required  value="<?php echo $contacto->fechaNacimiento; ?>">
     <br><br>
     <label for="email">Email: </label>
     <br>
     <input type="email"  name="email" id="email"  placeholder="Email"  required value="<?php echo $contacto->email; ?>" >
     <br><br>
     <label for="telefono" >Telefono: </label>
     <br>
     <input type="number" step="any" name="telefono" id="telefono"  placeholder="Telefono"  required value="<?php echo $contacto->telefono; ?>" >
     <br><br><br>
     <button  type="submit">Guardar</button>
   </form>
   <br>
   <a href="index.php">Volver al inicio</a>
 </body>