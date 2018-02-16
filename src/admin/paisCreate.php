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
