<html>
<head>
</head>
<body>

<div id="main">

<?php
$valor = $_POST["nombre"];

echo 'Hola ' .htmlspecialchars($valor) . '!';
include_once("RegistrarseCollector.php");

$RegistrarseCollectorObj = new RegistrarseCollector();
$ObjRegistrarse = $RegistrarseCollectorObj->createRegistrarse($valor);

echo "Se ha guardado correctamente </br>";

?>

<div><a href="show_Registrarse.php">Volver al Inicio</a></div>
</div>
</body>
</html>
