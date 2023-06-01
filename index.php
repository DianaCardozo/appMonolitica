<?php
require 'gestion/models/estudiante.php';
require 'gestion/controllers/conexionDbController.php';
require 'gestion/controllers/baseController.php';
require 'gestion/controllers/estudiantesController.php';

use estudianteController\EstudianteController;

$estudianteController = new EstudianteController();
$estudiantes = $estudianteController->read();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="gestion/views/CSS/stylesTablas.css">
    <!-- <link rel="stylesheet" href="gestion/views/CSS/styles_accion.css"> -->
  
</head>
<body>
    <main>
    <header>
        <h1>Lista de estudiantes</h1>
    </header>
        <a href="gestion/views/Estudiantes/form_estudiante.php"class="registrar">Registrar estudiante</a>
        <table>
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($estudiantes as $estudiante) {
                    echo '<tr>';
                    echo '  <td>' . $estudiante->getCodigo() . '</td>';
                    echo '  <td>' . $estudiante->getNombres() . '</td>';
                    echo '  <td>' . $estudiante->getApellidos() . '</td>';
                    echo '  <td>';
                    echo '      <a  href="gestion/views/Estudiantes/form_estudiante.php?codigo=' . $estudiante->getCodigo() . '">MODIFICAR</a>';
                    echo '<br>';
                    echo '      <a  href="gestion/views/Estudiantes/accion_borrar_estudiante.php?codigo=' . $estudiante->getCodigo() . '" >BORRAR</a>';
                    echo '<br>';
                    echo '      <a href = "Actividades.php?codigo=' . $estudiante->getCodigo() . '">NOTAS</a>'; 
                    echo '<br>';
                    echo '  </td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </main>
</body>

</html>