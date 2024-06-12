<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Acciones</title>
</head>
<body>

<h2>Introduce una dirección y selecciona una acción:</h2>

<form method="post" action="index.php">
    <label for="address">Dirección:</label>
    <input type="text" id="address" name="address" required>
    <br><br>
    <button type="submit" name="action" value="action1">Por Defecto</button>
    <button type="submit" name="action" value="action2">En coche</button>
    <button type="submit" name="action" value="action3">En barco</button>
</form>

<?php

require_once 'ITransport.php';
require_once 'TransportCreator.php';
require_once 'Car.php';
require_once 'CarCreator.php';
require_once 'Ship.php';
require_once 'ShipCreator.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $address = $_POST['address'];
    $action = $_POST['action'];

    $creator = null;

    switch ($action) {
        case 'action1':
            $creator = new TransportCreator();
            break;
        case 'action2':
            $creator = new CarCreator();
            break;
        case 'action3':
            $creator = new ShipCreator();
            break;
        default:
            echo "Acción no válida.";
    }

    $creator->createTransport();
    echo $creator->deliver($address); // La gracia es que veremos la direccion y el tipo de transporte en base a la clase que se haya instanciado
}
?>

</body>
</html>