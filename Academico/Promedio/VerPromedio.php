<?php
    include("../Encabezado.php");
    include("../ConexionServidor.php");
    $sql = "select alu.idalumno,alu.nombre,nta.promedio from alumnos alu left join notas nta on nta.idalumno = alu.idalumno";
    $registros = mysqli_query($conexion,$sql) or die("Problemas en el select:".mysqli_error($conexion));
?>
<head>
<script>
        function Notas(id) {
            window.location.href = "../NuevoNota/Notas_Nuevo.php?idalumno="+id;
        }
    </script>
</head>
<body>
<center>
    <h2>PROMEDIOS</h2>
    <table border='1'> 
    <tr> 
    <td>ID</td> 
    <td>NOMBRE DEL ALUMNO</td> 
    <td>PROMEDIO</td> 
    <td>ESTADO</td> 
    <td>OPCIONES</td>
    </tr>
    <?php
         while($reg = mysqli_fetch_array($registros)){
            echo"<tr>
                <td>".$reg['idalumno']."</td> 
                <td>".$reg['nombre']."</td> 
                <td>".$reg['promedio']."</td> 
                <td>";
            echo ($reg['promedio'] >= 10.5) ? 'Aprobado' : 'Desaprobado';
            echo "</td>";
            echo "<td><input type=button value='Modificar/Agregar Notas' onclick=Notas($reg[idalumno])> </td>";
        }
        mysqli_close($conexion);
    ?>
    </tr>
    </table>
    <br>
    <a href=../menu.php> REGRESAR AL MENU</a>
</center>
</body>

