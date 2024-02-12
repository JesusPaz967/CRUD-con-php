<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
    <?php
        include("Encabezado.php");
    ?>
</head>
<body>
    <h1>Menu</h1>
    <h1>Alumnos</h1>
    <ol>
        <li><a href="NuevoAlumno/Alumno_Nuevo.php">Nuevo Alumno</a></li>
        <li><a href="ModificarAlumno/Alumno_Modificar.php">Modificar Alumno</a></li>
        <li><a href="EliminarAlumno/Alumno_Eliminar.php">Eiminar Alumno</a></li>
        <li><a href="Alumno_Listar.php">Listar Alumnos</a></li>
    </ol>
    <h1>Notas</h1>
    <ol>
        <li><a href="NuevoNota/Notas.php">Ingresar Notas</a></li>
        <li><a href="Promedio/VerPromedio.php">Ver Promedio</a></li>
    </ol>
    <h1>Reporte</h1>
    <ol>
        <li><a href="Promedio/Listar_Promedio.php">Listar Promedio</a></li>
    </ol>
    <h1><a href="">Salir</a></h1>
    
</body>
</html>