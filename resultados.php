<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>¡Resultados de datos!</title>
    <link rel="stylesheet" href="style.css">
    <script src="app.js"></script>
</head>

<body>
    <div class="dive2">
        <h1>Resultados</h1>

        <img src="gatito.jpeg" alt="Imagen de resultados">

<?php
$nombre = $_POST["nombre"];
$edad = $_POST["edad"];
$ciudad = $_POST["ciudad"];
$pasatiempo = $_POST["pasatiempo"];

echo "<p>Nombre: " . $nombre . "</p>";
echo "<p>Edad: " . $edad . "</p>";
echo "<p>Ciudad: " . $ciudad . "</p>";
echo "<p>Pasatiempo favorito: " . $pasatiempo . "</p>";
?>

        <h2>¡Bien Hecho!</h2>

        <button onclick="mostrarAlerta()">
            Agregar nuevo registro
        </button>
    </div>
</body>
</html>
