<?php
class llanta
{
   public $id;
   public $codigo;
   public $nombre;
   public $ancho;
   public $perfilLlanta;
   public $fechaFabricacion;
   public $idConstruccionLlanta;
   public $diametroRin;
   public $idIndiceCarga;
   public $idIndiceVelocidad;
   public $codigoUTQG;
   public $presionMaxima;
   public $DOT;
   public $limiteCarga;
   public $idFabricante;
   public $idUbicacionPais;
   public $idCaracteristicaTerreno;
   public $idTipoUso;
   public $labrado;

   function __construct($id,$codigo,$nombre,$ancho,$perfilLlanta,$fechaFabricacion,$idConstruccionLlanta,$diametroRin,$idIndiceCarga,$idIndiceVelocidad,$codigoUTQG,$presionMaxima,$DOT,$limiteCarga,$idFabricante,$idUbicacionPais,$idCaracteristicaTerreno,$idTipoUso,$labrado){
      $this->id = $id;
      $this->codigo = $codigo;
      $this->nombre = $nombre;
      $this->ancho = $ancho;
      $this->perfilLlanta = $perfilLlanta;
      $this->fechaFabricacion = $fechaFabricacion;
      $this->idConstruccionLlanta = $idConstruccionLlanta;
      $this->diametroRin = $diametroRin;
      $this->idIndiceCarga = $idIndiceCarga;
      $this->idIndiceVelocidad = $idIndiceVelocidad;
      $this->codigoUTQG = $codigoUTQG;
      $this->presionMaxima = $presionMaxima;
      $this->DOT = $DOT;
      $this->limiteCarga = $limiteCarga;
      $this->idFabricante = $idFabricante;
      $this->idUbicacionPais = $idUbicacionPais;
      $this->idCaracteristicaTerreno = $idCaracteristicaTerreno;
      $this->idTipoUso = $idTipoUso;
      $this->labrado = $labrado;
   }
}
?>