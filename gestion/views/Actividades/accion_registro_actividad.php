<?php
require '../../models/actividad.php';
require '../../controllers/conexionDbController.php';
require '../../controllers/baseController.php';
require '../../controllers/actividadController.php';

use actividad\Actividad;
use actividadController\ActividadController;

$codigo = $_GET['codigo'];
$actividad = new Actividad();
$actividad->setDescripcion($_POST['descripcion']);
$actividad->setNota($_POST['nota']);
$actividad->setCodigoEstudiante($_GET['codigo']);

$actividadController = new ActividadController();
$resultado = $actividadController->create($actividad);
if ($resultado) {
    $mensaje =  'ACTIVIDAD REGISTRADA';
} else {
    $mensaje = 'NO SE PUDO REGISTRAR LA ACTIVIDAD';
}
$url = '../../../Actividades.php?codigo='.$codigo;
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