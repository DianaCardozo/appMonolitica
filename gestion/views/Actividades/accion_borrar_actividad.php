<?php
require '../../models/actividad.php';
require '../../controllers/conexionDbController.php';
require '../../controllers/baseController.php';
require '../../controllers/actividadController.php';

use actividadController\ActividadController;

$codigo = $_GET['codigo'];
$actividadController = new ActividadController();
$resultado = $actividadController->delete($_GET['id']);
if ($resultado) {
    $mensaje = 'ACTIVIDAD BORRADA';
} else {
    $mensaje = 'NO SE PUDO BORRAR LA ACTIVIDAD';
}
$url = '../gestion/Actividades.php?codigo='.$codigo;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/styles_accion.css">
</head>
<body>
    <header>
        <h1><?php echo($mensaje) ?></h1>
    </header>
    <a href="<?php echo($url)?>">Volver al inicio</a>
</body>
</html>