<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Acciones</title>
</head>
<body>

<form method="POST" action="index.php">
    <button type="submit" name="action" value="action1">Paste</button>
</form>

<?php

require_once "Invoker.php";
require_once "PasteCommand.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $invoker = new Invoker();
    $textEditor = new TextEditor('ola k ase');
    $pasteCommand = new PasteCommand($textEditor, ' k ase');

    // Se añade el comando al invocador, y el sera el encargado de ejecutarlo
    $invoker->addCommand($pasteCommand);

    $invoker->run();

    echo $textEditor->getText();
}
?>

</body>
</html>