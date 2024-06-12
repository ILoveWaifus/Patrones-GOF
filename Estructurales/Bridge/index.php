<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Acciones</title>
</head>
<body>

<form method="post" action="index.php">
    <button type="submit" name="action" value="action1">Encender</button>
    <button type="submit" name="action" value="action2">Apagar</button>
</form>

<?php

require_once "Abstraction.php";
require_once "Implementations/TeleImplementation.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST['action'];

    $implementation = new TeleImplementation();
    $abstraction = new Abstraction($implementation);

    switch ($action) {
        case 'action1':
            $abstraction->encender();
            break;
        case 'action2':
            $abstraction->apagar();
            break;
        default:
            echo "Acción no válida.";
    }

}
?>

</body>
</html>