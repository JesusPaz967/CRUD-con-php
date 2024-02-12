<?php
    include("../ConexionServidor.php");
    session_start();
    $IDusuarios = $_SESSION['Usuario'];
    $Nombre = $_GET["txtNombrealumno"];
    $FechaDeNacimiento = $_GET["txtFechaDeNacimiento"];
    $Escuela = $_GET["comboEscuela"];
    $Carrera = $_GET["comboCarrera"];  
    $sql="insert into alumnos(nombre,fechanac,escuela,carrera,idusuarios) values ('$Nombre','$FechaDeNacimiento','$Escuela','$Carrera','$IDusuarios')";
    mysqli_query($conexion,$sql) or die("Problemas al agrear el nuevo alumno:". mysqli_error($conexion));
    mysqli_close($conexion);
    echo "Alumno ingresado correctamente";
?>