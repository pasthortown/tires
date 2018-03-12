<?php
include_once('../controladores/Controlador_Base.php');
include_once('../entidades/CRUD/Contrato.php');
class Controlador_contrato extends Controlador_Base
{
   function crear($args)
   {
      $contrato = new Contrato($args["id"],$args["codigo"],$args["idCargo"],$args["idPersona"],$args["fechaInicio"],$args["fechaFin"],$args["idMotivoFin"]);
      $sql = "INSERT INTO Contrato (codigo,idCargo,idPersona,fechaInicio,fechaFin,idMotivoFin) VALUES (?,?,?,?,?,?);";
      $fechaInicioNoSQLTime = strtotime($contrato->fechaInicio);
      $fechaInicioSQLTime = date("Y-m-d", $fechaInicioNoSQLTime);
      $contrato->fechaInicio = $fechaInicioSQLTime;
      $fechaFinNoSQLTime = strtotime($contrato->fechaFin);
      $fechaFinSQLTime = date("Y-m-d", $fechaFinNoSQLTime);
      $contrato->fechaFin = $fechaFinSQLTime;
      $parametros = array($contrato->codigo,$contrato->idCargo,$contrato->idPersona,$contrato->fechaInicio,$contrato->fechaFin,$contrato->idMotivoFin);
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      if(is_null($respuesta[0])){
         return true;
      }else{
         return false;
      }
   }

   function actualizar($args)
   {
      $contrato = new Contrato($args["id"],$args["codigo"],$args["idCargo"],$args["idPersona"],$args["fechaInicio"],$args["fechaFin"],$args["idMotivoFin"]);
      $parametros = array($contrato->codigo,$contrato->idCargo,$contrato->idPersona,$contrato->fechaInicio,$contrato->fechaFin,$contrato->idMotivoFin,$contrato->id);
      $sql = "UPDATE Contrato SET codigo = ?,idCargo = ?,idPersona = ?,fechaInicio = ?,fechaFin = ?,idMotivoFin = ? WHERE id = ?;";
      $fechaInicioNoSQLTime = strtotime($contrato->fechaInicio);
      $fechaInicioSQLTime = date("Y-m-d", $fechaInicioNoSQLTime);
      $contrato->fechaInicio = $fechaInicioSQLTime;
      $fechaFinNoSQLTime = strtotime($contrato->fechaFin);
      $fechaFinSQLTime = date("Y-m-d", $fechaFinNoSQLTime);
      $contrato->fechaFin = $fechaFinSQLTime;
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
      $sql = "DELETE FROM Contrato WHERE id = ?;";
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
         $sql = "SELECT * FROM Contrato;";
      }else{
      $parametros = array($id);
         $sql = "SELECT * FROM Contrato WHERE id = ?;";
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function leer_paginado($args)
   {
      $pagina = $args["pagina"];
      $registrosPorPagina = $args["registros_por_pagina"];
      $desde = (($pagina-1)*$registrosPorPagina);
      $sql ="SELECT * FROM Contrato LIMIT $desde,$registrosPorPagina;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function numero_paginas($args)
   {
      $registrosPorPagina = $args["registros_por_pagina"];
      $sql ="SELECT IF(ceil(count(*)/$registrosPorPagina)>0,ceil(count(*)/$registrosPorPagina),1) as 'paginas' FROM Contrato;";
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
            $sql = "SELECT * FROM Contrato WHERE $nombreColumna = ?;";
            break;
         case "inicia":
            $sql = "SELECT * FROM Contrato WHERE $nombreColumna LIKE '$filtro%';";
            break;
         case "termina":
            $sql = "SELECT * FROM Contrato WHERE $nombreColumna LIKE '%$filtro';";
            break;
         default:
            $sql = "SELECT * FROM Contrato WHERE $nombreColumna LIKE '%$filtro%';";
            break;
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }
}