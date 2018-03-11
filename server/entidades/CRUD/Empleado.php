<?php
class Empleado
{
   public $id;
   public $idPersona;
   public $idSucursal;

   function __construct($id,$idPersona,$idSucursal){
      $this->id = $id;
      $this->idPersona = $idPersona;
      $this->idSucursal = $idSucursal;
   }
}
?>