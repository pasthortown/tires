<?php
class Contrato
{
   public $id;
   public $codigo;
   public $idCargo;
   public $idPersona;
   public $fechaInicio;
   public $fechaFin;
   public $idMotivoFin;

   function __construct($id,$codigo,$idCargo,$idPersona,$fechaInicio,$fechaFin,$idMotivoFin){
      $this->id = $id;
      $this->codigo = $codigo;
      $this->idCargo = $idCargo;
      $this->idPersona = $idPersona;
      $this->fechaInicio = $fechaInicio;
      $this->fechaFin = $fechaFin;
      $this->idMotivoFin = $idMotivoFin;
   }
}
?>