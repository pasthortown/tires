<?php
class Cliente
{
   public $id;
   public $identificacion;
   public $nombres;
   public $apellidos;
   public $telefono1;
   public $telefono2;
   public $correoElectronico;
   public $direccion;
   public $ubicacion;

   function __construct($id,$identificacion,$nombres,$apellidos,$telefono1,$telefono2,$correoElectronico,$direccion,$ubicacion){
      $this->id = $id;
      $this->identificacion = $identificacion;
      $this->nombres = $nombres;
      $this->apellidos = $apellidos;
      $this->telefono1 = $telefono1;
      $this->telefono2 = $telefono2;
      $this->correoElectronico = $correoElectronico;
      $this->direccion = $direccion;
      $this->ubicacion = $ubicacion;
   }
}
?>