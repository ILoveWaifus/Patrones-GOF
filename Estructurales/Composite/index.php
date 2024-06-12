<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Acciones</title>
</head>
<body>
    <form method="POST" action="index.php">
        <button type="submit" name="action" value="action1">Contar Familiares</button>
    </form>

    <?php
    require_once "Component/Caja.php";
    require_once "Component/Bolsa.php";
    require_once "Component/Objeto.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // Puedes utilizar Builder al crear árboles Composite complejos porque puedes
        // programar sus pasos de construcción para que funcionen de forma recursiva.

        // Crear caja
        $caja = new Caja();

        // Crear bolsas
        $bolsa1 = new Bolsa();
        $bolsa2 = new Bolsa();

        // Crear objetos
        $objeto1 = new Objeto();
        $objeto2 = new Objeto();
        $objeto3 = new Objeto();
        $objeto4 = new Objeto();
        $objeto5 = new Objeto();
        $objeto6 = new Objeto();

        // Agregar objetos a las bolsas
        $bolsa1->addObjeto($objeto1);
        $bolsa1->addObjeto($objeto2);
        $bolsa1->addObjeto($objeto3);
        $bolsa2->addObjeto($objeto4);

        // Agregar bolsas y objetos a la caja
        $caja->addObjeto($bolsa1);
        $caja->addObjeto($bolsa2);
        $caja->addObjeto($objeto5);
        $caja->addObjeto($objeto6);

        echo "Total de objetos: " . $caja->contarObjetos();
    }
    ?>
</body>
</html>
