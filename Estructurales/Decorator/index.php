<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Acciones</title>
</head>
<body>

<form method="post" action="index.php">
    <button type="submit" name="action" value="action1">Texto</button>
    <button type="submit" name="action" value="action2">Imagen</button>
</form>

<?php

require_once "Component/Notificacion.php";
require_once "Component/TextNotificationDecorator.php";
require_once "Component/ImageNotificationDecorator.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST['action'];

    $wrappe = new Notificacion();

    switch ($action) {
        case 'action1':
            $decorator = new TextNotificationDecorator($wrappe);
            break;
        case 'action2':
            $decorator = new ImageNotificationDecorator($wrappe);
            break;
        default:
            echo "Acción no válida.";
    }

    echo $decorator->execute();
}
?>

</body>
</html>