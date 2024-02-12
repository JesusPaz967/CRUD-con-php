<?php
    include("../Encabezado.php");
    include("../ConexionServidor.php");
    echo"<center><h2>NUEVA NOTAS</h1></center>";
    $idalumno = $_GET['idalumno'];
    $sql = "select alu.idalumno, alu.nombre , nta.* from alumnos alu left join notas nta on nta.idalumno = alu.idalumno where alu.idalumno = $idalumno";
    $registros = mysqli_query($conexion,$sql) or die("Problemas en el select:".mysqli_error($conexion));
    $reg = mysqli_fetch_array($registros);
    $nombre = $reg['nombre'];
    if($reg['promedio'] == ""){
        $n1 = ""; 
        $n2 = ""; 
        $n3 = ""; 
        $op = "insert";
    }else{
        $n1 = $reg['nota1']; 
        $n2 = $reg['nota2']; 
        $n3 = $reg['nota3']; 
        $op = "update";
    }
?>
<header>
    <script>
            function Notas() {
                let IDalumno = document.getElementById('idalumno').value;
                let nota1 = document.getElementById('txtNota1').value;
                let nota2 = document.getElementById('txtNota2').value;
                let nota3 = document.getElementById('txtNota3').value;
                let op = document.getElementById('opcion').value;
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("res").innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", "Agregar_Notas.php?idalumno="+IDalumno+"&txtNota1="+nota1+"&txtNota2="+nota2+"&txtNota3="+nota3+"&ope="+op, true);
                xhttp.send();
            }
    </script>
</header>
<body>
<center>
    <div id ="res"></div>
    <form >
        CODIGO DEL ALUMNO: <?php echo $idalumno?>
        <br> <br> 
        ALUMNO: <?php echo $nombre;?>
        <br><br>
        <input type="hidden" id="idalumno" value=<?php echo $idalumno?>><br>
        <input type="hidden" id="opcion" value=<?php echo $op?>><br>
        Nota 1:
        <input type="text" id="txtNota1" value=<?php echo $n1?>><br>
        <br>
        Nota 2:
        <input type="text" id="txtNota2"value=<?php echo $n2?>><br>
        <br>
        Nota 3:
        <input type="text" id="txtNota3"value=<?php echo $n3?>><br>
        <br>
        <input type=button value=Guardar onclick=Notas()>
    </form>
    <br>
    <a href=../menu.php> REGRESAR AL MENU</a>
</center>
</body>
