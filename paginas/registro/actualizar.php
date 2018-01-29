<?php
session_start();
?>

<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Actualizar</title>
</head>
<body>

<div id="main">

<?php
$codigo_persona = $_POST["codigo_persona"];
$numero_identificacion= $_POST["numero_identificacion"];
$nombre = $_POST["nombre"];
$apellidos= $_POST["apellidos"];
$sexo = $_POST["sexo"];
$nacionalidad = $_POST["nacionalidad"];



include_once("RegistrarseCollector.php");
$RegistrarseCollectorObj = new RegistrarseCollector();
$RegistrarseCollectorObj->updateRegistrarse($codigo_persona,$numero_identificacion,$nombre,$apellidos,$sexo,$nacionalidad);

echo "Actualizado... </br>";

?>

<div><a href="show_Registrarse.php">Volver al Inicio</a></div>
</div>

</body>
</html>
