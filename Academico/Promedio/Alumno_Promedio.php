<?php
    include("../Encabezado.php");
    include("../ConexionServidor.php");
    echo"<center><h2>PROMEDIO DE ALUMNO</h1></center>";
    $sql = "select * from alumnos";
    $registros = mysqli_query($conexion,$sql) or die("Problemas en el select:".mysqli_error($conexion));
 ?>