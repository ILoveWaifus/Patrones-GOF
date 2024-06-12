<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Acciones</title>
</head>
<body>

<form method="post" action="index.php">
    <button type="submit" name="action" value="action1">Moverte</button>
    <button type="submit" name="action" value="action2">Parase</button>
</form>

<?php

require_once "PlayingState.php";
require_once "IdleState.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST['action'];

    $state = null;

    switch ($action) {
        case 'action1':
            $state = new PlayingState();
            break;
        case 'action2':
            $state = new IdleState();
            break;
        default:
            echo "Acción no válida.";
    }

    $state->start();
    // Este método se ejecutaria en un bucle hasta un cambio de estado
    $state->update();
    $state->end();
}
?>

</body>
</html>