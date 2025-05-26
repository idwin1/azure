<?php
$conexion = new mysqli("localhost", "root", "", "formulario_db");

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Insertar datos
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nombre"]) && isset($_POST["edad"])) {
    $nombre = $conexion->real_escape_string($_POST["nombre"]);
    $edad = (int) $_POST["edad"];

    $sql = "INSERT INTO personas (nombre, edad) VALUES ('$nombre', $edad)";
    $conexion->query($sql);
}

// Obtener datos
$registros = $conexion->query("SELECT * FROM personas");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulario PHP</title>
</head>
<body>
    <h2>Formulario de Registro</h2>
    <form method="POST" action="">
        Nombre: <input type="text" name="nombre" required><br><br>
        Edad: <input type="number" name="edad" required><br><br>
        <input type="submit" value="Guardar">
    </form>

    <h2>Registros Guardados</h2>
    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Edad</th>
        </tr>
        <?php while($row = $registros->fetch_assoc()): ?>
        <tr>
            <td><?= $row["id"] ?></td>
            <td><?= htmlspecialchars($row["nombre"]) ?></td>
            <td><?= $row["edad"] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
