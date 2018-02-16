<?php
session_start();
include_once($_SERVER['DOCUMENT_ROOT'] . "/src/lib/pllGeneral.php");

if (mVerificaSesion() != 1){
    header('location:../../fault.php');
}
$pUserName = $_SESSION['SSUserName'];
?>
<html lang="es">
<head>
</head>
<body>
    <header></header>
    <h2>Crear Nuevo Contacto</h2>
    
    <form action="contactoDML.php?tipoOperacion=1" method="post">
    <fieldset>
        <label>Núm. Contacto: </label><input type="text" name="txtNumContacto" autofocus><br><br>
        <label>Nombres: </label><input type="text" name="txtNombres"><br><br>
        <label>Correo Electrónico: </label><input type="text" name="txtCorreo"><br><br>
        <label>Asunto: </label><input type="text" name="txtAsunto"><br><br>
        <label>Mensaje: </label><input type="text" name="txtMensaje"><br>
    </fieldset>
    <fieldset>
        <button type="submit" style="padding:5px">Guardar</button> <a href="contacto.php">Cancelar</a>
        <br>
    </fieldset>
    </form>
</body>
</html>
