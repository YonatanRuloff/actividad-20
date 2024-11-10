<?php
include 'config.php'; // Incluye la conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $edad = isset($_POST['edad']) ? intval($_POST['edad']) : null;
    $estudios = isset($_POST['estudios']) ? $_POST['estudios'] : null;
    $deportes = isset($_POST['deportes']) ? json_encode($_POST['deportes']) : null;
    $ingresos = isset($_POST['ingresos']) ? $_POST['ingresos'] : null;

    try {
        $sql = "INSERT INTO usuarios (nombre, edad, estudios, deportes, ingresos) 
                VALUES (:nombre, :edad, :estudios, :deportes, :ingresos)";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':edad', $edad);
        $stmt->bindParam(':estudios', $estudios);
        $stmt->bindParam(':deportes', $deportes);
        $stmt->bindParam(':ingresos', $ingresos);

        if ($stmt->execute()) {
            header('Location: ../index.php?success=1'); // Redirige con mensaje de éxito
        } else {
            header('Location: ../index.php?error=1'); // Redirige con mensaje de error
        }
    } catch (Exception $e) {
        echo "Error al procesar los datos: " . $e->getMessage();
    }
}
?>
