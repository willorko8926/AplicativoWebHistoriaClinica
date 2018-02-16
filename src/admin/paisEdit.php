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
    <h2>Modificación de País</h2>
    
    <?php
        include_once("CPaisCollector.php");
        include_once("CMgPais.php");
        
        $id = $_GET["id"];
        $lobPaisCollector = new CPaisCollector();
        $lobPais = $lobPaisCollector->selectPK($id);
    ?>
    
    <form action="paisDML.php?tipoOperacion=2" method="post">
    <fieldset>
        <label>Código País: </label>
        <input type="text" name="txtCodPais" value="<?php echo $lobPais->getCodigoPais(); ?>" readonly><br><br>
        <label>Descripción: </label>
        <input type="text" name="txtNomPais" value="<?php echo $lobPais->getNombre(); ?>"><br>
    </fieldset>
    <fieldset>
        <button type="submit" style="padding:5px">Actualizar</button> <a href="pais.php">Cancelar</a>
        <br>
    </fieldset>
    </form>
</body>
</html>
