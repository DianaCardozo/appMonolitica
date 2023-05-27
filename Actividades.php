<?php

require 'models/actividad.php';
require 'models/estudiante.php';
require 'controllers/conexionDbController.php';
require 'controllers/baseController.php';
require 'controllers/actividadController.php';
require 'controllers/estudiantesController.php';

use estudianteController\EstudianteController;
$estudianteController = new EstudianteController();

use estudiante\Estudiante;

use actividadController\actividadController;
$actividadController = new actividadController();

$codigoEstudiante = $_GET['codigo'];
$codigo = $codigoEstudiante;
$actividades = $actividadController->read($codigoEstudiante);
$urlAction = "views/Actividades/form_actividad.php?codigo=".$codigoEstudiante;
$estudiante = new Estudiante();
$estudiante = $estudianteController->readRow($codigo);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="views/CSS/stylesTablas.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Alfa+Slab+One&family=Oswald:wght@200&family=Russo+One&display=swap');
    </style>
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
                    <th class = "texto">CodigoEstudiante</th>
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
                    echo '  <td class = "texto">' . $actividad->getCodigoEstudiante() . '</td>';
                    echo '  <td>';
                    echo '      <a href="views/Actividades/form_actividad.php?id=' . $actividad->getId() . '&codigo= '. $codigoEstudiante .'">MODIFICAR</a>';
                    echo '  </td>';
                    echo '  <td>';
                    echo '      <a href="views/Actividades/accion_borrar_actividad.php?id=' . $actividad->getId() . '&codigo= '. $codigoEstudiante .'">BORRAR</a>';
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