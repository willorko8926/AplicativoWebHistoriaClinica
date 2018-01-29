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

<h1>Insertar Un Registro</h1>


<form action="guardarRegistrarse.php" method="post">
            <fieldset>
		<label>Usuario</label>
		<input type="text" name="nombre" autofocus required /></br>
		</br>
                <button type="submit">Guardar</button>
        </fieldset>
	</form>

 

</body>
</html>
