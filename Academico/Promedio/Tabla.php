<?php
    include("../ConexionServidor.php");
    if(isset($_GET['BtnBuscar'])){
      $texto=$_GET['txtbuscador'];
    }else{
      $texto="";
    }
    $sql = "select alu.idalumno,alu.nombre,nta.promedio ,nta.nota1 ,nta.nota2 ,nta.nota3 from alumnos alu left   join notas nta on nta.idalumno = alu.idalumno where alu.nombre LIKE '$texto%'";
    $registros = mysqli_query($conexion,$sql) or die("Problemas en el select:".mysqli_error($conexion));
    echo "<table border='1'> 
    <tr> 
     <td>ID</td> 
     <td>NOMBRE DEL ALUMNO</td> 
     <td>NOTA 1</td> 
     <td>NOTA 2</td> 
     <td>NOTA 3</td> 
     <td>PROMEDIO</td> 
     <td>ESTADO</td> 
     </tr>";
    while($reg = mysqli_fetch_array($registros)){
        echo "<tr>";
        echo " <td>".$reg['idalumno']."</td>"; 
        echo " <td>".$reg['nombre']."</td>"; 
        echo " <td>".$reg['nota1']."</td>"; 
        echo " <td>".$reg['nota2']."</td>"; 
        echo " <td>".$reg['nota3']."</td>"; 
        echo " <td>".$reg['promedio']."</td>"; 
        echo " <td>".(($reg['promedio'] >= 10.5) ? 'Aprobado' : 'Desaprobado')."</td>";
        echo "</tr>";
    }
    mysqli_close($conexion);
?>  