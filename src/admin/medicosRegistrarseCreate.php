<?php
    session_start();
?>
<html lang="es">
<head>
</head>
<body>
    <header></header>
    <h2>Crear Registro de Medicos </h2>
    
    <form action="medicosRegistrarseDML.php?tipoOperacion=1" method="post">
    <fieldset>
        <label>Cod.Persona: </label><input type="text" name="txtCodPersona" autofocus><br><br>
        <label>Especialidad: </label><input type="text" name="txtEspecialidad"><br><br>
        <label>Estado: </label><input type="text" name="txtEstado"><br><br>

    </fieldset>
    <fieldset>
        <button type="submit" style="padding:5px">Guardar</button> <a href="medicosRegistrarse.php">Cancelar</a>
        <br>
    </fieldset>
    </form>
</body>
</html>