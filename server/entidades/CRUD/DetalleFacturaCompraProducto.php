<?php
class DetalleFacturaCompraProducto
{
   public $id;
   public $idCabeceraFacturaCompra;
   public $idProductoCompra;
   public $cantidad;
   public $descuentoPorcentaje;

   function __construct($id,$idCabeceraFacturaCompra,$idProductoCompra,$cantidad,$descuentoPorcentaje){
      $this->id = $id;
      $this->idCabeceraFacturaCompra = $idCabeceraFacturaCompra;
      $this->idProductoCompra = $idProductoCompra;
      $this->cantidad = $cantidad;
      $this->descuentoPorcentaje = $descuentoPorcentaje;
   }
}
?>