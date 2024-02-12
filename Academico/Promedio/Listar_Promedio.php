<?php
include("../Encabezado.php");
include("../ConexionServidor.php");
?>
<head>
    <title>Lista de Promedio</title>
    <script>
            function Listar() {
                let Buscador = document.getElementById('txtbuscador').value;
                let btn = document.getElementById('BtnBuscar').value;
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("Lista").innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", "Tabla.php?BtnBuscar="+btn+"&txtbuscador="+Buscador, true);
                xhttp.send();
            }
    </script>
</head>
<body onload="Listar()">
    <center>
    <form>
        BUSCADOR: <input id ="txtbuscador" >
        <input type="button" value="Buscar" id="BtnBuscar" onclick="Listar()">
    </form>
     <div id = "Lista"> </div>
     <br>
    <a href=../menu.php> REGRESAR AL MENU</a>
    </center>
</body>

