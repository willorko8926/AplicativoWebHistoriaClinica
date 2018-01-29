<?php
session_start();
?>

<?php
if(isset($_SESSION['Nombre'])){
	session_destroy();
	echo "se ha cerrado sesion exitosamente <br/>";
	echo "<a href='index.php'>Salir</a>";
}else{
	echo "ERROR.... <br/>";
	echo "<a href='index.php'>Salir</a>";
}

?>
