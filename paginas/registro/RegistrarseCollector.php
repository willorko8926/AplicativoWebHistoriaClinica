<?php

include_once('Registrarse.php');
include_once('../../superadmin/db/Collector.php');

class RegistrarseCollector extends Collector
{
  
  function showRegistrarse() {
    $rows = self::$db->getRows("SELECT * FROM MG_PERSONAS ");        
    
    $arrayRegistrarse= array();        
    foreach ($rows as $c){
      $aux = new Registrarse($c{'codigo_persona'},$c{'numero_identificacion'},$c{'nombre'},$c{'apellidos'},$c{'sexo'},$c{'nacionalidad'});
      array_push($arrayRegistrarse, $aux);
    }
    return $arrayRegistrarse;        
  }

  function showRegistrarse($id){
    $row = self::$db->getRows("SELECT * FROM MG_PERSONAS where codigo_persona= ? ", array("{$id}"));

    $ObjRegistrarse = new Registrarse($row[0]{'codigo_persona'},$row[0]{'numero_identificacion'},$row[0]{'nombre'},$row[0]{'apellidos'},$row[0]{'sexo'},$row[0]{'nacionalidad'});
    return $ObjRegistrarse;

}


function updateDemo($codigo_persona,$numero_identificacion,$nombre,$apellidos,$sexo,$nacionalidad){
	$insertrow = self::$db->updateRow("UPDATE MG_PERSONAS SET numero_identificacion= ? , nombre= ? , apellidos= ? , sexo= ? , nacionalidad= ?  WHERE codigo_persona= ?", array("{$numero_identificacion}","{$nombre}","{$apellidos}","{$sexo}","{$nacionalidad}", $codigo_persona));

}

function deleteDemo($codigo_persona){
	$deleterow = self::$db->deleteRow("DELETE FROM MG_PERSONAS WHERE codigo_persona= ?", array("{$codigo_persona}"));

}

function createDemo($numero_identificacion,$nombre,$apellidos,$sexo,$nacionalidad){
	$insertarrow = self::$db->insertRow("INSERT INTO MG_PERSONAS (numero_identificacion, nombre, apellidos, sexo, nacionalidad) VALUES (?,?,?,?,?)", array ("{$numero_identificacion}","{$nombre}","{$apellidos}","{$sexo}","{$nacionalidad}"S));

}

}
?>

