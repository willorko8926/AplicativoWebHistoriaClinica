<?php
session_start();
include_once($_SERVER['DOCUMENT_ROOT'] . "/src/lib/pllGeneral.php");

if (mVerificaSesion() != 1){
    header('location:fault.php');
}
$pUserName = $_SESSION['SSUserName'];
?>
<?php
class CSgRol
{
    private $codigoRol;
    private $descripcion;
    
     function __construct($pstCodigoRol, $pstDescripcion) {
       $this->codigoRol = $pstCodigoRol;
       $this->descripcion = $pstDescripcion;
     }
     
     function setCodigoRol($pstCodigoRol){
       $this->codigoRol = $pstCodigoRol;
     }
     function getCodigoRol(){
       return $this->codigoRol;
     }

     function setDescripcion($pstDescripcion){
       $this->descripcion = $pstDescripcion;
     }
     function getDescripcion(){
       return $this->descripcion;
     }
}
?> 
