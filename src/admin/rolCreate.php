<?php
    session_start();
?>
<html lang="es">
<head>
</head>
<body>
    <header></header>
    <h2>Crear Nuevo Rol</h2>
    
    <form action="rolDML.php?tipoOperacion=1" method="post">
    <fieldset>
        <label>Código Rol: </label><input type="text" name="txtCodRol" autofocus><br><br>
        <label>Descripción: </label><input type="text" name="txtDescripcion"><br>
    </fieldset>
    <fieldset>
        <button type="submit" style="padding:5px">Guardar</button> <a href="rol.php">Cancelar</a>
        <br>
    </fieldset>
    </form>
</body>
</html>