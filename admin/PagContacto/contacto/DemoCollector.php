<?php

include_once('Demo.php');
include_once('../db/Collector.php');

class DemoCollector extends Collector
{
  
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM public.MG_CONTACTOS");        
    
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Demo($c{'numero_contacto'},$c{'nombres'},$c{'correo_electronico'},$c{'asunto'},$c{'mensaje'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }

  function showDemo($id){
    $row = self::$db->getRows("SELECT * FROM public.MG_CONTACTOS WHERE numero_contacto= ? ", array("{$id}"));

    $ObjDemo = new Demo($row[0]{'numero_contacto'},$row[0]{'nombres'},$row[0]{'correo_electronico'},$row[0]{'asunto'}, $row[0]{'mensaje'});
    return $ObjDemo;

}


function updateDemo($numero_contacto, $nombres, $correo_electronico, $asunto, $mensaje){
	$insertrow = self::$db->updateRow("UPDATE public.MG_CONTACTOS SET nombres= ?, correo_electronico= ?, asunto= ?, mensaje= ? WHERE numero_contacto= ?", array("{$nombre}", $id));

}

function deleteDemo($numero_contacto){
	$deleterow = self::$db->deleteRow("DELETE FROM public.MG_CONTACTOS WHERE numero_contacto= ?", array("{$id}"));

}

function createDemo($nombres, $correo_electronico, $asunto, $mensaje){
	$insertarrow = self::$db->insertRow("INSERT INTO public.MG_CONTACTOS (nombres, correo_electronico, asunto, mensaje) VALUES (?, ?, ?, ?)", array ("{$nombre}"));

}

}
?>