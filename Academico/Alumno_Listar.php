
<script>
        function ModificarAlumno(id) {
            window.location.href = "ModificarAlumno/Modificar_Alumno.php?IdUser="+id;
        }
        function EliminarAlumno(id) {
            let IdNombre = id;
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("res").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "EliminarAlumno/Elimina_Alumnos.php?IdUser="+IdNombre, true);
            xhttp.send();
        }
</script>
<?php
    include("Encabezado.php");
    include("ConexionServidor.php");
    echo"<center><h2>LISTA DE ALUMNOS</h1></center>";
    echo "<center><a href=NuevoAlumno/Alumno_Nuevo.php><h2>Nuevo Alumno</h2></a><center>";
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
    <td>OPCIONES</td> 
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
        <td> 
         <input type=button value=Editar onclick='ModificarAlumno($reg[idalumno])'>
         <input type=button value=Eliminar onclick='EliminarAlumno($reg[idalumno])'> 
         </td> 
        </tr>";
    }
    echo"</table>";
    echo"<br>";
    echo"</center>";
?>
<html>
    <center>
    <div id ="res">
    </div>
    <a href=./menu.php> REGRESAR AL MENU</a> 
    </center>
</html>