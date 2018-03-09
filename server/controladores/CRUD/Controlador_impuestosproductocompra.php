<?php
include_once('../controladores/Controlador_Base.php');
include_once('../entidades/CRUD/ImpuestosProductoCompra.php');
class Controlador_impuestosproductocompra extends Controlador_Base
{
   function crear($args)
   {
      $impuestosproductocompra = new ImpuestosProductoCompra($args["id"],$args["idProductoCompra"],$args["nombre"],$args["descripcion"],$args["porcentaje"]);
      $sql = "INSERT INTO ImpuestosProductoCompra (idProductoCompra,nombre,descripcion,porcentaje) VALUES (?,?,?,?);";
      $parametros = array($impuestosproductocompra->idProductoCompra,$impuestosproductocompra->nombre,$impuestosproductocompra->descripcion,$impuestosproductocompra->porcentaje);
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      if(is_null($respuesta[0])){
         return true;
      }else{
         return false;
      }
   }

   function actualizar($args)
   {
      $impuestosproductocompra = new ImpuestosProductoCompra($args["id"],$args["idProductoCompra"],$args["nombre"],$args["descripcion"],$args["porcentaje"]);
      $parametros = array($impuestosproductocompra->idProductoCompra,$impuestosproductocompra->nombre,$impuestosproductocompra->descripcion,$impuestosproductocompra->porcentaje,$impuestosproductocompra->id);
      $sql = "UPDATE ImpuestosProductoCompra SET idProductoCompra = ?,nombre = ?,descripcion = ?,porcentaje = ? WHERE id = ?;";
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
      $sql = "DELETE FROM ImpuestosProductoCompra WHERE id = ?;";
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
         $sql = "SELECT * FROM ImpuestosProductoCompra;";
      }else{
      $parametros = array($id);
         $sql = "SELECT * FROM ImpuestosProductoCompra WHERE id = ?;";
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function leer_paginado($args)
   {
      $pagina = $args["pagina"];
      $registrosPorPagina = $args["registros_por_pagina"];
      $desde = (($pagina-1)*$registrosPorPagina);
      $sql ="SELECT * FROM ImpuestosProductoCompra LIMIT $desde,$registrosPorPagina;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function numero_paginas($args)
   {
      $registrosPorPagina = $args["registros_por_pagina"];
      $sql ="SELECT IF(ceil(count(*)/$registrosPorPagina)>0,ceil(count(*)/$registrosPorPagina),1) as 'paginas' FROM ImpuestosProductoCompra;";
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
            $sql = "SELECT * FROM ImpuestosProductoCompra WHERE $nombreColumna = ?;";
            break;
         case "inicia":
            $sql = "SELECT * FROM ImpuestosProductoCompra WHERE $nombreColumna LIKE '$filtro%';";
            break;
         case "termina":
            $sql = "SELECT * FROM ImpuestosProductoCompra WHERE $nombreColumna LIKE '%$filtro';";
            break;
         default:
            $sql = "SELECT * FROM ImpuestosProductoCompra WHERE $nombreColumna LIKE '%$filtro%';";
            break;
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }
}