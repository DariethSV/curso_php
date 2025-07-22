<?php
$conexion = new mysqli("localhost", "root", "", "prueba");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $sql = "INSERT INTO usuarios (nombre) VALUES ('$nombre')";

    if ($conexion->query($sql) === TRUE) {
        echo "Nombre guardado correctamente.";
        header("Location: form.html");
        exit();
exit();
    } else {
        echo "Error: " . $conexion->error;
    }
}
?>

