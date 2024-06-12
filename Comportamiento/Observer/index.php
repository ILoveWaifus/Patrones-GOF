<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Acciones</title>
</head>
<body>
    <form method="POST" action="index.php">
        <button type="submit" name="action" value="action1">Save File</button>
    </form>

    <?php
    require_once 'EmailAlertsListener.php';
    require_once 'Publisher.php';
    require_once 'File.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // Crear listener
        $mailListener = new EmailAlertsListener();

        // Crear publisher y suscribir al listener
        $publisher = new Publisher();
        $publisher->subscribe($mailListener);

        // Crear archivo
        $file = new File("file.txt", $publisher);

        // Cuando se guarda el archivo, se notifica a los suscriptores
        $file->save();
    }
    ?>
</body>
</html>
