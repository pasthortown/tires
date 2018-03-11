<?php
class Sucursal
{
   public $id;
   public $RUC;
   public $nombre;
   public $telefono1;
   public $telefono2;
   public $correoElectronico;
   public $idUbicacionPais;
   public $idUbicacionProvincia;
   public $idUbicacionCanton;
   public $idUbicacionParroquia;
   public $direccion;

   function __construct($id,$RUC,$nombre,$telefono1,$telefono2,$correoElectronico,$idUbicacionPais,$idUbicacionProvincia,$idUbicacionCanton,$idUbicacionParroquia,$direccion){
      $this->id = $id;
      $this->RUC = $RUC;
      $this->nombre = $nombre;
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