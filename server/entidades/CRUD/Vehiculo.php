<?php
class Vehiculo
{
   public $id;
   public $placa;
   public $numeroMotor;
   public $numeroChasis;
   public $marca;
   public $modelo;
   public $idTipoVehiculo;

   function __construct($id,$placa,$numeroMotor,$numeroChasis,$marca,$modelo,$idTipoVehiculo){
      $this->id = $id;
      $this->placa = $placa;
      $this->numeroMotor = $numeroMotor;
      $this->numeroChasis = $numeroChasis;
      $this->marca = $marca;
      $this->modelo = $modelo;
      $this->idTipoVehiculo = $idTipoVehiculo;
   }
}
?>