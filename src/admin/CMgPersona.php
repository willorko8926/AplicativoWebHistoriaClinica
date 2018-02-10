<?php
class CMgPersona
{
    private $codigoPersona;
    private $numeroIdentificacion;
    private $nombres;
    private $apellidos;
    private $sexo;
    private $nacionalidad;
    
     function __construct($pinCodigoPersona, $pstNumeroIdent, $pstNombres, $pstApellidos, $pchSexo, $pstNacionalidad) {
       $this->codigoPersona = $pinCodigoPersona;
       $this->numeroIdentificacion = $pstNumeroIdent;
       $this->nombres = $pstNombres;
       $this->apellidos = $pstApellidos;
       $this->sexo = $pchSexo;
       $this->nacionalidad = $pstNacionalidad;
     }
     
     function setCodigoPersona($pinCodigoPersona){
       $this->codigoPersona = $pinCodigoPersona;
     }
     function getCodigoPersona(){
       return $this->codigoPersona;
     }

     function setNumeroIdentificacion($pstNumeroIdent){
       $this->numeroIdentificacion = $pstNumeroIdent;
     }
     function getNumeroIdentificacion(){
       return $this->numeroIdentificacion;
     }

     function setNombres($pstNombres){
       $this->nombres = $pstNombres;
     }
     function getNombres(){
       return $this->nombres;
     }

     function setApellidos($pstApellidos){
       $this->apellidos = $pstApellidos;
     }
     function getApellidos(){
       return $this->apellidos;
     }

     function setSexo($pchSexo){
       $this->sexo = $pchSexo;
     }
     function getSexo(){
       return $this->sexo;
     }

     function setNacionalidad($pstNacionalidad){
       $this->nacionalidad = $pstNacionalidad;
     }
     function getNacionalidad(){
       return $this->nacionalidad;
     }
}
?> 
