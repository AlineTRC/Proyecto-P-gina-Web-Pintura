<?php

$inc = include("db_conn.php");
if($inc){
    $consulta = "SELECT * FROM registro";
    $resultado = mysqli_query($conn, $consulta);
    if($resultado){
        while($row = $resultado->fetch_array()){
                        $usuario = $row['Usuario'];
                        $nombre = $row['Nombre'];
                        $correo = $row['CorreoElectronico'];
                        $fecha = $row['Fecha'];
                        $tiempo = $row['Tiempo'];
                        $mes = $row['Mes'];
                        $year = $row['Año'];
                        $telefono = $row['Telefono'];
                        $edad = $row['Edad'];
            ?>
            <head><link rel="stylesheet" href="estilos.css"></head>
            <div><div><center>
                <table style="width:1000px;border: 3px solid white; border-collapse: collapse;padding: 15px;text-align: center;border-spacing:2px; border-color:white;">
                <tr style="background-color:white; color: white;" class="columna"><th><b>Usuario</b></th>
                <th>Nombre</th>
                <th>CorreoElectronico</th>
                <th>Fecha</th>
                <th>Tiempo</th>
                <th>Mes</th>
                <th>Año</th>
                <th>Telefono</th>
                <th>Edad</th></tr>
                <tr style="color: white"><th><?php echo $usuario ?></th>
                <th><?php echo $nombre ?></th>
                <th><?php echo $correo ?></th>
                <th><?php echo $fecha ?></th>
                <th><?php echo $tiempo ?></th>
                <th><?php echo $mes ?></th>
                <th><?php echo $year ?></th>
                <th><?php echo $telefono ?></th>
                <th><?php echo $edad ?></th></tr>
                </table></center>
                </div>
            </div>
            <?php
        }}}

?>
