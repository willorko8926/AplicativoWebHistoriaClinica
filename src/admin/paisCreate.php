<?php
    session_start();
?>
<html lang="es">
<head>
</head>
<body>
    <header></header>
    <h2>Crear Nuevo País</h2>
    
    <form action="paisDML.php?tipoOperacion=1" method="post">
    <fieldset>
        <label>Código País: </label><input type="text" name="txtCodPais" autofocus><br><br>
        <label>Nombre del País: </label><input type="text" name="txtNomPais"><br>
    </fieldset>
    <fieldset>
        <button type="submit" style="padding:5px">Guardar</button> <a href="pais.php">Cancelar</a>
        <br>
    </fieldset>
    </form>
</body>
</html>