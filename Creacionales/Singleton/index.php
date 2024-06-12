<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Acciones</title>
</head>
<body>
    <h2> Elige el tipo de casa</h2>
    <form method="POST" action="index.php">
        <button type="submit" name="action" value="action1">Instanciar</button>
    </form>

    <?php
    require_once "Singleton.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $singleton = Singleton::getInstance();

        // Para verificar que la instancia es la misma, puedes hacer lo siguiente:
        var_dump($singleton);
    }
    ?>
</body>
</html>
