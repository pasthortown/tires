<?php
include_once('../controladores/Controlador_Base.php');
include_once('../entidades/CRUD/ImpuestosProductoVenta.php');
class Controlador_impuestosproductoventa extends Controlador_Base
{
   function crear($args)
   {
      $impuestosproductoventa = new ImpuestosProductoVenta($args["id"],$args["idProductoVenta"],$args["nombre"],$args["descripcion"],$args["porcentaje"]);
      $sql = "INSERT INTO ImpuestosProductoVenta (idProductoVenta,nombre,descripcion,porcentaje) VALUES (?,?,?,?);";
      $parametros = array($impuestosproductoventa->idProductoVenta,$impuestosproductoventa->nombre,$impuestosproductoventa->descripcion,$impuestosproductoventa->porcentaje);
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      if(is_null($respuesta[0])){
         return true;
      }else{
         return false;
      }
   }

   function actualizar($args)
   {
      $impuestosproductoventa = new ImpuestosProductoVenta($args["id"],$args["idProductoVenta"],$args["nombre"],$args["descripcion"],$args["porcentaje"]);
      $parametros = array($impuestosproductoventa->idProductoVenta,$impuestosproductoventa->nombre,$impuestosproductoventa->descripcion,$impuestosproductoventa->porcentaje,$impuestosproductoventa->id);
      $sql = "UPDATE ImpuestosProductoVenta SET idProductoVenta = ?,nombre = ?,descripcion = ?,porcentaje = ? WHERE id = ?;";
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
      $sql = "DELETE FROM ImpuestosProductoVenta WHERE id = ?;";
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
         $sql = "SELECT * FROM ImpuestosProductoVenta;";
      }else{
      $parametros = array($id);
         $sql = "SELECT * FROM ImpuestosProductoVenta WHERE id = ?;";
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function leer_paginado($args)
   {
      $pagina = $args["pagina"];
      $registrosPorPagina = $args["registros_por_pagina"];
      $desde = (($pagina-1)*$registrosPorPagina);
      $sql ="SELECT * FROM ImpuestosProductoVenta LIMIT $desde,$registrosPorPagina;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function numero_paginas($args)
   {
      $registrosPorPagina = $args["registros_por_pagina"];
      $sql ="SELECT IF(ceil(count(*)/$registrosPorPagina)>0,ceil(count(*)/$registrosPorPagina),1) as 'paginas' FROM ImpuestosProductoVenta;";
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
            $sql = "SELECT * FROM ImpuestosProductoVenta WHERE $nombreColumna = ?;";
            break;
         case "inicia":
            $sql = "SELECT * FROM ImpuestosProductoVenta WHERE $nombreColumna LIKE '$filtro%';";
            break;
         case "termina":
            $sql = "SELECT * FROM ImpuestosProductoVenta WHERE $nombreColumna LIKE '%$filtro';";
            break;
         default:
            $sql = "SELECT * FROM ImpuestosProductoVenta WHERE $nombreColumna LIKE '%$filtro%';";
            break;
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }
}