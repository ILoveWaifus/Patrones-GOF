<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Acciones</title>
</head>
<body>
    <h2> Elige el tipo de casa</h2>
    Tenemos 1 objeto circulo y 1 objeto cuadrado.
    El circulo tiene un radio de 5 y el cuadrado un lado de 10.
    Si queremos un objeto igual al circulo solo tenemos que clonarlo y si queremos un objeto igual al cuadrado solo tenemos que clonarlo.

    <form method="POST" action="index.php">
        <button type="submit" name="action" value="action1">Clonar Circulo</button>
        <button type="submit" name="action" value="action2">Clonar Cuadrado</button>
    </form>

    <?php
    require_once "IPrototype.php";
    require_once "Circulo.php";
    require_once "Cuadrado.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $action = $_POST['action'];

        $circulo = new Circulo(5);
        $cuadrado = new Cuadrado(10);

        $prototipo = null;

        switch ($action)
        {
            case 'action1':
                $prototipo = $circulo->clone();
                break;
            case 'action2':
                $prototipo = $cuadrado->clone();
                break;
            default:
                echo "Acción no válida.";
        }

        // El cliente puede clonar todos los objetos que implementen la interfaz IPrototype
        $prototipo->printObjeto();
    }
    ?>
</body>
</html>
