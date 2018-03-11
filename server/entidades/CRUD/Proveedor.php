<?php
class Proveedor
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
   public $direccion;

   function __construct($id,$identificacion,$nombres,$apellidos,$telefono1,$telefono2,$correoElectronico,$idUbicacionPais,$idUbicacionProvincia,$idUbicacionCanton,$idUbicacionParroquia,$direccion){
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
      $this->direccion = $direccion;
   }
}
?>