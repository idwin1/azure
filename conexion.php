<?php
$host = "10.10.0.4";  // IP privada del servidor MySQL
$usuario = "idwin";  // Cambia esto por tu usuario de MySQL
$contrasena = "Sandrauno1@";  // Cambia esto por tu contraseña de MySQL
$base_datos = "datos";

$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
