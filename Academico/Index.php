<?php
    include("Encabezado.php");
 ?>
<head>
    <title>Login</title>
</head>
<body>
    <form method="post" action="Login.php">
        <center>
	    <h1>LOGIN</h1>
            INGRESAR USUARIO:
            <input type="text" name="TxtUser">
            <br>
            <br>
            INGRESAR CONTRASEÑA:
            <input type="passwor" name="TxtPass">
            <br>
            <br>
            <input type="submit" value="INGRESAR">
        </center>
    </form>
    
</body>