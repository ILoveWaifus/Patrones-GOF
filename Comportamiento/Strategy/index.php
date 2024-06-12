<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Acciones</title>
</head>
<body>

<form method="post" action="index.php">
    <button type="submit" name="action" value="action1">Coche</button>
    <button type="submit" name="action" value="action2">Bus</button>
</form>

<?php

require_once "Context.php";
require_once "CarStrategy.php";
require_once "BusStrategy.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST['action'];

    $strategy = null;

    switch ($action) {
        case 'action1':
            $strategy = new CarStrategy();
            break;
        case 'action2':
            $strategy = new BusStrategy();
            break;
        default:
            echo "Acción no válida.";
    }

    $context = new Context($strategy);
    $context->executeStrategy("Calle de la piruleta");
}
?>

</body>
</html>