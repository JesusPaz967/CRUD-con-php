<?php
    include("../Encabezado.php");
    echo"<center><h2>ELIMINAR ALUMNO</h1></center>";
 ?>
<head>
    <title>Eliminar</title>
    <script>
        function EliminarAlumno(id) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("res").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "Elimina_Alumnos.php?IdUser="+id, true);
            xhttp.send();
        }
    </script>
</head>
<?php
    include("../ConexionServidor.php");
    $sql = "select * from alumnos";
    $registros = mysqli_query($conexion,$sql) or die("Problemas en el select:".mysqli_error($conexion));
    echo"<center>";
    echo"<table border='1'> 
    <tr> 
    <td>ID</td> 
    <td>NOMBRE DEL ALUMNO</td> 
    <td>FECHA DE NACIMIENTO</td> 
    <td>ESCUELA</td> 
    <td>CARRERA</td> 
    <td>ID DEL USUARIO</td> 
    <td>FECHA DE CREACION</td> 
    <td>OPCION</td> 
    </tr>";
    while($reg = mysqli_fetch_array($registros)){
        echo"<tr>
        <td>".$reg['idalumno']."</td> 
        <td>".$reg['nombre']."</td> 
        <td>".$reg['fechanac']."</td> 
        <td>".$reg['escuela']."</td> 
        <td>".$reg['carrera']."</td> 
        <td>".$reg['idusuarios']."</td> 
        <td>".$reg['feccreacion']."</td> 
        <td><input type=button value=Eliminar onclick='EliminarAlumno($reg[idalumno])'> </td>
        </tr>";
    }
    echo"</table>";
    echo"<br>";
    echo"</center>";
    mysqli_close($conexion);
?>
<html>
    <center>
    <div id ="res">
    </div>
    <a href=../menu.php> REGRESAR AL MENU</a> 
    </center>
</html>