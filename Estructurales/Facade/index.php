<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Acciones</title>
</head>
<body>
    <form method="POST" action="index.php">
        <button type="submit" name="action" value="action2">Convertir video</button>
    </form>

    <?php
    require_once 'Facade.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        echo 'Llamando a la fachada...<br>';
        $facade = new Facade();

        // Toda la logica complicada esta escondida detras de un metodo sencillo
        $facade->convert('file');
    }
    ?>
</body>
</html>
