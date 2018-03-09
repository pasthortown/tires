<?php
include_once('../controladores/Controlador_Base.php');
include_once('../entidades/CRUD/llanta.php');
class Controlador_llanta extends Controlador_Base
{
   function crear($args)
   {
      $llanta = new llanta($args["id"],$args["codigo"],$args["nombre"],$args["ancho"],$args["perfilLlanta"],$args["fechaFabricacion"],$args["idConstruccionLlanta"],$args["diametroRin"],$args["idIndiceCarga"],$args["idIndiceVelocidad"],$args["codigoUTQG"],$args["presionMaxima"],$args["DOT"],$args["limiteCarga"],$args["idFabricante"],$args["idPaisOrigen"],$args["idCaracteristicaTerreno"],$args["idTipoUso"],$args["idTipoLabrado"]);
      $sql = "INSERT INTO llanta (codigo,nombre,ancho,perfilLlanta,fechaFabricacion,idConstruccionLlanta,diametroRin,idIndiceCarga,idIndiceVelocidad,codigoUTQG,presionMaxima,DOT,limiteCarga,idFabricante,idPaisOrigen,idCaracteristicaTerreno,idTipoUso,idTipoLabrado) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
      $fechaFabricacionNoSQLTime = strtotime($llanta->fechaFabricacion);
      $fechaFabricacionSQLTime = date("Y-m-d", $fechaFabricacionNoSQLTime);
      $llanta->fechaFabricacion = $fechaFabricacionSQLTime;
      $parametros = array($llanta->codigo,$llanta->nombre,$llanta->ancho,$llanta->perfilLlanta,$llanta->fechaFabricacion,$llanta->idConstruccionLlanta,$llanta->diametroRin,$llanta->idIndiceCarga,$llanta->idIndiceVelocidad,$llanta->codigoUTQG,$llanta->presionMaxima,$llanta->DOT,$llanta->limiteCarga,$llanta->idFabricante,$llanta->idPaisOrigen,$llanta->idCaracteristicaTerreno,$llanta->idTipoUso,$llanta->idTipoLabrado);
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      if(is_null($respuesta[0])){
         return true;
      }else{
         return false;
      }
   }

   function actualizar($args)
   {
      $llanta = new llanta($args["id"],$args["codigo"],$args["nombre"],$args["ancho"],$args["perfilLlanta"],$args["fechaFabricacion"],$args["idConstruccionLlanta"],$args["diametroRin"],$args["idIndiceCarga"],$args["idIndiceVelocidad"],$args["codigoUTQG"],$args["presionMaxima"],$args["DOT"],$args["limiteCarga"],$args["idFabricante"],$args["idPaisOrigen"],$args["idCaracteristicaTerreno"],$args["idTipoUso"],$args["idTipoLabrado"]);
      $parametros = array($llanta->codigo,$llanta->nombre,$llanta->ancho,$llanta->perfilLlanta,$llanta->fechaFabricacion,$llanta->idConstruccionLlanta,$llanta->diametroRin,$llanta->idIndiceCarga,$llanta->idIndiceVelocidad,$llanta->codigoUTQG,$llanta->presionMaxima,$llanta->DOT,$llanta->limiteCarga,$llanta->idFabricante,$llanta->idPaisOrigen,$llanta->idCaracteristicaTerreno,$llanta->idTipoUso,$llanta->idTipoLabrado,$llanta->id);
      $sql = "UPDATE llanta SET codigo = ?,nombre = ?,ancho = ?,perfilLlanta = ?,fechaFabricacion = ?,idConstruccionLlanta = ?,diametroRin = ?,idIndiceCarga = ?,idIndiceVelocidad = ?,codigoUTQG = ?,presionMaxima = ?,DOT = ?,limiteCarga = ?,idFabricante = ?,idPaisOrigen = ?,idCaracteristicaTerreno = ?,idTipoUso = ?,idTipoLabrado = ? WHERE id = ?;";
      $fechaFabricacionNoSQLTime = strtotime($llanta->fechaFabricacion);
      $fechaFabricacionSQLTime = date("Y-m-d", $fechaFabricacionNoSQLTime);
      $llanta->fechaFabricacion = $fechaFabricacionSQLTime;
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
      $sql = "DELETE FROM llanta WHERE id = ?;";
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
         $sql = "SELECT * FROM llanta;";
      }else{
      $parametros = array($id);
         $sql = "SELECT * FROM llanta WHERE id = ?;";
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function leer_paginado($args)
   {
      $pagina = $args["pagina"];
      $registrosPorPagina = $args["registros_por_pagina"];
      $desde = (($pagina-1)*$registrosPorPagina);
      $sql ="SELECT * FROM llanta LIMIT $desde,$registrosPorPagina;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function numero_paginas($args)
   {
      $registrosPorPagina = $args["registros_por_pagina"];
      $sql ="SELECT IF(ceil(count(*)/$registrosPorPagina)>0,ceil(count(*)/$registrosPorPagina),1) as 'paginas' FROM llanta;";
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
            $sql = "SELECT * FROM llanta WHERE $nombreColumna = ?;";
            break;
         case "inicia":
            $sql = "SELECT * FROM llanta WHERE $nombreColumna LIKE '$filtro%';";
            break;
         case "termina":
            $sql = "SELECT * FROM llanta WHERE $nombreColumna LIKE '%$filtro';";
            break;
         default:
            $sql = "SELECT * FROM llanta WHERE $nombreColumna LIKE '%$filtro%';";
            break;
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }
}