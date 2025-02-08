<?php include_once "configuracion.php";

$sentencia = $base_de_datos->query("SELECT * FROM listaContactos;"); 
$productos = $sentencia->fetchAll(PDO::FETCH_OBJ);?> 
<h1>Tabla de todos los contactos</h1>
<br>
<table>
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
</center>