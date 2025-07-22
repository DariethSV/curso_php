<?php
$conexion = new mysqli("localhost", "root", "", "prueba");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $sql = "INSERT INTO usuarios (nombre) VALUES ('$nombre')";

    if ($conexion->query($sql) === TRUE) {
        echo "Nombre guardado correctamente.";
    } else {
        echo "Error: " . $conexion->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registro de Nombre</title>
</head>
<body>
    <h2>Ingresa tu nombre</h2>
    <form method="POST" action="">
        <input type="text" name="nombre" required>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>

