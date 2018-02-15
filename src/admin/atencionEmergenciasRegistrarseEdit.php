<?php
  session_start();
?>
<html lang="es">
<head>
</head>
<body>
    <header>
    </header> 
    <h2>Modificación de Registros de Usuario</h2>
    
    <?php
        include_once("CRegAtencionEmergenciasCollector.php");
        include_once("CHcAtencionEmergencias.php");
        
        $id = $_GET["id"];
        $lobRegAtencionEmergenciasCollector = new CRegAtencionEmergenciasCollector();
        $lobRegAtencionEmergencias = $lobRegAtencionEmergenciasCollector->selectPK($id);
    ?>
    
    <form action="atencionEmergenciasRegistrarseDML.php?tipoOperacion=2" method="post">
    <fieldset>
        <label>Núm. Atencion: </label>
        <input type="text" name="txtNumeroAtencion" value="<?php echo $lobRegAtencionEmergencias->getNumeroAtencion(); ?>" readonly><br><br>
        <label>Cod. Persona: </label>
        <input type="text" name="txtCodPersona" value="<?php echo $lobRegAtencionEmergencias->getCodigoPersona(); ?>"><br><br>
        <label>Cod. Institucion: </label>
        <input type="text" name="txtCodInstitucion" value="<?php echo $lobRegAtencionEmergencias->getCodigoInstitucion(); ?>"><br><br>
        <label>Cod. Medico: </label>
        <input type="text" name="txtCodMedico" value="<?php echo $lobRegAtencionEmergencias->getCodigoMedico(); ?>"><br><br>
        <label>Fecha de Atencion: </label>
        <input type="text" name="txtFechaAtencion" value="<?php echo $lobRegAtencionEmergencias->getFechaAtencion(); ?>"><br><br>
        <label>Tipo de Emergencia: </label>
        <input type="text" name="txtTipoEmergencia" value="<?php echo $lobRegAtencionEmergencias->getTipoEmergencia(); ?>"><br><br>
        <label>Diagnostico: </label>
        <input type="text" name="txtDiagnostico" value="<?php echo $lobRegAtencionEmergencias->getDiagnostico(); ?>"><br><br>

      
        
    </fieldset>
    <fieldset>
        <button type="submit" style="padding:5px">Actualizar</button> <a href="atencionEmergenciasRegistrarse.php">Cancelar</a>
        <br>
    </fieldset>
    </form>
</body>
</html>