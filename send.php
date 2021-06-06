<head><link rel="stylesheet" href="estilos.css"></head>
<body style="background-image:url(https://lamenteesmaravillosa.com/wp-content/uploads/2016/02/pintora.jpg)"></body>
<?php
if (isset($_POST['usuario']) and isset($_POST['nombre']) and isset($_POST['correo']) and isset($_POST['fecha']) and 
isset($_POST['tiempo']) and isset($_POST['mes']) and isset($_POST['year']) and isset($_POST['telefono']) and isset
($_POST['edad'])) {
	include 'db_conn.php';
	function validate($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	$usuario = validate($_POST['usuario']);
	$nombre = validate($_POST['nombre']);
	$correo = validate($_POST['correo']);
	$fecha = validate($_POST['fecha']);
	$tiempo = validate($_POST['tiempo']);
	$mes = validate($_POST['mes']);
	$year = validate($_POST['year']);
	$telefono = validate($_POST['telefono']);
	$edad = validate($_POST['edad']);
	if (empty($usuario) and empty($nombre) and empty($correo) and empty($tiempo) and empty($mes) and empty($year)
	and empty($telefono) and empty ($edad)) {
		header("Location: Registro.html");
	} else {
		$sql = "INSERT INTO registro(Usuario, Nombre,CorreoElectronico,Fecha,Tiempo,Mes,Año,Telefono,Edad) VALUES('$usuario','$nombre','$correo',
		'$fecha','$tiempo','$mes','$year','$telefono','$edad')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
            include("mostrar.php");
		} else {
			echo "ERROR";

		}}}?>
		<center>
			<h3 style="color:white">Se ha enviado con éxito.</h3>
			<button class="regresar"onclick="history.go(-1)" >Regresar</button></center>
