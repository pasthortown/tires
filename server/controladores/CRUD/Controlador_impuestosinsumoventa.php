<?php
include_once('../controladores/Controlador_Base.php');
include_once('../entidades/CRUD/ImpuestosInsumoVenta.php');
class Controlador_impuestosinsumoventa extends Controlador_Base
{
   function crear($args)
   {
      $impuestosinsumoventa = new ImpuestosInsumoVenta($args["id"],$args["idInsumoVenta"],$args["nombre"],$args["descripcion"],$args["porcentaje"]);
      $sql = "INSERT INTO ImpuestosInsumoVenta (idInsumoVenta,nombre,descripcion,porcentaje) VALUES (?,?,?,?);";
      $parametros = array($impuestosinsumoventa->idInsumoVenta,$impuestosinsumoventa->nombre,$impuestosinsumoventa->descripcion,$impuestosinsumoventa->porcentaje);
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      if(is_null($respuesta[0])){
         return true;
      }else{
         return false;
      }
   }

   function actualizar($args)
   {
      $impuestosinsumoventa = new ImpuestosInsumoVenta($args["id"],$args["idInsumoVenta"],$args["nombre"],$args["descripcion"],$args["porcentaje"]);
      $parametros = array($impuestosinsumoventa->idInsumoVenta,$impuestosinsumoventa->nombre,$impuestosinsumoventa->descripcion,$impuestosinsumoventa->porcentaje,$impuestosinsumoventa->id);
      $sql = "UPDATE ImpuestosInsumoVenta SET idInsumoVenta = ?,nombre = ?,descripcion = ?,porcentaje = ? WHERE id = ?;";
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
      $sql = "DELETE FROM ImpuestosInsumoVenta WHERE id = ?;";
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
         $sql = "SELECT * FROM ImpuestosInsumoVenta;";
      }else{
      $parametros = array($id);
         $sql = "SELECT * FROM ImpuestosInsumoVenta WHERE id = ?;";
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function leer_paginado($args)
   {
      $pagina = $args["pagina"];
      $registrosPorPagina = $args["registros_por_pagina"];
      $desde = (($pagina-1)*$registrosPorPagina);
      $sql ="SELECT * FROM ImpuestosInsumoVenta LIMIT $desde,$registrosPorPagina;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function numero_paginas($args)
   {
      $registrosPorPagina = $args["registros_por_pagina"];
      $sql ="SELECT IF(ceil(count(*)/$registrosPorPagina)>0,ceil(count(*)/$registrosPorPagina),1) as 'paginas' FROM ImpuestosInsumoVenta;";
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
            $sql = "SELECT * FROM ImpuestosInsumoVenta WHERE $nombreColumna = ?;";
            break;
         case "inicia":
            $sql = "SELECT * FROM ImpuestosInsumoVenta WHERE $nombreColumna LIKE '$filtro%';";
            break;
         case "termina":
            $sql = "SELECT * FROM ImpuestosInsumoVenta WHERE $nombreColumna LIKE '%$filtro';";
            break;
         default:
            $sql = "SELECT * FROM ImpuestosInsumoVenta WHERE $nombreColumna LIKE '%$filtro%';";
            break;
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }
}