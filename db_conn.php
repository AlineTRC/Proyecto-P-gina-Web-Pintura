<?php
$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "pintura";
$conn = mysqli_connect($sname, $uname, $password, $db_name);
if (!$conn) {
	echo "Hubo un error";
	exit();
}
