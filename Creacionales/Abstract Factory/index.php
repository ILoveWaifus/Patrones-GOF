<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Acciones</title>
</head>
<body>
    <h2>Introduce una dirección y selecciona una acción:</h2>
    <form method="POST" action="index.php">
        <label for="address">Dirección:</label>
        <input type="text" id="address" name="address" required>
        <br><br>
        <button type="submit" name="action" value="action1">Coche Mercedes</button>
        <button type="submit" name="action" value="action2">Coche Ferrari</button>
        <button type="submit" name="action" value="action3">Barco Mercedes</button>
        <button type="submit" name="action" value="action4">Barco Ferrari</button>
    </form>

    <?php
    require_once 'Fabricas/MercedesFactory.php';
    require_once 'Fabricas/FerrariFactory.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $address = $_POST['address'];
        $action = $_POST['action'];

        $transport = null;

        // Este switch creo que es necesario, ya que si no se selecciona ninguna acción, no se instanciará ninguna clase
        // Sin embargo esto no sigue el patron abierto/cerrado por lo que alomejor hay otra forma
        switch ($action) {
            case 'action1':
                $fabrica = new MercedesFactory();
                $transport = $fabrica->createCar();
                break;
            case 'action2':
                $fabrica = new FerrariFactory();
                $transport = $fabrica->createCar();
                break;
            case 'action3':
                $fabrica = new MercedesFactory();
                $transport = $fabrica->createShip();
                break;
            case 'action4':
                $fabrica = new FerrariFactory();
                $transport = $fabrica->createShip();
                break;
            default:
                echo "Acción no válida.";
        }

        // Aqui es distinto a factory method, obtenemos un producto que puede ser de una familia u otra, pero no sabemos cual es
        // Solo sabemos que es un transporte y hace deliver
        echo $transport->deliver() . " a la dirección: " . $address;
    }
    ?>
</body>
</html>
