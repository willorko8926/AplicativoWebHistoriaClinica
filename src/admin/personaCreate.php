<?php
    session_start();
?>
<html lang="es">
<head>
</head>
<body>
    <header></header>
    <h2>tabla persona</h2>
    
    <form action="personaDML.php?tipoOperacion=1" method="post">
    <fieldset>
        <label>Núm. Identificación: </label><input type="text" name="txtIdentificacion" autofocus><br><br>
        <label>Nombres: </label><input type="text" name="txtNombres"><br><br>
        <label>Apellidos: </label><input type="text" name="txtApellidos"><br><br>
        <label>Sexo: </label><input type="text" name="txtSexo"><br><br>
        <label>Nacionalidad: </label><input type="text" name="txtNacionalidad"><br><br>
        
    </fieldset>
    <fieldset>
        <button type="submit" style="padding:5px">Guardar</button> <a href="persona.php">Cancelar</a>
        <br>
    </fieldset>
    </form>
</body>
</html>