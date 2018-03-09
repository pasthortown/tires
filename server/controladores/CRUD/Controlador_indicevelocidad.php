<?php
include_once('../controladores/Controlador_Base.php');
include_once('../entidades/CRUD/IndiceVelocidad.php');
class Controlador_indicevelocidad extends Controlador_Base
{
   function crear($args)
   {
      $indicevelocidad = new IndiceVelocidad($args["id"],$args["codigo"],$args["descripcion"],$args["velocidadMaxima"]);
      $sql = "INSERT INTO IndiceVelocidad (codigo,descripcion,velocidadMaxima) VALUES (?,?,?);";
      $parametros = array($indicevelocidad->codigo,$indicevelocidad->descripcion,$indicevelocidad->velocidadMaxima);
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      if(is_null($respuesta[0])){
         return true;
      }else{
         return false;
      }
   }

   function actualizar($args)
   {
      $indicevelocidad = new IndiceVelocidad($args["id"],$args["codigo"],$args["descripcion"],$args["velocidadMaxima"]);
      $parametros = array($indicevelocidad->codigo,$indicevelocidad->descripcion,$indicevelocidad->velocidadMaxima,$indicevelocidad->id);
      $sql = "UPDATE IndiceVelocidad SET codigo = ?,descripcion = ?,velocidadMaxima = ? WHERE id = ?;";
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
      $sql = "DELETE FROM IndiceVelocidad WHERE id = ?;";
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
         $sql = "SELECT * FROM IndiceVelocidad;";
      }else{
      $parametros = array($id);
         $sql = "SELECT * FROM IndiceVelocidad WHERE id = ?;";
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function leer_paginado($args)
   {
      $pagina = $args["pagina"];
      $registrosPorPagina = $args["registros_por_pagina"];
      $desde = (($pagina-1)*$registrosPorPagina);
      $sql ="SELECT * FROM IndiceVelocidad LIMIT $desde,$registrosPorPagina;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function numero_paginas($args)
   {
      $registrosPorPagina = $args["registros_por_pagina"];
      $sql ="SELECT IF(ceil(count(*)/$registrosPorPagina)>0,ceil(count(*)/$registrosPorPagina),1) as 'paginas' FROM IndiceVelocidad;";
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
            $sql = "SELECT * FROM IndiceVelocidad WHERE $nombreColumna = ?;";
            break;
         case "inicia":
            $sql = "SELECT * FROM IndiceVelocidad WHERE $nombreColumna LIKE '$filtro%';";
            break;
         case "termina":
            $sql = "SELECT * FROM IndiceVelocidad WHERE $nombreColumna LIKE '%$filtro';";
            break;
         default:
            $sql = "SELECT * FROM IndiceVelocidad WHERE $nombreColumna LIKE '%$filtro%';";
            break;
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }
}