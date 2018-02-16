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
    <h2>Crear Registro de Institucion</h2>
    
    <form action="institucionRegistrarseDML.php?tipoOperacion=1" method="post">
    <fieldset>
        <label>Codigo de la institucion: </label><input type="text" name="txtCodigoInstitucion" autofocus><br><br>
        <label>Nombre de la institucion:  </label><input type="text" name="txtNombreInstitucion"><br><br>
         <label>Razon: </label><input type="text" name="txtRazonSocial"><br><br>
  
    </fieldset>
    <fieldset>
        <button type="submit" style="padding:5px">Guardar</button> <a href="institucionRegistrarse.php">Cancelar</a>
        <br>
    </fieldset>
    </form>
</body>
</html>
