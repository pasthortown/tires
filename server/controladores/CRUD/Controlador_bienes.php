<?php
include_once('../controladores/Controlador_Base.php');
include_once('../entidades/CRUD/Bienes.php');
class Controlador_bienes extends Controlador_Base
{
   function crear($args)
   {
      $bienes = new Bienes($args["id"],$args["codigo"],$args["descripcion"],$args["fechaCompra"],$args["precioCompra"],$args["idProveedor"],$args["idFacturaCompra"]);
      $sql = "INSERT INTO Bienes (codigo,descripcion,fechaCompra,precioCompra,idProveedor,idFacturaCompra) VALUES (?,?,?,?,?,?);";
      $fechaCompraNoSQLTime = strtotime($bienes->fechaCompra);
      $fechaCompraSQLTime = date("Y-m-d", $fechaCompraNoSQLTime);
      $bienes->fechaCompra = $fechaCompraSQLTime;
      $parametros = array($bienes->codigo,$bienes->descripcion,$bienes->fechaCompra,$bienes->precioCompra,$bienes->idProveedor,$bienes->idFacturaCompra);
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      if(is_null($respuesta[0])){
         return true;
      }else{
         return false;
      }
   }

   function actualizar($args)
   {
      $bienes = new Bienes($args["id"],$args["codigo"],$args["descripcion"],$args["fechaCompra"],$args["precioCompra"],$args["idProveedor"],$args["idFacturaCompra"]);
      $parametros = array($bienes->codigo,$bienes->descripcion,$bienes->fechaCompra,$bienes->precioCompra,$bienes->idProveedor,$bienes->idFacturaCompra,$bienes->id);
      $sql = "UPDATE Bienes SET codigo = ?,descripcion = ?,fechaCompra = ?,precioCompra = ?,idProveedor = ?,idFacturaCompra = ? WHERE id = ?;";
      $fechaCompraNoSQLTime = strtotime($bienes->fechaCompra);
      $fechaCompraSQLTime = date("Y-m-d", $fechaCompraNoSQLTime);
      $bienes->fechaCompra = $fechaCompraSQLTime;
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
      $sql = "DELETE FROM Bienes WHERE id = ?;";
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
         $sql = "SELECT * FROM Bienes;";
      }else{
      $parametros = array($id);
         $sql = "SELECT * FROM Bienes WHERE id = ?;";
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function leer_paginado($args)
   {
      $pagina = $args["pagina"];
      $registrosPorPagina = $args["registros_por_pagina"];
      $desde = (($pagina-1)*$registrosPorPagina);
      $sql ="SELECT * FROM Bienes LIMIT $desde,$registrosPorPagina;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function numero_paginas($args)
   {
      $registrosPorPagina = $args["registros_por_pagina"];
      $sql ="SELECT IF(ceil(count(*)/$registrosPorPagina)>0,ceil(count(*)/$registrosPorPagina),1) as 'paginas' FROM Bienes;";
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
            $sql = "SELECT * FROM Bienes WHERE $nombreColumna = ?;";
            break;
         case "inicia":
            $sql = "SELECT * FROM Bienes WHERE $nombreColumna LIKE '$filtro%';";
            break;
         case "termina":
            $sql = "SELECT * FROM Bienes WHERE $nombreColumna LIKE '%$filtro';";
            break;
         default:
            $sql = "SELECT * FROM Bienes WHERE $nombreColumna LIKE '%$filtro%';";
            break;
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }
}