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
    <header>
    </header> 
    <h2>Modificación de Registros de Consultas</h2>
    
    <?php
        include_once("CAtencionConsultasCollector.php");
        include_once("CHcAtencionConsultas.php");
        
        $id = $_GET["id"];
        $lobAtencionConsultasCollector = new CAtencionConsultasCollector();
        $lobAtencionConsultas = $lobAtencionConsultasCollector->selectPK($id);
    ?>
    
    <form action="atencionConsultasDML.php?tipoOperacion=2" method="post">
    <fieldset>
        <label>Núm. de Atención: </label>
        <input type="text" name="txtNumAtencion" value="<?php echo $lobAtencionConsultas->getNumeroAtencion(); ?>" readonly><br><br>
        <label>Código Usuario: </label>
        <input type="text" name="txtCodUsuario" value="<?php echo $lobAtencionConsultas->getCodigoPersona(); ?>"><br><br>
        <label>Código U. Médica: </label>
        <input type="text" name="txtCodUMedica" value="<?php echo $lobAtencionConsultas->getCodigoInstitucion(); ?>"><br><br>
        <label>Código Médico: </label>
        <input type="text" name="txtCodMedico" value="<?php echo $lobAtencionConsultas->getCodigoMedico(); ?>"><br><br>
        <label>Fecha Atención: </label>
        <input type="text" name="txtFechaAtencion" value="<?php echo $lobAtencionConsultas->getFechaAtencion(); ?>"><br><br>
        <label>Especialidad: </label>
        <input type="text" name="txtEspecialidad" value="<?php echo $lobAtencionConsultas->getEspecialidad(); ?>"><br><br>
        <label>Diagnóstico: </label>
        <input type="text" name="txtDiagnostico" value="<?php echo $lobAtencionConsultas->getDiagnostico(); ?>"><br>
    <fieldset>
        <button type="submit" style="padding:5px">Actualizar</button> <a href="atencionConsultas.php">Cancelar</a>
        <br>
    </fieldset>
    </form>
</body>
</html>
