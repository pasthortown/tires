<?php
class Sucursal
{
   public $id;
   public $RUC;
   public $nombre;
   public $telefono1;
   public $telefono2;
   public $correoElectronico;
   public $direccion;
   public $ubicacion;

   function __construct($id,$RUC,$nombre,$telefono1,$telefono2,$correoElectronico,$direccion,$ubicacion){
      $this->id = $id;
      $this->RUC = $RUC;
      $this->nombre = $nombre;
      $this->telefono1 = $telefono1;
      $this->telefono2 = $telefono2;
      $this->correoElectronico = $correoElectronico;
      $this->direccion = $direccion;
      $this->ubicacion = $ubicacion;
   }
}
?>