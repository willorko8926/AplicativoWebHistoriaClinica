<?php
class CMgPersonaContacto
{
    private $codigoPersona;
    private $direccion;
    private $celular;
    private $correoElectronico;
    private $codigoPaisResidencia;
    
     function __construct($pinCodigoPersona, $pstDireccion, $pstCelular, $pstCorreoElectronico, $pstCodigoPaisRes) {
       $this->codigoPersona = $pinCodigoPersona;
       $this->direccion = $pstDireccion;
       $this->celular = $pstCelular;
       $this->correoElectronico = $pstCorreoElectronico;
       $this->codigoPaisResidencia = $pstCodigoPaisRes;
     }
     
     function setCodigoPersona($pinCodigoPersona){
       $this->codigoPersona = $pinCodigoPersona;
     }
     function getCodigoPersona(){
       return $this->codigoPersona;
     }

     function setDireccion($pstDireccion){
       $this->direccion = $pstDireccion;
     }
     function getDireccion(){
       return $this->direccion;
     }

     function setCelular($pstCelular){
       $this->celular = $pstCelular;
     }
     function getCelular(){
       return $this->celular;
     }

     function setCorreoElectronico($pstCorreoElectronico){
       $this->correoElectronico = $pstCorreoElectronico;
     }
     function getCorreoElectronico(){
       return $this->correoElectronico;
     }

     function setCodigoPaisResidencia($pstCodigoPaisRes){
       $this->codigoPaisResidencia = $pstCodigoPaisRes;
     }
     function getCodigoPaisResidencia(){
       return $this->codigoPaisResidencia;
     }
}
?> 
