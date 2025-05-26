<?php
$host = '10.10.0.4'; // IP del servidor MySQL
$usuario = 'idwin';
$contrasena = 'Idwinuno1@$';
$basededatos = 'datos';

$conn = new mysqli($host, $usuario, $contrasena, $basededatos);

// Verificar conexión
if ($conn->connect_error) {
    die("❌ Error de conexión: " . $conn->connect_error);
}
echo "✅ Conexión exitosa a MySQL.";
?>
