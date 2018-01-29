<?php
session_start();
?>

<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Eliminar</title>
</head>
<body>

<div id="main">

<?php
$id=$_GET["id"];



include_once("DemoCollector.php");
$DemoCollectorObj = new DemoCollector();
$DemoCollectorObj->deleteDemo($numero_contacto);

echo "El usuario ha sido eliminado.....";

?>

<div><a href="show_demo.php">Volver al Inicio</a></div>
</div>

</body>
</html>
