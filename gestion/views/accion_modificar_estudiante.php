<?php
require '../models/estudiante.php';
require '../controllers/conexionDbController.php';
require '../controllers/baseController.php';
require '../controllers/estudiantesController.php';

use estudiante\Estudiante;
use estudianteController\EstudianteController;

$estudiante = new Estudiante();
$estudiante->setCodigo($_POST['codigo']);
$estudiante->setNombres($_POST['nombres']);
$estudiante->setApellidos($_POST['apellidos']);

$estudianteController = new EstudianteController();
$resultado = $estudianteController->update($estudiante->getCodigo(), $estudiante);
if ($resultado) {
    echo '<h1>estudiante modificado</h1>';
} else {
    echo '<h1>No se pudo modificar el estudiante</h1>';
}
?>
<br>
<a href="../Estudiantes.php">Volver al inicio</a>
