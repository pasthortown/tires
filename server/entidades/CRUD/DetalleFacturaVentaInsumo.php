<?php
class DetalleFacturaVentaInsumo
{
   public $id;
   public $idCabeceraFacturaVenta;
   public $idInsumoVenta;
   public $cantidad;
   public $descuentoPorcentaje;

   function __construct($id,$idCabeceraFacturaVenta,$idInsumoVenta,$cantidad,$descuentoPorcentaje){
      $this->id = $id;
      $this->idCabeceraFacturaVenta = $idCabeceraFacturaVenta;
      $this->idInsumoVenta = $idInsumoVenta;
      $this->cantidad = $cantidad;
      $this->descuentoPorcentaje = $descuentoPorcentaje;
   }
}
?>