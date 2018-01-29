<?php
  session_start();

?>
<!doctype html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Insertar</title>
</head>
<body>

<h1>Insertar Contacto</h1>


<form action="guardarDemo.php" method="post">
            <fieldset>
		<label>Número Contacto</label>
        <input type="text" name="numero_contacto" value="<?php echo $ObjDemo->getNumero_contacto(); ?>" readonly /></br></br>
        <label>Nombres</label>
        <input type="text" name="nombres" value="<?php echo $ObjDemo->getNombres(); ?>" autofocus required /></br></br>
        <label>Correo Electrónico</label>
        <input type="text" name="correo_electronico" value="<?php echo $ObjDemo->getCorreo_electronico(); ?>" autofocus required /></br></br>
        <label>Asunto</label>
        <input type="text" name="asunto" value="<?php echo $ObjDemo->getAsunto(); ?>" autofocus required /></br></br>
        <label>Mensaje</label>
        <input type="text" name="mensaje" value="<?php echo $ObjDemo->getMensaje(); ?>" autofocus required /></br></br>
             <button type="submit">Actualizar</button>
        </br></br>
                <button type="submit">Guardar</button>
            </fieldset>
	</form>

 

</body>
</html>
