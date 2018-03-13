<?php
include_once('../controladores/Controlador_Base.php');
include_once('../entidades/CRUD/Vehiculo.php');
class Controlador_vehiculo extends Controlador_Base
{
   function crear($args)
   {
      $vehiculo = new Vehiculo($args["id"],$args["placa"],$args["numeroMotor"],$args["numeroChasis"],$args["idMarca"],$args["modelo"],$args["idTipoVehiculo"]);
      $sql = "INSERT INTO Vehiculo (placa,numeroMotor,numeroChasis,idMarca,modelo,idTipoVehiculo) VALUES (?,?,?,?,?,?);";
      $parametros = array($vehiculo->placa,$vehiculo->numeroMotor,$vehiculo->numeroChasis,$vehiculo->idMarca,$vehiculo->modelo,$vehiculo->idTipoVehiculo);
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      if(is_null($respuesta[0])){
         return true;
      }else{
         return false;
      }
   }

   function actualizar($args)
   {
      $vehiculo = new Vehiculo($args["id"],$args["placa"],$args["numeroMotor"],$args["numeroChasis"],$args["idMarca"],$args["modelo"],$args["idTipoVehiculo"]);
      $parametros = array($vehiculo->placa,$vehiculo->numeroMotor,$vehiculo->numeroChasis,$vehiculo->idMarca,$vehiculo->modelo,$vehiculo->idTipoVehiculo,$vehiculo->id);
      $sql = "UPDATE Vehiculo SET placa = ?,numeroMotor = ?,numeroChasis = ?,idMarca = ?,modelo = ?,idTipoVehiculo = ? WHERE id = ?;";
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
         $sql = "SELECT Vehiculo.*, Marca.descripcion as 'Marca', TipoVehiculo.descripcion as 'TipoVehiculo' FROM Vehiculo INNER JOIN Marca ON Vehiculo.idMarca = Marca.id INNER JOIN TipoVehiculo ON Vehiculo.idTipoVehiculo = TipoVehiculo.id ORDER BY Marca, placa ASC;";
      }else{
      $parametros = array($id);
         $sql = "SELECT Vehiculo.*, Marca.descripcion as 'Marca', TipoVehiculo.descripcion as 'TipoVehiculo' FROM Vehiculo INNER JOIN Marca ON Vehiculo.idMarca = Marca.id INNER JOIN TipoVehiculo ON Vehiculo.idTipoVehiculo = TipoVehiculo.id WHERE id = ?;";
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function leer_paginado($args)
   {
      $pagina = $args["pagina"];
      $registrosPorPagina = $args["registros_por_pagina"];
      $desde = (($pagina-1)*$registrosPorPagina);
      $sql ="SELECT Vehiculo.*, Marca.descripcion as 'Marca', TipoVehiculo.descripcion as 'TipoVehiculo' FROM Vehiculo INNER JOIN Marca ON Vehiculo.idMarca = Marca.id INNER JOIN TipoVehiculo ON Vehiculo.idTipoVehiculo = TipoVehiculo.id ORDER BY Marca, placa ASC LIMIT $desde,$registrosPorPagina;";
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
            $sql = "SELECT Vehiculo.*, Marca.descripcion as 'Marca', TipoVehiculo.descripcion as 'TipoVehiculo' FROM Vehiculo INNER JOIN Marca ON Vehiculo.idMarca = Marca.id INNER JOIN TipoVehiculo ON Vehiculo.idTipoVehiculo = TipoVehiculo.id WHERE $nombreColumna = ?;";
            break;
         case "inicia":
            $sql = "SELECT Vehiculo.*, Marca.descripcion as 'Marca', TipoVehiculo.descripcion as 'TipoVehiculo' FROM Vehiculo INNER JOIN Marca ON Vehiculo.idMarca = Marca.id INNER JOIN TipoVehiculo ON Vehiculo.idTipoVehiculo = TipoVehiculo.id ORDER BY Marca, placa ASC WHERE $nombreColumna LIKE '$filtro%';";
            break;
         case "termina":
            $sql = "SELECT Vehiculo.*, Marca.descripcion as 'Marca', TipoVehiculo.descripcion as 'TipoVehiculo' FROM Vehiculo INNER JOIN Marca ON Vehiculo.idMarca = Marca.id INNER JOIN TipoVehiculo ON Vehiculo.idTipoVehiculo = TipoVehiculo.id ORDER BY Marca, placa ASC WHERE $nombreColumna LIKE '%$filtro';";
            break;
         default:
            $sql = "SELECT Vehiculo.*, Marca.descripcion as 'Marca', TipoVehiculo.descripcion as 'TipoVehiculo' FROM Vehiculo INNER JOIN Marca ON Vehiculo.idMarca = Marca.id INNER JOIN TipoVehiculo ON Vehiculo.idTipoVehiculo = TipoVehiculo.id ORDER BY Marca, placa ASC WHERE $nombreColumna LIKE '%$filtro%';";
            break;
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }
}