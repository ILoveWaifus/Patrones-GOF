<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Acciones</title>
</head>
<body>

<form method="post" action="index.php">
    <button type="submit" name="action" value="action1">Contar Familiares</button>

</form>

<?php

require_once "Component/Composite.php";
require_once "Component/Leaf.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

    // Y por cosas como estas senores, es por lo que se usa el patron Builder
    // Pero bueno, es un ejemplo
    $familiar = new Leaf();
    $familiar2 = new Leaf();
    $familiar3 = new Leaf();

    $familia = new Composite();
    $familia->addFamiliar($familiar);
    $familia->addFamiliar($familiar2);
    $familia->addFamiliar($familiar3);

    $familiar4 = new Leaf();
    $familiar5 = new Leaf();

    $familia2 = new Composite();
    $familia2->addFamiliar($familiar4);
    $familia2->addFamiliar($familiar5);
    $familia2->addFamiliar($familia); // Fijaros que trato a un Composite como si fuera un Leaf


    echo "Total de familiares: " . $familia2->contarFamiliares();
}
?>

</body>
</html>