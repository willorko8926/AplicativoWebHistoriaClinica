<?php

class Registrarse

{
    private $codigo_persona;
    private $numero_identificacion;
    private $nombre;
    private $apellidos;
    private $sexo;
    private $nacionalidad;
    
     function __construct($codigo_persona, $numero_identificacion, $nombre, $apellidos, $sexo, $nacionalidad) {

       $this->codigo_persona = $codigo_persona;
       $this->numero_identificacion = $numero_identificacion;
       $this->nombre = $nombre;
       $this->apellidos = $apellidos;
       $this->sexo = $sexo;
       $this->nacionalidad = $nacionalidad;
     }
    
     function setCodigo_persona($codigo_persona){
      $this->codigo_persona = $codigo_persona;
     } 
     function getCodigo_persona(){
       return $this->codigo_persona;
     } 
     function setNumero_identificacion($numero_identificacion){
       $this->numero_identificacion = $numero_identificacion;
     } 
     function getNumero_identificacion(){
       return $this->numero_identificacion;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 

     function setApellidos($apellidos){
       $this->apellidos = $apellidos;
     } 
     function getApellidos(){
       return $this->apellidos;
     } 
     function setSexo ($sexo ){
       $this->sexo = $sexo;
     } 
     function getSexo (){
       return $this->sexo ;
     } 
     function setNacionalidad($nacionalidad){
       $this->nacionalidad = $nacionalidad;
     } 
     function getNacionalidad(){
       return $this->nacionalidad;
     } 
}

?> 
