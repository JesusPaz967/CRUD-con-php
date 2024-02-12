<?php
    include("../ConexionServidor.php");
    session_start();
    $IDusuarios = $_SESSION['idalumno'];
    $Nombre = $_GET["txtNombrealumno"];
    $FechaDeNacimiento = $_GET["txtFechaDeNacimiento"];
    $Escuela = $_GET["comboEscuela"];
    $Carrera = $_GET["comboCarrera"];  
    $sql="update alumnos set nombre = '$Nombre', fechanac= '$FechaDeNacimiento' , escuela= '$Escuela' , carrera= '$Carrera' where idalumno = $IDusuarios";
    mysqli_query($conexion,$sql) or die("Problemas al modificar alumno:". mysqli_error($conexion));
    mysqli_close($conexion);
    echo "<center><h2>Alumno Modificado correctamente</h2></center>";
?>