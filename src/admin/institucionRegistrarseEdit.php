<?php
  session_start();
?>
<html lang="es">
<head>
</head>
<body>
    <header>
    </header> 
    <h2>Modificación de Registros de Instituciones de salud</h2>
    
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