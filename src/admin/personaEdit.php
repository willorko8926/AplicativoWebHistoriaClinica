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
    <h2>Modificación de Personas</h2>
    
    <?php
        include_once("CPersonaCollector.php");
        include_once("CMgPersona.php");
        
        $id = $_GET["id"];
        $lobPersonaCollector = new CPersonaCollector();
        $lobPersona = $lobPersonaCollector->selectPK($id);
    ?>
    
    <form action="personaDML.php?tipoOperacion=2" method="post">
    <fieldset>

        <label>ID : </label>
        <input type="text" name="txtCodigoPersona" value="<?php echo $lobPersona->getCodigo_Persona(); ?>" readonly>    
        <br><br>

        <label>Núm. Identificación: </label>
        <input type="text" name="txtIdentificacion" value="<?php echo $lobPersona->getNumero_Identificacion(); ?>">
        <br><br>

        <label>Nombres: </label>
        <input type="text" name="txtNombres" value="<?php echo $lobPersona->getNombres(); ?>">
        <br><br>

        <label>Apellidos: </label>
        <input type="text" name="txtApellidos" value="<?php echo $lobPersona->getApellidos(); ?>">
        <br><br>

        <label>Sexo: </label>
        <input type="text" name="txtSexo" value="<?php echo $lobPersona->getSexo(); ?>">
        <br><br>

        <label>Nacionalidad: </label>
        <input type="text" name="txtNacionalidad" value="<?php echo $lobPersona->getNacionalidad(); ?>"><br><br>
        
    </fieldset>
    <fieldset>
        <button type="submit" style="padding:5px">Actualizar</button> <a href="persona.php">Cancelar</a>
        <br>
    </fieldset>
    </form>
</body>
</html>
