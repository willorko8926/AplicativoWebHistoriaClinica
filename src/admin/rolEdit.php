<?php
  session_start();
?>
<html lang="es">
<head>
</head>
<body>
    <header>
    </header> 
    <h2>Modificación de Rol</h2>
    
    <?php
        include_once("CRolCollector.php");
        include_once("CSgRol.php");
        
        $id = $_GET["id"];
        $lobRolCollector = new CRolCollector();
        $lobRol = $lobRolCollector->selectPK($id);
    ?>
    
    <form action="rolDML.php?tipoOperacion=2" method="post">
    <fieldset>
        <label>Código Rol: </label>
        <input type="text" name="txtCodRol" value="<?php echo $lobRol->getCodigoRol(); ?>" readonly><br><br>
        <label>Descripción: </label>
        <input type="text" name="txtDescripcion" value="<?php echo $lobRol->getDescripcion(); ?>"><br>
    </fieldset>
    <fieldset>
        <button type="submit" style="padding:5px">Actualizar</button> <a href="rol.php">Cancelar</a>
        <br>
    </fieldset>
    </form>
</body>
</html>