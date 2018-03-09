<?php
class DetalleFacturaVentaServicio
{
   public $id;
   public $idCabeceraFacturaVenta;
   public $idServicioVenta;
   public $cantidad;
   public $idTecnicoLider;
   public $observaciones;
   public $descuentoPorcentaje;

   function __construct($id,$idCabeceraFacturaVenta,$idServicioVenta,$cantidad,$idTecnicoLider,$observaciones,$descuentoPorcentaje){
      $this->id = $id;
      $this->idCabeceraFacturaVenta = $idCabeceraFacturaVenta;
      $this->idServicioVenta = $idServicioVenta;
      $this->cantidad = $cantidad;
      $this->idTecnicoLider = $idTecnicoLider;
      $this->observaciones = $observaciones;
      $this->descuentoPorcentaje = $descuentoPorcentaje;
   }
}
?>