<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Acciones</title>
</head>
<body>
    <h2> Elige el tipo de casa</h2>
    <form method="POST" action="index.php">
        <button type="submit" name="action" value="action1">Casa pequeña</button>
        <button type="submit" name="action" value="action2">Casa grande</button>
    </form>

    <?php
    require_once 'Director/Builders/SmallHouseBuilder.php';
    require_once 'Director/Builders/BigHouseBuilder.php';
    require_once 'Director/Director.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $action = $_POST['action'];
        $casa = null;

        // La gracias de este patron es que el director crea objetos que deberian ser similares pero tienen muchas diferencias
        // El cliente (este archivo) solo tiene que decirle al director que tipo de objeto quiere y el director se encarga de crearlo
        switch ($action)
        {
            case 'action1':
                $builder = new SmallHouseBuilder();
                $director = new Director($builder);
                $director->buildSmallHouse();
                $casa = $builder->getResult();
                break;
            case 'action2':
                $builder = new BigHouseBuilder();
                $director = new Director($builder);
                $director->buildBigHouse();
                $casa = $builder->getResult();
                break;
            default:
                echo "Acción no válida.";
        }

        $casa->printHouse();
    }
    ?>
</body>
</html>
