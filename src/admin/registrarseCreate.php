<?php
    session_start();
?>
<html lang="es">
<head>
</head>
<body>
    <header></header>
    <h2>Crear Registro de Usuario</h2>
    
    <form action="registrarseDML.php?tipoOperacion=1" method="post">
    <fieldset>
        <label>Núm. Identificación: </label><input type="text" name="txtIdentificacion" autofocus><br><br>
        <label>Nombres: </label><input type="text" name="txtNombres"><br><br>
        <label>Apellidos: </label><input type="text" name="txtApellidos"><br><br>
        <label>Sexo: </label><input type="text" name="txtSexo"><br><br>
        <label>Nacionalidad: </label><input type="text" name="txtNacionalidad"><br><br>
        <label>Dirección: </label><input type="text" name="txtDireccion"><br><br>
        <label>Celular: </label><input type="text" name="txtCelular"><br><br>
        <label>Correo Electrónico: </label><input type="text" name="txtCorreo"><br><br>
        <label>País de Residencia: </label><input type="text" name="txtCodigoPais"><br>
    </fieldset>
    <fieldset>
        <button type="submit" style="padding:5px">Guardar</button> <a href="registrarse.php">Cancelar</a>
        <br>
    </fieldset>
    </form>
</body>
</html>