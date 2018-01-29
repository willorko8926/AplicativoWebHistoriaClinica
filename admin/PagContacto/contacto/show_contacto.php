<?php
include_once("DemoCollector.php");

$id =1;

$DemoCollectorObj = new DemoCollector();
 echo "AGREGAR NUEVO CONTACTO";                                     
 echo "[<a href='insertar.php'>Nuevo</a>]";
 echo ("</br>");
 echo ("</br>");
                                  


foreach ($DemoCollectorObj->showDemos() as $c){
  echo "<div>";
 echo ("</br>");
  echo $c->getNumero_contacto() . "<>" .$c->getNombres() . "<>" .$c->getCorreo_electronico() . "<>" .$c->getAsunto() . "<>" .$c->getMensaje();
  echo "<>";
  echo "<a href='editar.php?id=".$c->getNumero_contacto()."'> Editar </a>";
  echo "-- ";
  echo "<a href='eliminar.php?id=".$c->getNumero_contacto()."'>Eliminar</a>";

  echo "</div>"; 
}
echo ("</br>");
echo ("</br>");
echo "[<a href='../admin.php'>VOLVER AL ADMINISTRADOR.</a>]";

?>
