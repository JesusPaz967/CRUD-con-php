<!DOCTYPE html>
<head>
    <title>Nuevo Alumno</title>
    <?php
        include("../Encabezado.php");
    ?>
    <script>
            function GuardarAlumno() {
                let Nombre = document.getElementById('txtNombrealumno').value;
                let FechaDeNacimiento= document.getElementById('txtFechaDeNacimiento').value;
                let Escuela = document.getElementById('comboEscuela').value;
                let Carrera = document.getElementById('comboCarrera').value;
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("respuesta").innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", "Alumno_Nuevo_Guardar.php?txtNombrealumno="+Nombre+"&txtFechaDeNacimiento="+FechaDeNacimiento+"&comboEscuela="+Escuela+"&comboCarrera="+Carrera, true);
                xhttp.send();
                document.getElementById('Formulario').reset();

            }
    </script>
</head>
<body>
    <center>
    <form id = "Formulario">
        <h1>NUEVO ALUMNO</h1>
        <h3>NOMBRE:</h3>
        <input type="text" id="txtNombrealumno"> 
        <br>
        <h3>FECHA DE NACIMIENTO:</h3>
        <input type="date" id="txtFechaDeNacimiento">
        <br>
        <h3>ESCUELA:</h3>
        <select id="comboEscuela">
            <option value="Tecnologia de la informacion">Tecnologia de la informacion</option>
            <option value="Industrias Alimentarias">Industrias Alimentarias</option>
            <option value="Mecanica Automotriz">Mecanica Automotriz</option>

        </select>
        <br>
        <h3>CARRERA:</h3>
        <select id="comboCarrera" multiple ="10" >
            <option value="Diseño Grafico">Diseño Grafico</option>
            <option value="Ingenieria de Software con IA">Ingenieria de Software con IA</option>
            <option value="Mecánico de Automotores Diesel">Mecánico de Automotores Diesel</option>
            <option value="Procesador Industrial de Alimentos">Procesador Industrial de Alimentos</option>
        </select>
        <br>
        <br>
        <input type=button value="Guardar" onclick="GuardarAlumno()">
    </form>
    <div id="respuesta">
    </div>
    <br>
    <a href=../menu.php> REGRESAR AL MENU</a>
    </center>
</body>
</html>