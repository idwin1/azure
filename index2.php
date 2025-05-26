<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $mensaje = "<h2>Hola, $nombre!</h2>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo PHP con CSS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 50px;
        }
        .container {
            background: white;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
            border-radius: 8px;
        }
        h1 {
            color: #333;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background: #007bff;
            color: white;
            padding: 10px;
            border: none;
            width: 100%;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background: #0056b3;
        }
        .mensaje {
            margin-top: 20px;
            font-size: 18px;
            color: #28a745;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Formulario en PHP</h1>
        <form method="POST">
            <label for="nombre">Ingresa tu nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <button type="submit">Enviar</button>
        </form>

        <?php if (isset($mensaje)) echo "<div class='mensaje'>$mensaje</div>"; ?>
    </div>

</body>
</html>
