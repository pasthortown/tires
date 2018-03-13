<?php
class Sueldo
{
   public $id;
   public $idContrato;
   public $montoBruto;
   public $fecha;
   public $idBaseIESS;
   public $porcentajeIESSEmpleado;
   public $porcentajeIESSEmpleador;
   public $montoPagoPrimeraQuincena;
   public $montoPagoSegundaQuincena;

   function __construct($id,$idContrato,$montoBruto,$fecha,$idBaseIESS,$porcentajeIESSEmpleado,$porcentajeIESSEmpleador,$montoPagoPrimeraQuincena,$montoPagoSegundaQuincena){
      $this->id = $id;
      $this->idContrato = $idContrato;
      $this->montoBruto = $montoBruto;
      $this->fecha = $fecha;
      $this->idBaseIESS = $idBaseIESS;
      $this->porcentajeIESSEmpleado = $porcentajeIESSEmpleado;
      $this->porcentajeIESSEmpleador = $porcentajeIESSEmpleador;
      $this->montoPagoPrimeraQuincena = $montoPagoPrimeraQuincena;
      $this->montoPagoSegundaQuincena = $montoPagoSegundaQuincena;
   }
}
?>