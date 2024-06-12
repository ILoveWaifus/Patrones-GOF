<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Acciones</title>
</head>
<body>

<form method="post" action="index.php">
    <button type="submit" name="action" value="action2">Convertir video</button>
</form>

<?php

require_once 'Proxy.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $proxy = new Proxy();

    // Otra forma de simplificar el uso de un servicio complicado como en facade
    // Esta vez no se decide que hacer con el servicio, sino que se anaden acciones
    $proxy->request();
    $proxy->response();
    $proxy->request();
    $proxy->printRequest();
}
?>

</body>
</html>