<?php
class Vehiculo
{
   public $id;
   public $placa;
   public $numeroMotor;
   public $numeroChasis;
   public $idMarca;
   public $modelo;
   public $idTipoVehiculo;

   function __construct($id,$placa,$numeroMotor,$numeroChasis,$idMarca,$modelo,$idTipoVehiculo){
      $this->id = $id;
      $this->placa = $placa;
      $this->numeroMotor = $numeroMotor;
      $this->numeroChasis = $numeroChasis;
      $this->idMarca = $idMarca;
      $this->modelo = $modelo;
      $this->idTipoVehiculo = $idTipoVehiculo;
   }
}
?>