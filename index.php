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
</head>
<body>
    <main>
        <h1>Lista de estudiantes</h1>
        <a href="views/Estudiantes/form_estudiante.php">Registrar estudiante</a>
        <table>
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
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
                    echo '      <a  href="views/Estudiantes/form_estudiante.php?codigo=' . $estudiante->getCodigo() . '">MODIFICAR</a>';
                    echo '      <a  href="views/Estudiantes/accion_borrar_estudiante.php?codigo=' . $estudiante->getCodigo() . '" >BORRAR</a>';
                    echo '  </td>';
                    echo '  <td>';
                    echo '      <a href = "Actividades.php?codigo=' . $estudiante->getCodigo() . '">NOTAS</a>'; 
                    echo '  </td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </main>
</body>

</html>