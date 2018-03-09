<?php
class DetalleFacturaVentaProducto
{
   public $id;
   public $idCabeceraFacturaVenta;
   public $idProductoVenta;
   public $cantidad;
   public $descuentoPorcentaje;

   function __construct($id,$idCabeceraFacturaVenta,$idProductoVenta,$cantidad,$descuentoPorcentaje){
      $this->id = $id;
      $this->idCabeceraFacturaVenta = $idCabeceraFacturaVenta;
      $this->idProductoVenta = $idProductoVenta;
      $this->cantidad = $cantidad;
      $this->descuentoPorcentaje = $descuentoPorcentaje;
   }
}
?>