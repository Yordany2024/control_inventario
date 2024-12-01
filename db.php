<?php
$hostname = "localhost";
$username = "root";
$password = ""; 
$database = "dashboard_inventario";
$port = 3309;
 
/*session_start();*/

$conn = new mysqli($hostname, $username, $password, $database, $port);

/* echo "conexion exitosa" */
?>