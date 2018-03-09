<?php
include_once('../controladores/Controlador_Base.php');
include_once('../entidades/CRUD/Vehiculo.php');
class Controlador_vehiculo extends Controlador_Base
{
   function crear($args)
   {
      $vehiculo = new Vehiculo($args["id"],$args["placa"],$args["numeroMotor"],$args["numeroChasis"],$args["marca"],$args["modelo"],$args["idTipoVehiculo"]);
      $sql = "INSERT INTO Vehiculo (placa,numeroMotor,numeroChasis,marca,modelo,idTipoVehiculo) VALUES (?,?,?,?,?,?);";
      $parametros = array($vehiculo->placa,$vehiculo->numeroMotor,$vehiculo->numeroChasis,$vehiculo->marca,$vehiculo->modelo,$vehiculo->idTipoVehiculo);
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      if(is_null($respuesta[0])){
         return true;
      }else{
         return false;
      }
   }

   function actualizar($args)
   {
      $vehiculo = new Vehiculo($args["id"],$args["placa"],$args["numeroMotor"],$args["numeroChasis"],$args["marca"],$args["modelo"],$args["idTipoVehiculo"]);
      $parametros = array($vehiculo->placa,$vehiculo->numeroMotor,$vehiculo->numeroChasis,$vehiculo->marca,$vehiculo->modelo,$vehiculo->idTipoVehiculo,$vehiculo->id);
      $sql = "UPDATE Vehiculo SET placa = ?,numeroMotor = ?,numeroChasis = ?,marca = ?,modelo = ?,idTipoVehiculo = ? WHERE id = ?;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      if(is_null($respuesta[0])){
         return true;
      }else{
         return false;
      }
   }

   function borrar($args)
   {
      $id = $args["id"];
      $parametros = array($id);
      $sql = "DELETE FROM Vehiculo WHERE id = ?;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      if(is_null($respuesta[0])){
         return true;
      }else{
         return false;
      }
   }

   function leer($args)
   {
      $id = $args["id"];
      if ($id==""){
         $sql = "SELECT * FROM Vehiculo;";
      }else{
      $parametros = array($id);
         $sql = "SELECT * FROM Vehiculo WHERE id = ?;";
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function leer_paginado($args)
   {
      $pagina = $args["pagina"];
      $registrosPorPagina = $args["registros_por_pagina"];
      $desde = (($pagina-1)*$registrosPorPagina);
      $sql ="SELECT * FROM Vehiculo LIMIT $desde,$registrosPorPagina;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function numero_paginas($args)
   {
      $registrosPorPagina = $args["registros_por_pagina"];
      $sql ="SELECT IF(ceil(count(*)/$registrosPorPagina)>0,ceil(count(*)/$registrosPorPagina),1) as 'paginas' FROM Vehiculo;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta[0];
   }

   function leer_filtrado($args)
   {
      $nombreColumna = $args["columna"];
      $tipoFiltro = $args["tipo_filtro"];
      $filtro = $args["filtro"];
      switch ($tipoFiltro){
         case "coincide":
            $parametros = array($filtro);
            $sql = "SELECT * FROM Vehiculo WHERE $nombreColumna = ?;";
            break;
         case "inicia":
            $sql = "SELECT * FROM Vehiculo WHERE $nombreColumna LIKE '$filtro%';";
            break;
         case "termina":
            $sql = "SELECT * FROM Vehiculo WHERE $nombreColumna LIKE '%$filtro';";
            break;
         default:
            $sql = "SELECT * FROM Vehiculo WHERE $nombreColumna LIKE '%$filtro%';";
            break;
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }
}