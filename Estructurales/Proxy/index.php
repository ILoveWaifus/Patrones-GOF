<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Acciones</title>
</head>
<body>
    <form method="POST" action="index.php">
        <button type="submit" name="action" value="action2">Contar acciones</button>
    </form>

    <?php
    require_once 'Proxy.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $proxy = new Proxy();

        // Otra forma de simplificar el uso de un servicio complicado como en Facade
        // Esta vez no se decide que hacer con el servicio, sino que se añaden acciones
        $proxy->sum(1, 2);
        $proxy->multiply(3, 4);
        $proxy->sum(5, 6);
        $proxy->printRequest();
    }
    ?>
</body>
</html>
