<?php
session_start();
include_once($_SERVER['DOCUMENT_ROOT'] . "/src/lib/pllGeneral.php");

if (mVerificaSesion() != 1){
    header('location:fault.php');
}
$pUserName = $_SESSION['SSUserName'];
?>
<?php
include_once("CMgPersonaContacto.php");
include_once("../db/Collector.php");
class CPersonaContactoCollector extends Collector
{


    function selectALL(){
        $rows = self::$db->getRows("select * from public.mg_personas_contactos");
        $arrayData = array();
        foreach ($rows as $i){
            $aux = new CMgPersona($i{'codigo_persona'}, $i{'direccion'}, $i{'celular'}, $i{'correo_electronico'}, $i{'codigo_pais_residencia'});
            array_push($arrayData, $aux);
        }
        return $arrayData;
    }
    
    function selectPK($codigo_persona){
        $row = self::$db->getRow("select * from public.mg_personas_contactos where codigo_persona = ?", array("{$codigo_persona}"));
        
        $lobPersonaContacto = new CMgPersona($row{'codigo_persona'}, $row{'direccion'}, $row{'celular'}, $row{'correo_electronico'}, $row{'codigo_pais_residencia'});
        
        return $lobPersonaContacto;
    }
    
    function updateALL($direccion, $celular, $correo_electronico, $codigo_pais_residencia){
        if (empty($codigo_persona)) {
            $updaterow = self::$db->updateRow("UPDATE public.mg_personas_contactos SET direccion = ?, celular = ?, correo_electronico = ?, codigo_pais_residencia = ? WHERE codigo_persona = ?", array("{$direccion}","{$celular}","{$correo_electronico}","{$codigo_pais_residencia}",$codigo_persona));
        }else{
            $updaterow = self::$db->updateRow("UPDATE public.mg_personas_contactos SET direccion = ?, celular = ?, correo_electronico = ?, codigo_pais_residencia = ?", array("{$direccion}","{$celular}","{$correo_electronico}","{$codigo_pais_residencia}",$codigo_persona));
        }
    }
    
    function insertREC($direccion, $celular, $correo_electronico, $codigo_pais_residencia){
        if (empty($codigo_persona)) {
            $insertarow = self::$db->insertRow("INSERT INTO public.mg_personas_contactos (direccion, celular, correo_electronico, codigo_pais_residencia) VALUES (?,?,?,?)", array ("{$direccion}","{$celular}","{$correo_electronico}","{$codigo_pais_residencia}"));
        }
        else{
            $insertarow = self::$db->insertRow("INSERT INTO public.mg_personas_contactos (direccion, celular, correo_electronico, codigo_pais_residencia) VALUES (?,?,?,?)", array ("{$direccion}","{$celular}","{$correo_electronico}","{$codigo_pais_residencia}"));
        }
    }    

    function deleteREC($id){
        $deleterow = self::$db->deleteRow("DELETE FROM public.mg_personas_contactos WHERE codigo_persona = ?", array("{$id}"));
    }
}

?>

