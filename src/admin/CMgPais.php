<?php
session_start();
include_once($_SERVER['DOCUMENT_ROOT'] . "/src/lib/pllGeneral.php");

if (mVerificaSesion() != 1){
    header('location:fault.php');
}
$pUserName = $_SESSION['SSUserName'];
?>
<?php
class CMgPais
{
    private $codigoPais;
    private $nombre;
    
     function __construct($pstCodigoPais, $pstNombre) {
       $this->codigoPais = $pstCodigoPais;
       $this->nombre = $pstNombre;
     }
     
     function setCodigoPais($pstCodigoPais){
       $this->codigoPais = $pstCodigoPais;
     }
     function getCodigoPais(){
       return $this->codigoPais;
     }

     function setNombre($pstNombre){
       $this->nombre = $pstNombre;
     }
     function getNombre(){
       return $this->nombre;
     }
}
?> 
