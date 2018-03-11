<?php
class Empleado
{
   public $id;
   public $idPersona;
   public $idSucursal;
   public $idCargo;

   function __construct($id,$idPersona,$idSucursal,$idCargo){
      $this->id = $id;
      $this->idPersona = $idPersona;
      $this->idSucursal = $idSucursal;
      $this->idCargo = $idCargo;
   }
}
?>