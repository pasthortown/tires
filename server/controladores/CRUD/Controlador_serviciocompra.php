<?php
include_once('../controladores/Controlador_Base.php');
include_once('../entidades/CRUD/ServicioCompra.php');
class Controlador_serviciocompra extends Controlador_Base
{
   function crear($args)
   {
      $serviciocompra = new ServicioCompra($args["id"],$args["descripcion"],$args["precio"]);
      $sql = "INSERT INTO ServicioCompra (descripcion,precio) VALUES (?,?);";
      $parametros = array($serviciocompra->descripcion,$serviciocompra->precio);
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      if(is_null($respuesta[0])){
         return true;
      }else{
         return false;
      }
   }

   function actualizar($args)
   {
      $serviciocompra = new ServicioCompra($args["id"],$args["descripcion"],$args["precio"]);
      $parametros = array($serviciocompra->descripcion,$serviciocompra->precio,$serviciocompra->id);
      $sql = "UPDATE ServicioCompra SET descripcion = ?,precio = ? WHERE id = ?;";
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
      $sql = "DELETE FROM ServicioCompra WHERE id = ?;";
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
         $sql = "SELECT * FROM ServicioCompra;";
      }else{
      $parametros = array($id);
         $sql = "SELECT * FROM ServicioCompra WHERE id = ?;";
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function leer_paginado($args)
   {
      $pagina = $args["pagina"];
      $registrosPorPagina = $args["registros_por_pagina"];
      $desde = (($pagina-1)*$registrosPorPagina);
      $sql ="SELECT * FROM ServicioCompra LIMIT $desde,$registrosPorPagina;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function numero_paginas($args)
   {
      $registrosPorPagina = $args["registros_por_pagina"];
      $sql ="SELECT IF(ceil(count(*)/$registrosPorPagina)>0,ceil(count(*)/$registrosPorPagina),1) as 'paginas' FROM ServicioCompra;";
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
            $sql = "SELECT * FROM ServicioCompra WHERE $nombreColumna = ?;";
            break;
         case "inicia":
            $sql = "SELECT * FROM ServicioCompra WHERE $nombreColumna LIKE '$filtro%';";
            break;
         case "termina":
            $sql = "SELECT * FROM ServicioCompra WHERE $nombreColumna LIKE '%$filtro';";
            break;
         default:
            $sql = "SELECT * FROM ServicioCompra WHERE $nombreColumna LIKE '%$filtro%';";
            break;
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }
}