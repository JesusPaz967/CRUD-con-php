<?php
    session_start();
    include("../Encabezado.php");
    include("../ConexionServidor.php");
    $id = $_GET["IdUser"];
    $sql = "select * from alumnos where idalumno=$id";
    $registros = mysqli_query($conexion,$sql) or die("Problemas en el select:".mysqli_error($conexion));
    $reg = mysqli_fetch_array($registros);
    $_SESSION['idalumno'] = $reg['idalumno'];
?>
<html>
    <head>
        <script>
            function ModificarAlumno() {
                let Nombre = document.getElementById('txtNombrealumno').value;
                let FechaDeNacimiento= document.getElementById('txtFechaDeNacimiento').value;
                let Escuela = document.getElementById('comboEscuela').value;
                let Carrera = document.getElementById('comboCarrera').value;
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("res").innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", "Actualizar_Alumno.php?txtNombrealumno="+Nombre+"&txtFechaDeNacimiento="+FechaDeNacimiento+"&comboEscuela="+Escuela+"&comboCarrera="+Carrera, true);
                xhttp.send();
                document.getElementById('Formulario').reset();

            }
        </script>
    </head>
    <center>
        <div id = "res">
        </div>
        <form>
            <h3>ID DEL ALUMNO: <?php echo $reg['idalumno'] ;?></h3>
            <h3>NOMBRE:</h3>
            <input type="text" id ="txtNombrealumno" value=<?php echo $reg['nombre'];?>> 
            <br>
            <h3>FECHA DE NACIMIENTO:</h3>
            <input type="date" id ="txtFechaDeNacimiento" value=<?php echo $reg['fechanac'];?> >
            <br>
            <h3>ESCUELA:</h3>
            <select id ="comboEscuela">>
                <option value="Tecnologia de la informacion"<?php if($reg['escuela'] == "Tecnologia de la informacion") echo "selected";?>> Tecnologia de la informacion</option>
                <option value="Industrias Alimentarias"<?php if($reg['escuela'] == "Industrias Alimentarias") echo "selected";?>> Industrias Alimentarias</option>
                <option value="Mecanica Automotriz"<?php if($reg['escuela'] == "Mecanica Automotriz") echo "selected";?>> Mecanica Automotriz</option>
            </select>
            <br>
            <h3>CARRERA:</h3>
            <select id ="comboCarrera" multiple ="10" >
                <option value="Diseño Grafico"<?php if($reg['carrera'] == "Diseño Grafico") echo "selected";?>>Diseño Grafico</option>;
                <option value="Ingenieria de Software con IA"<?php if($reg['carrera'] == "Ingenieria de Software con IA") echo "selected";?>> Ingenieria de Software con IA</option>";
                <option value="Mecánico de Automotores Diesel"<?php if($reg['carrera'] == "Mecánico de Automotores Diesel") echo "selected";?>> Mecánico de Automotores Diesel</option>";
                <option value="Procesador Industrial de Alimentos"<?php if($reg['carrera'] == "Procesador Industrial de Alimentos") echo "selected";?>> Procesador Industrial de Alimentos</option>";
            </select>
            <br>
            <br>
            <input type=button value="Modificar" onclick="ModificarAlumno()">
        </form>
        <a href=../menu.php> REGRESAR AL MENU</a>
    </center>
    </html>