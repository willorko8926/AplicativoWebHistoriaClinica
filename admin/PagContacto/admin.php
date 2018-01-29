<?php
session_start();
?>
<h1>ADMINISTRACION</h1>
<br/>

<?php
if(isset($_SESSION['Nombre'])){
echo "<p> Hola usuario:(" . $_SESSION['Nombre']. ")
[<a href='salir.php'>Salir</a>]";
?>
<br/>

<br/><br/>

<a href='contacto/show_contacto.php'>CONTACTO</a>
<br/><br/>

<a href='show_ciudad.php'>CIUDAD</a>
<br/><br/>

<a href='show_ciudad_demo.php'>DEMO_CIUDAD</a>

 <?php }else {?>
<br/>
error con la sesion
<?php } ?>
