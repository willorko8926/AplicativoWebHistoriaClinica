<?php
session_start();
$_SESSION['Nombre'] = $_POST['Nombre'];

if ($_SESSION['Nombre']== "admin"){

echo "Sesion Creada Exitosamente"; 
echo ("</br>");
echo "<a href='admin.php'>Ir a la Administracion</a>";
}else{
echo "error";
session_destroy();
echo ("</br>");
echo "<a href='index.php'>Volver al inicio </a>";
}
?>
