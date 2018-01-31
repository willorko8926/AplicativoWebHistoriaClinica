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
        include_once("CRegUsuarioCollector.php");
        include_once("CMgRegistroUsuario.php");
        
        $id = $_GET["id"];
        $lobRegUsuarioCollector = new CRegUsuarioCollector();
        $lobRegUsuario = $lobRegUsuarioCollector->selectPK($id);
    ?>
    
    <form action="registrarseDML.php?tipoOperacion=2" method="post">
    <fieldset>
        <label>Núm. Registro: </label>
        <input type="text" name="txtNumeroRegistro" value="<?php echo $lobRegUsuario->getNumeroRegistro(); ?>" readonly><br><br>
        <label>Núm. Identificación: </label>
        <input type="text" name="txtIdentificacion" value="<?php echo $lobRegUsuario->getNumeroIdentificacion(); ?>"><br><br>
        <label>Nombres: </label>
        <input type="text" name="txtNombres" value="<?php echo $lobRegUsuario->getNombres(); ?>"><br><br>
        <label>Apellidos: </label>
        <input type="text" name="txtApellidos" value="<?php echo $lobRegUsuario->getApellidos(); ?>"><br><br>
        <label>Sexo: </label>
        <input type="text" name="txtSexo" value="<?php echo $lobRegUsuario->getSexo(); ?>"><br><br>
        <label>Nacionalidad: </label>
        <input type="text" name="txtNacionalidad" value="<?php echo $lobRegUsuario->getNacionalidad(); ?>"><br><br>
        <label>Dirección: </label>
        <input type="text" name="txtDireccion" value="<?php echo $lobRegUsuario->getDireccion(); ?>"><br><br>
        <label>Celular: </label>
        <input type="text" name="txtCelular" value="<?php echo $lobRegUsuario->getCelular(); ?>"><br><br>
        <label>Correo Electrónico: </label>
        <input type="text" name="txtCorreo" value="<?php echo $lobRegUsuario->getCorreoElectronico(); ?>"><br><br>
        <label>País de Residencia: </label>
        <input type="text" name="txtCodigoPais" value="<?php echo $lobRegUsuario->getCodigoPaisResidencia(); ?>"><br>
    </fieldset>
    <fieldset>
        <button type="submit" style="padding:5px">Actualizar</button> <a href="registrarse.php">Cancelar</a>
        <br>
    </fieldset>
    </form>
</body>
</html>