<?php

require 'gestion/models/actividad.php';
require 'gestion/models/estudiante.php';
require 'gestion/controllers/conexionDbController.php';
require 'gestion/controllers/baseController.php';
require 'gestion/controllers/actividadController.php';
require 'gestion/controllers/estudiantesController.php';

use estudianteController\EstudianteController;
$estudianteController = new EstudianteController();

use estudiante\Estudiante;

use actividadController\actividadController;
$actividadController = new actividadController();

$codigoEstudiante = $_GET['codigo'];
$codigo = $codigoEstudiante;
$actividades = $actividadController->read($codigoEstudiante);
$urlAction = "gestion/views/Actividades/form_actividad.php?codigo=".$codigoEstudiante;
$estudiante = new Estudiante();
$estudiante = $estudianteController->readRow($codigo);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="views/CSS/stylesTablas.css">
</head>

<body>
    <header>
        <h1>LISTA DE ACTIVIDADES</h1>
    </header>
    <main>
        <a  class = "registrar" href="<?php echo $urlAction;?>">REGISTRAR ACTIVIDAD</a>
        <table>
            <thead>
                <tr>
                    <th class = "texto">Codigo</th>
                    <th class = "texto">Nombres</th>
                    <th class = "texto">Apellidos</th>
                </tr>
            </thead>
                <tbody>
                    <tr>
                        <td class = "texto"><?php echo $estudiante->getCodigo();?></td>
                        <td class = "texto"><?php echo $estudiante->getNombres()?></td>
                        <td class = "texto"><?php echo $estudiante->getApellidos()?></td>
                </tr>
        </table>
        <table>
            <thead>
                <tr>
                    <th class = "texto">Id</th>
                    <th class = "texto">Descripcion</th>
                    <th class = "texto">Nota</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($actividades as $actividad) {
                    echo '<tr>';
                    echo '  <td class = "texto">' . $actividad->getId() . '</td>';
                    echo '  <td class = "texto">' . $actividad->getDescripcion() . '</td>';
                    echo '  <td type = "number" step = "0.1" class = "texto">' . $actividad->getNota() . '</td>';
                    echo '  <td>';
                    echo '      <a href="gestion/views/Actividades/form_actividad.php?id=' . $actividad->getId() . '&codigo= '. $codigoEstudiante .'">MODIFICAR</a>';
                    echo '  </td>';
                    echo '  <td>';
                    echo '      <a href="gestion/views/Actividades/accion_borrar_actividad.php?id=' . $actividad->getId() . '&codigo= '. $codigoEstudiante .'">BORRAR</a>';
                    echo '  </td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
        <a class = "registrar" href="index.php">VOLVER A LA LISTA DE ESTUDIANTES</a>
    </main>
</body>

</html>