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
    <header>
    </header> 
    <h2>Modificación de Contacto</h2>
    
    <?php
        include_once("CContactoCollector.php");
        include_once("CMgContacto.php");
        
        $id = $_GET["id"];
        $lobContactoCollector = new CContactoCollector();
        $lobContacto = $lobContactoCollector->selectPK($id);
    ?>
    
    <form action="contactoDML.php?tipoOperacion=2" method="post">
    <fieldset>
        <label>Núm. Contacto: </label>
        <input type="text" name="txtNumContacto" value="<?php echo $lobContacto->getNumeroContacto(); ?>" readonly><br><br>
        <label>Nombres: </label>
        <input type="text" name="txtNombres" value="<?php echo $lobContacto->getNombres(); ?>"><br><br>
        <label>Correo Electrónico: </label>
        <input type="text" name="txtCorreo" value="<?php echo $lobContacto->getCorreoElectronico(); ?>"><br><br>
        <label>Asunto: </label>
        <input type="text" name="txtAsunto" value="<?php echo $lobContacto->getAsunto(); ?>"><br><br>
        <label>Mensaje: </label>
        <input type="text" name="txtMensaje" value="<?php echo $lobContacto->getMensaje(); ?>"><br>
    </fieldset>
    <fieldset>
        <button type="submit" style="padding:5px">Actualizar</button> <a href="contacto.php">Cancelar</a>
        <br>
    </fieldset>
    </form>
</body>
</html>
