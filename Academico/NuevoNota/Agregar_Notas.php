<?php
    session_start();
    include("../ConexionServidor.php");
    $IDusuarios = $_SESSION['Usuario'];
    $idalumno = $_GET["idalumno"];
    $Nota1 = $_GET["txtNota1"];
    $Nota2 = $_GET["txtNota2"];
    $Nota3 = $_GET["txtNota3"];
    $op = $_GET["ope"];
    $Promedio = round((($Nota1 + $Nota2 + $Nota3) / 3),1);
    if($op == "insert"){
        $sql ="insert into notas (idalumno, nota1, nota2, nota3, promedio, idusuarios) VALUES ('$idalumno', '$Nota1', '$Nota2', '$Nota3', '$Promedio', '$IDusuarios')";
    }else{
        $sql="update notas set nota1= '$Nota1' , nota2= '$Nota2'  , nota3= '$Nota3' , promedio = '$Promedio',idusuarios='$IDusuarios' where idalumno = $idalumno";
    } 
    mysqli_query($conexion,$sql) or die("Problemas al agrear el nuevo alumno:". mysqli_error($conexion));
    mysqli_close($conexion);
    echo "<center><h1>Notas ingresado correctamente</h1></center><br><br>";
?>