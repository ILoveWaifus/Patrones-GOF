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

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

        $invoker = new Invoker();

        // Se crea un editor de texto con un texto inicial
        $textEditor = new TextEditor('ola k ase');

        // Se crea un comando para pegar texto y se le pasa el editor de texto y el texto a pegar
        $pasteCommand = new PasteCommand($textEditor, ', miau');

        // Se añade el comando al invocador, y el sera el encargado de ejecutarlo
        $invoker->addCommand($pasteCommand);
        $invoker->run();

        // Se imprime el texto del editor de texto (Imprimirá 'ola k ase, miau')
        echo $textEditor->getText();
    }
    ?>
</body>
</html>
