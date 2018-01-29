<?php

class Demo
{
    private $numero_contacto;
    private $nombres;
    private $correo_electronico;
    private $asunto;
    private $mensaje;

    
    
     function __construct($numero_contacto, $nombres, $correo_electronico, $asunto, $mensaje) {
       $this->numero_contacto = $numero_contacto;
       $this->nombres = $nombres;
       $this->correo_electronico = $correo_electronico;
       $this->asunto = $asunto;
       $this->mensaje = $mensaje;
     }
    
     function setNumero_contacto($numero_contacto){
       $this->numero_contacto = $numero_contacto;
     } 
     function getnumero_contacto(){
       return $this->numero_contacto;
     } 
     function setNombres($nombres){
       $this->nombres = $nombres;
     } 
     function getNombres(){
       return $this->nombres;
     }
     function setCorreo_electronico($correo_electronico){
       $this->correo_electronico = $correo_electronico;
     } 
     function getCorreo_electronico(){
       return $this->correo_electronico;
     }  
     function setAsunto($asunto){
       $this->asunto = $asunto;
     } 
     function getAsunto(){
       return $this->asunto;
     } 
     function setMensaje($mensaje){
       $this->mensaje = $mensaje;
     } 
     function getMensaje(){
       return $this->mensaje;
     } 
}

?> 
