<?php
include_once('../controladores/Controlador_Base.php');
include_once('../entidades/CRUD/InsumoCompra.php');
class Controlador_insumocompra extends Controlador_Base
{
   function crear($args)
   {
      $insumocompra = new InsumoCompra($args["id"],$args["descripcion"],$args["precio"]);
      $sql = "INSERT INTO InsumoCompra (descripcion,precio) VALUES (?,?);";
      $parametros = array($insumocompra->descripcion,$insumocompra->precio);
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      if(is_null($respuesta[0])){
         return true;
      }else{
         return false;
      }
   }

   function actualizar($args)
   {
      $insumocompra = new InsumoCompra($args["id"],$args["descripcion"],$args["precio"]);
      $parametros = array($insumocompra->descripcion,$insumocompra->precio,$insumocompra->id);
      $sql = "UPDATE InsumoCompra SET descripcion = ?,precio = ? WHERE id = ?;";
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
      $sql = "DELETE FROM InsumoCompra WHERE id = ?;";
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
         $sql = "SELECT * FROM InsumoCompra;";
      }else{
      $parametros = array($id);
         $sql = "SELECT * FROM InsumoCompra WHERE id = ?;";
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function leer_paginado($args)
   {
      $pagina = $args["pagina"];
      $registrosPorPagina = $args["registros_por_pagina"];
      $desde = (($pagina-1)*$registrosPorPagina);
      $sql ="SELECT * FROM InsumoCompra LIMIT $desde,$registrosPorPagina;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function numero_paginas($args)
   {
      $registrosPorPagina = $args["registros_por_pagina"];
      $sql ="SELECT IF(ceil(count(*)/$registrosPorPagina)>0,ceil(count(*)/$registrosPorPagina),1) as 'paginas' FROM InsumoCompra;";
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
            $sql = "SELECT * FROM InsumoCompra WHERE $nombreColumna = ?;";
            break;
         case "inicia":
            $sql = "SELECT * FROM InsumoCompra WHERE $nombreColumna LIKE '$filtro%';";
            break;
         case "termina":
            $sql = "SELECT * FROM InsumoCompra WHERE $nombreColumna LIKE '%$filtro';";
            break;
         default:
            $sql = "SELECT * FROM InsumoCompra WHERE $nombreColumna LIKE '%$filtro%';";
            break;
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }
}