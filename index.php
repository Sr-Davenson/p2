<?php
include 'models/util/fecha.php';
include 'controller/controllerFechas.php';

use App\controllers\ControllerFechas;

$f = new ControllerFechas();
switch ($f->calcSaludo()) {
    case 1:
        $sal = "Buenos Dias";
        break;
    case 2:
        $sal = "Buenas Tardes";
        break;
    case 3:
        $sal = "Buenas Noches";
        break;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="CSS/style.InicioSession.css">
    <title>Inicia Session</title>
</head>

<body>
    <div>
        <fieldset class="Session">
            <img src="images/logo.png" alt="Logo">
            <p><b><?php echo $sal . '<br>'; ?></b> Bienvenido!!</p>
            <a class="boton" href="views/inicio.php">Ingresar</a>
        </fieldset>
    </div>
    <img class="img" src="images/login.png" alt="l">

</body>

</html>