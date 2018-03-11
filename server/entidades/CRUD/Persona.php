<?php
class Persona
{
   public $id;
   public $identificacion;
   public $nombres;
   public $apellidos;
   public $telefono1;
   public $telefono2;
   public $correoElectronico;
   public $idUbicacionPais;
   public $idUbicacionProvincia;
   public $idUbicacionCanton;
   public $idUbicacionParroquia;
   public $idGenero;
   public $direccion;

   function __construct($id,$identificacion,$nombres,$apellidos,$telefono1,$telefono2,$correoElectronico,$idUbicacionPais,$idUbicacionProvincia,$idUbicacionCanton,$idUbicacionParroquia,$idGenero,$direccion){
      $this->id = $id;
      $this->identificacion = $identificacion;
      $this->nombres = $nombres;
      $this->apellidos = $apellidos;
      $this->telefono1 = $telefono1;
      $this->telefono2 = $telefono2;
      $this->correoElectronico = $correoElectronico;
      $this->idUbicacionPais = $idUbicacionPais;
      $this->idUbicacionProvincia = $idUbicacionProvincia;
      $this->idUbicacionCanton = $idUbicacionCanton;
      $this->idUbicacionParroquia = $idUbicacionParroquia;
      $this->idGenero = $idGenero;
      $this->direccion = $direccion;
   }
}
?>