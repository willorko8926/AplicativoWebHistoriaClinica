<?php
    session_start();
?>
<html lang="es">
<head>
</head>
<body>
    <header></header>
    <h2>Crear Registro de Usuario</h2>
    
    <form action="atencionEmergenciasRegistrarseDML.php?tipoOperacion=1" method="post">
    <fieldset>
        <label>Núm. Atencion: </label><input type="text" name="txtNumeroAtencion" autofocus><br><br>
        <label>Cod. Persona: </label><input type="text" name="txtCodPersona"><br><br>
        <label>Cod. Institucion: </label><input type="text" name="txtCodInstitucion"><br><br>
        <label>Cod. Medico: </label><input type="text" name="txtCodMedico"><br><br>
        <label>Fecha de Atencion: </label><input type="text" name="txtFechaAtencion"><br><br>
        <label>Tipo de Emergencia: </label><input type="text" name="txtTipoEmergencia"><br><br>
        <label>Diagnostico: </label><input type="text" name="txtDiagnostico"><br><br>
      
    </fieldset>
    <fieldset>
        <button type="submit" style="padding:5px">Guardar</button> <a href="atencionEmergenciasRegistrarse.php">Cancelar</a>
        <br>
    </fieldset>
    </form>
</body>
</html>