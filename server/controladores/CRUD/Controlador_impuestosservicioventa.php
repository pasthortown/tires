<?php
include_once('../controladores/Controlador_Base.php');
include_once('../entidades/CRUD/ImpuestosServicioVenta.php');
class Controlador_impuestosservicioventa extends Controlador_Base
{
   function crear($args)
   {
      $impuestosservicioventa = new ImpuestosServicioVenta($args["id"],$args["idServicioVenta"],$args["nombre"],$args["descripcion"],$args["porcentaje"]);
      $sql = "INSERT INTO ImpuestosServicioVenta (idServicioVenta,nombre,descripcion,porcentaje) VALUES (?,?,?,?);";
      $parametros = array($impuestosservicioventa->idServicioVenta,$impuestosservicioventa->nombre,$impuestosservicioventa->descripcion,$impuestosservicioventa->porcentaje);
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      if(is_null($respuesta[0])){
         return true;
      }else{
         return false;
      }
   }

   function actualizar($args)
   {
      $impuestosservicioventa = new ImpuestosServicioVenta($args["id"],$args["idServicioVenta"],$args["nombre"],$args["descripcion"],$args["porcentaje"]);
      $parametros = array($impuestosservicioventa->idServicioVenta,$impuestosservicioventa->nombre,$impuestosservicioventa->descripcion,$impuestosservicioventa->porcentaje,$impuestosservicioventa->id);
      $sql = "UPDATE ImpuestosServicioVenta SET idServicioVenta = ?,nombre = ?,descripcion = ?,porcentaje = ? WHERE id = ?;";
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
      $sql = "DELETE FROM ImpuestosServicioVenta WHERE id = ?;";
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
         $sql = "SELECT * FROM ImpuestosServicioVenta;";
      }else{
      $parametros = array($id);
         $sql = "SELECT * FROM ImpuestosServicioVenta WHERE id = ?;";
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function leer_paginado($args)
   {
      $pagina = $args["pagina"];
      $registrosPorPagina = $args["registros_por_pagina"];
      $desde = (($pagina-1)*$registrosPorPagina);
      $sql ="SELECT * FROM ImpuestosServicioVenta LIMIT $desde,$registrosPorPagina;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function numero_paginas($args)
   {
      $registrosPorPagina = $args["registros_por_pagina"];
      $sql ="SELECT IF(ceil(count(*)/$registrosPorPagina)>0,ceil(count(*)/$registrosPorPagina),1) as 'paginas' FROM ImpuestosServicioVenta;";
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
            $sql = "SELECT * FROM ImpuestosServicioVenta WHERE $nombreColumna = ?;";
            break;
         case "inicia":
            $sql = "SELECT * FROM ImpuestosServicioVenta WHERE $nombreColumna LIKE '$filtro%';";
            break;
         case "termina":
            $sql = "SELECT * FROM ImpuestosServicioVenta WHERE $nombreColumna LIKE '%$filtro';";
            break;
         default:
            $sql = "SELECT * FROM ImpuestosServicioVenta WHERE $nombreColumna LIKE '%$filtro%';";
            break;
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }
}