<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario y Base de Datos</title>
</head>
<body>
    <h1>Formulario Integrado con Base de Datos</h1>

    <!-- Mensajes -->
    <?php
    if (isset($_GET['success'])) {
        echo "<p style='color: green;'>Datos insertados correctamente.</p>";
    }
    if (isset($_GET['error'])) {
        echo "<p style='color: red;'>Hubo un error al insertar los datos.</p>";
    }
    ?>

    <!-- Formulario -->
    <form action="includes/procesar_formulario.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required><br>

        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad" required><br>

        <p>Estudios:</p>
        <label><input type="radio" name="estudios" value="Sin Estudios" required> Sin Estudios</label><br>
        <label><input type="radio" name="estudios" value="Primario"> Primario</label><br>
        <label><input type="radio" name="estudios" value="Secundario"> Secundario</label><br>

        <p>Deportes que practicas:</p>
        <label><input type="checkbox" name="deportes[]" value="Futbol"> Futbol</label><br>
        <label><input type="checkbox" name="deportes[]" value="Basket"> Basket</label><br>
        <label><input type="checkbox" name="deportes[]" value="Tennis"> Tennis</label><br>
        <label><input type="checkbox" name="deportes[]" value="Voley"> Voley</label><br>

        <label for="ingresos">Rango de Ingresos:</label>
        <select name="ingresos" id="ingresos" required>
            <option value="1-1000">1-1000</option>
            <option value="1001-3000">1001-3000</option>
            <option value="3001+">Más de 3000</option>
        </select><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
