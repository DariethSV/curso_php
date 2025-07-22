<?php
$conexion = new mysqli("localhost", "root", "", "prueba");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $sql = "INSERT INTO usuarios (nombre) VALUES ('$nombre')";

    if ($conexion->query($sql) === TRUE) {
        echo "<h2>✔ Nombre guardado correctamente.</h2>";
    } else {
        echo "<h2 style='color: red;'>Error al guardar el nombre: " . $conexion->error . "</h2>";
    }
}
$conexion->close();
?>

<br>
<a href="form.html">
    <button>Volver al formulario</button>
</a>
