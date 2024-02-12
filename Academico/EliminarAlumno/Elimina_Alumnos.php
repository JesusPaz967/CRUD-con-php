<?php
    $Id = $_GET["IdUser"];
    include("../ConexionServidor.php");
    $sql ="delete from alumnos where idalumno ='$Id'";
    mysqli_query($conexion,$sql) or die("Problemas al agrear el nuevo alumno:". mysqli_error($conexion));
    mysqli_close($conexion);
    echo "<h2>Alumno eliminado</h2>";
?>