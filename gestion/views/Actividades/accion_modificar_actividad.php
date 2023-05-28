<?php
require '../../models/actividad.php';
require '../../controllers/conexionDbController.php';
require '../../controllers/baseController.php';
require '../../controllers/actividadController.php';

use actividad\Actividad;
use actividadController\ActividadController;

$id = $_GET['id'];
$codigo = $_GET['codigo'];
$actividad = new Actividad();
$actividad->setid($id);
$actividad->setDescripcion($_POST['descripcion']);
$actividad->setNota($_POST['nota']);
$actividad->setCodigoEstudiante($codigo);

$actividadController = new ActividadController();
$resultado = $actividadController->update($actividad->getId(), $actividad);
if ($resultado) {
    $mensaje = 'ACTIVIDAD MODIFICADA';
} else {
    $mensaje = 'NO SE PUDO MODIFICAR LA ACTIVIDAD';
}
$url = '../../../Actividades.php?codigo='.$codigo;
?>
<br>
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