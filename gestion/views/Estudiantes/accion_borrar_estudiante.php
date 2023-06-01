<!DOCTYPE html>
<head>
    <link rel="stylesheet"  href="../../CSS/style_accion.css">    
</head>

<?php
require '../../models/estudiante.php';
require '../../controllers/conexionDbController.php';
require '../../controllers/baseController.php';
require '../../controllers/estudiantesController.php';

use estudianteController\EstudianteController;
$estudianteController = new EstudianteController();
$resultado = $estudianteController->delete($_GET['codigo']);
if ($resultado) {
    $mensaje= 'Estudiante registrado';
} else {
    $mensaje= 'No se pudo registrar el estudiante';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Borrar Estudiante</title>
    <link rel="stylesheet" href="../CSS/styles_accion.css">
</head>
<header>
        <h1><?php echo($mensaje) ?>
</header>
    <br>
<a href="../../../index.php">Volver al inicio</a>