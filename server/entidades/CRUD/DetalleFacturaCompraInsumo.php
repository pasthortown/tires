<?php
class DetalleFacturaCompraInsumo
{
   public $id;
   public $idCabeceraFacturaCompra;
   public $idInsumoCompra;
   public $cantidad;
   public $descuentoPorcentaje;

   function __construct($id,$idCabeceraFacturaCompra,$idInsumoCompra,$cantidad,$descuentoPorcentaje){
      $this->id = $id;
      $this->idCabeceraFacturaCompra = $idCabeceraFacturaCompra;
      $this->idInsumoCompra = $idInsumoCompra;
      $this->cantidad = $cantidad;
      $this->descuentoPorcentaje = $descuentoPorcentaje;
   }
}
?>