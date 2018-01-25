<?php
$campos_requeridos = explode (",", $_POST["FTextRequire"]); 

//de cada valor de requeridos verificar si esta vacio 
foreach ($campos_requeridos as $valor) { 
  if ($_POST[$valor] == ""){ 
    //lanzar aviso Campo esta vacio 
  } 
}  
?> 
