<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Acciones</title>
</head>
<body>
    <form method="POST" action="index.php">
        <button type="submit" name="action" value="action1">En Avion</button>
        <button type="submit" name="action" value="action2">En Coche</button>
    </form>

    <?php
    require_once "Adapter.php";
    require_once "Service.php";
    require_once "Car.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $action = $_POST['action'];
        $vehiculo = null;

        // Este switch creo que es necesario, ya que si no se selecciona ninguna acción, no se instanciará ninguna clase
        // Sin embargo esto no sigue el patron abierto/cerrado por lo que alomejor hay otra forma
        switch ($action)
        {
            case 'action1':
                $service = new Service();
                $vehiculo = new Adapter($service);
                break;
            case 'action2':
                $vehiculo = new Car();
                break;
            default:
                echo "Acción no válida.";
        }

        // La gracia es que hemos cogido una clase que no tiene nada que ver con la otra y hemos hecho que se comporte como la otra
        echo $vehiculo->deliver() . "<br>";
    }
    ?>
</body>
</html>
