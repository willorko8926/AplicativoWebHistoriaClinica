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
    <h2>tabla persona</h2>
  


    <form action="personaContactoDML.php?tipoOperacion=1" method="post">
    <fieldset>
        <label>Codigo Persona : </label><input type="text" name="codigo_persona" autofocus><br><br>
        <label>Codigo Institucion : </label><input type="text" name="codigo_institucion"><br><br>
        <label>Codigo Medico: </label><input type="text" name="codigo_medico"><br><br>
        <label>Fecha Examen : </label><input type="text" name="fecha_examen"><br><br>
        <label>Tipo Examen : </label><input type="text" name="tipo_examen"><br><br>
        <label>Consideraciones Examen : </label><input type="text" name="consideraciones_examen"><br><br>
        <label>Explicacion Resultado de  Examen : </label><input type="text" name="explicacion_resultado"><br><br>

    </fieldset>
    <fieldset>
        <button type="submit" style="padding:5px">Guardar</button> <a href="examen.php">Cancelar</a>
        <br>
    </fieldset>
    </form>
</body>
</html>
