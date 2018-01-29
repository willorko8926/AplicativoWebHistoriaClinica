<?php
include_once("RegistrarseCollector.php");

$id =1;

$RegistrarseCollectorObj = new RegistrarseCollector();
  echo "AGREGAR NUEVO OBJETO";                                     
 echo "[<a href='insertar.php'>Nuevo</a>]";
 echo ("</br>");
 echo ("</br>");
                                  


foreach ($RegistrarseCollectorObj->showRegistrarse() as $c){
  echo "<div>";
 echo ("</br>");
  echo $c->getCodigo_persona() . "<>" .$c->getNumero_identificacion() . "<>" .$c->getNombre(). "<>" .$c->getApellidos(). "<>" .$c->getSexo(). "<>" .$c->getNacionalidad() ;
  echo "<>";
  echo "<a href='editar.php?id=".$c->getCodigo_persona()."'> Editar </a>";
  echo "-- ";
  echo "<a href='eliminar.php?id=".$c->getCodigo_persona()."'>Eliminar</a>";

  echo "</div>"; 
}
echo ("</br>");
echo ("</br>");
echo "[<a href='../admin.php'>VOLVER AL ADMINISTRADOR.</a>]";

?>
