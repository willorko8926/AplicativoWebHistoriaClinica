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
        include_once("CRegMedicosCollector.php");
        include_once("medicosRegistrarse.php");
        
        $id = $_GET["id"];
        $lobRegMedicosCollector = new CRegMedicosCollector();
        $lobRegMedicos = $lobRegMedicosCollector->selectPK($id);
    ?>
    
    <form action="medicosRegistrarseDML.php?tipoOperacion=2" method="post">
    <fieldset>
        <label>Cod. Persona: </label>
        <input type="text" name="txtCodPersona" value="<?php echo $lobRegMedicos->getCodigoPersona(); ?>" readonly><br><br>
        <label>Especialidad: </label>
        <input type="text" name="txtEspecialidad" value="<?php echo $lobRegMedicos->getEspecialidad(); ?>"><br><br>
        <label>Estado: </label>
        <input type="text" name="txtEstado" value="<?php echo $lobRegMedicos->getEstado(); ?>"><br>
     
    </fieldset>
    <fieldset>
        <button type="submit" style="padding:5px">Actualizar</button> <a href="medicosRegistrarse.php">Cancelar</a>
        <br>
    </fieldset>
    </form>
</body>
</html>
