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

require_once 'Products/ITransport.php';
require_once 'Creator/TransportCreator.php';
require_once 'Products/Car.php';
require_once 'Creator/CarCreator.php';
require_once 'Products/Ship.php';
require_once 'Creator/ShipCreator.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $address = $_POST['address'];
    $action = $_POST['action'];

    $creator = null;

    // Este switch creo que es necesario, ya que si no se selecciona ninguna acción, no se instanciará ninguna clase
    // Sin embargo esto no sigue el patron abierto/cerrado por lo que alomejor hay otra forma
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

    // La gracia es que veremos la direccion y el tipo de transporte en base a la clase que se haya instanciado
    $creator->createTransport();
    echo $creator->deliver($address); 
}
?>

</body>
</html>