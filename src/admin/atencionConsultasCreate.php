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
    <h2>Crear Nuevo Registro de Consulta</h2>
    
    <form action="atencionConsultasDML.php?tipoOperacion=1" method="post">
    <fieldset>
         <label>Núm. Atención: </label><input type="text" name="txtNumAtencion" autofocus><br><br>
        <label>Código Usuario: </label><input type="text" name="txtCodUsuario" autofocus><br><br>
        <label>Código U. Médica: </label><input type="text" name="txtCodUMedica"><br><br>
        <label>Código Médico: </label><input type="text" name="txtCodMedico"><br><br>
        <label>Fecha de Atención: </label><input type="text" name="txtFechaAtencion"><br><br>
        <label>Especialidad: </label><input type="text" name="txtEspecialidad"><br><br>
        <label>Diagnóstico: </label><input type="text" name="txtDiagnostico"><br><br>
    </fieldset>
    <fieldset>
        <button type="submit" style="padding:5px">Guardar</button> <a href="atencionConsultas.php">Cancelar</a>
        <br>
    </fieldset>
    </form>
</body>
</html>
