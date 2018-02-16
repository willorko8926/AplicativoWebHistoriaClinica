<?php
session_start();
include_once($_SERVER['DOCUMENT_ROOT'] . "/src/lib/pllGeneral.php");

if (mVerificaSesion() != 1){
    header('location:fault.php');
}
$pUserName = $_SESSION['SSUserName'];
?>
<html lang="es">
<head>
</head>
<body>
    <header></header>
    
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
