<?php
session_start();
$Usuario = $_POST["TxtUser"];
$Pass= $_POST["TxtPass"];

include('ConexionServidor.php');
$sql = "select * from usuarios";
$registros = mysqli_query($conexion,$sql) or
die("Problemas en el select:".mysqli_error($conexion));

while($reg = mysqli_fetch_array($registros)){
    if ($Usuario == $reg['idusuarios'] && $Pass == $reg['clave']) {
        $_SESSION['Usuario'] = $reg['idusuarios'];
        header("Location:menu.php");
    }
}
echo "Datos no validos!";
mysqli_close($conexion);
?>

