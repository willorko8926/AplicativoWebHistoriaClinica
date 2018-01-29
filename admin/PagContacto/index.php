<?php
session_start();
?>

<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Formulario</title>
</head>
<body>
	<form action = "login.php" method = "post">
	<fielset>
	<label> Nombre </label>
	<input type="text" name = "Nombre" /> </br>
	
	<button type ="submit"> enviar</button>
	</fielset>
	</form>

</body>
</html>
