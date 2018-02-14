<?php
    session_start();
?>
<html lang="es">
<head>
</head>
<body>
    <header></header>
    <h2>tabla persona</h2>
    
    <form action="personaContactoDML.php?tipoOperacion=1" method="post">
    <fieldset>
        <label>Direccion : </label><input type="text" name="txtDireccion" autofocus><br><br>
        <label>Celular : </label><input type="text" name="txtCelular"><br><br>
        <label>Correo Electronico: </label><input type="text" name="txtCorreo"><br><br>
        <label>Codigo Pais Residencia : </label><input type="text" name="txtCodigoPais"><br><br>
        
    </fieldset>
    <fieldset>
        <button type="submit" style="padding:5px">Guardar</button> <a href="personaContacto.php">Cancelar</a>
        <br>
    </fieldset>
    </form>
</body>
</html>