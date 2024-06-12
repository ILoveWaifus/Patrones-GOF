<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Acciones</title>
</head>
<body>
    <form method="POST" action="index.php">
        <button type="submit" name="action" value="action1">Coche</button>
        <button type="submit" name="action" value="action2">Barco</button>
    </form>

    <?php
    require_once 'Car.php';
    require_once 'Boat.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $action = $_POST['action'];

        $vehiculo = null;

        switch ($action) {
            case 'action1':
                $vehiculo = new Car();
                break;
            case 'action2':
                $vehiculo = new Boat();
                break;
            default:
                echo "Acción no válida.";
        }

        $vehiculo->templateMethod();
    }
    ?>
</body>
</html>
