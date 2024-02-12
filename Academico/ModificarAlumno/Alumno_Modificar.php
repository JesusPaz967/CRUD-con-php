<?php
    include("../Encabezado.php");
    echo"<center><h2>MODIFICAR ALUMNO</h2></center>";
 ?>
<head>
    <title>Modificar</title>
    <script>
        function ModificarAlumno(id) {
            window.location.href = "Modificar_Alumno.php?IdUser="+id;
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
        <td><input type=button value=Editar onclick='ModificarAlumno($reg[idalumno])'> </td>
        </tr>";
    }
    echo"</table>";
    echo"</center>";
    echo"<br>";
?>