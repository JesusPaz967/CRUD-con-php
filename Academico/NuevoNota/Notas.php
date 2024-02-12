<?php
    include("../Encabezado.php");
    include("../ConexionServidor.php");
    echo"<center><h2>NUEVA NOTAS</h1></center>";
    $sql = "select * from alumnos";
    $registros = mysqli_query($conexion,$sql) or die("Problemas en el select:".mysqli_error($conexion));
?>
<header>
    <script>
            function Notas() {
                let id = document.getElementById('idAlumno').value;
                let nota1 = document.getElementById('txtNota1').value;
                let nota2 = document.getElementById('txtNota2').value;
                let nota3 = document.getElementById('txtNota3').value;
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("res").innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", "Agregar_Notas.php?idalumno="+id+"&txtNota1="+nota1+"&txtNota2="+nota2+"&txtNota3="+nota3+"&op=insert", true);
                xhttp.send();

            }
    </script>
</header>
<center>
<body>
    <div id= "res">
    </div>
    <form>
        <br>
        ALUMNO:
        <select id = "idAlumno">
             <?php 
             while($reg = mysqli_fetch_array($registros)){
                echo "<option value=$reg[idalumno]>$reg[nombre]</option>";
             }?>
        </select>
        <br>
        <br>
        Nota 1:
        <input type="text" id="txtNota1" ><br>
        <br>
        Nota 2:
        <input type="text" id="txtNota2"><br>
        <br>
        Nota 3:
        <input type="text" id="txtNota3"><br>
        <br>
        <input type="button" value="Guardar" onclick="Notas()">
    </form>
    <a href=../menu.php> REGRESAR AL MENU</a>
</center>
</body>
