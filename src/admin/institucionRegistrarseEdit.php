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
    
    <?php
        include_once("CRegIstitucionCollector.php");
        include_once("CHcInstitucion.php");
        
        $id = $_GET["id"];
        $lobRegInstitucionCollector = new CRegIstitucionCollector();
        $lobRegInstitucion = $lobRegInstitucionCollector->selectPK($id);
    ?>
    
    <form action="institucionRegistrarseDML.php?tipoOperacion=2" method="post">
    <fieldset>
        <label>Codigo Institucion: </label>
        <input type="text" name="txtCodigoInstitucion" value="<?php echo $lobRegInstitucion->getCodigoInstitucion(); ?>" ><br><br>
        <label>Nombre: </label>
        <input type="text" name="txtNombreInstitucion" value="<?php echo $lobRegInstitucion->getNombre(); ?>"><br><br>
        <label>Razon Social: </label>
        <input type="text" name="txtRazonSocial" value="<?php echo $lobRegInstitucion->getRazonSocial(); ?>"><br><br>
    </fieldset>
    <fieldset>
        <button type="submit" style="padding:5px">Actualizar</button> <a href="institucionRegistrarse.php">Cancelar</a>
        <br>
    </fieldset>
    </form>
</body>
</html>
