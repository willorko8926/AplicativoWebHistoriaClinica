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
$numero_contacto = $_POST["numero_contacto"];
$nombres= $_POST["nombres"];
$correo_electronico = $_POST["correo_electronico"];
$asunto= $_POST["asunto"];
$mensaje= $_POST["mensaje"];


include_once("DemoCollector.php");
$DemoCollectorObj = new DemoCollector();
$DemoCollectorObj->updateDemo($numero_contacto, $nombres, $correo_electronico, $asunto, $mensaje);

echo "Actualizado... </br>";

?>

<div><a href="index.php">Volver al Inicio</a></div>
</div>

</body>
</html>
