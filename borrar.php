<?php include_once "configuracion.php";

$sentencia = $base_de_datos->query("SELECT * FROM listaContactos;"); 
$contactos = $sentencia->fetchAll(PDO::FETCH_OBJ);?> 
<h1>Tabla de eliminacion de contactos</h1>
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
            <th><center>Borrar contacto</center></th>
        </tr> 
    </thead> 
    <tbody> 
        <?php foreach($contactos as $contacto){?> 
            <tr align="center"> 
                <td><?php echo $contacto->id?></td> 
                <td><?php echo $contacto->nombre ?></td> 
                <td><?php echo $contacto->apellidos ?></td>
                <td><?php echo $contacto->email?></td>
                <td><?php echo $contacto->telefono ?></td>
                <td><?php echo date('d-m-Y',strtotime($contacto->fechaNacimiento)); ?></td>
                <td><a href="<?php echo "borrar2.php?id=" . $contacto->id?>">Borrar Contacto</a></td> 
            </tr> 
        <?php } ?> 
    </tbody> 
</table> 
<br> 
<a href="index.php">Volver al inicio</a> 
</center>