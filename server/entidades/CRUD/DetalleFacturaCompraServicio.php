<?php
class DetalleFacturaCompraServicio
{
   public $id;
   public $idCabeceraFacturaCompra;
   public $idServicioCompra;
   public $cantidad;
   public $descuentoPorcentaje;

   function __construct($id,$idCabeceraFacturaCompra,$idServicioCompra,$cantidad,$descuentoPorcentaje){
      $this->id = $id;
      $this->idCabeceraFacturaCompra = $idCabeceraFacturaCompra;
      $this->idServicioCompra = $idServicioCompra;
      $this->cantidad = $cantidad;
      $this->descuentoPorcentaje = $descuentoPorcentaje;
   }
}
?>