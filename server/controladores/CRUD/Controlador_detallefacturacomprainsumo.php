<?php
include_once('../controladores/Controlador_Base.php');
include_once('../entidades/CRUD/DetalleFacturaCompraInsumo.php');
class Controlador_detallefacturacomprainsumo extends Controlador_Base
{
   function crear($args)
   {
      $detallefacturacomprainsumo = new DetalleFacturaCompraInsumo($args["id"],$args["idCabeceraFacturaCompra"],$args["idInsumoCompra"],$args["cantidad"],$args["descuentoPorcentaje"]);
      $sql = "INSERT INTO DetalleFacturaCompraInsumo (idCabeceraFacturaCompra,idInsumoCompra,cantidad,descuentoPorcentaje) VALUES (?,?,?,?);";
      $parametros = array($detallefacturacomprainsumo->idCabeceraFacturaCompra,$detallefacturacomprainsumo->idInsumoCompra,$detallefacturacomprainsumo->cantidad,$detallefacturacomprainsumo->descuentoPorcentaje);
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      if(is_null($respuesta[0])){
         return true;
      }else{
         return false;
      }
   }

   function actualizar($args)
   {
      $detallefacturacomprainsumo = new DetalleFacturaCompraInsumo($args["id"],$args["idCabeceraFacturaCompra"],$args["idInsumoCompra"],$args["cantidad"],$args["descuentoPorcentaje"]);
      $parametros = array($detallefacturacomprainsumo->idCabeceraFacturaCompra,$detallefacturacomprainsumo->idInsumoCompra,$detallefacturacomprainsumo->cantidad,$detallefacturacomprainsumo->descuentoPorcentaje,$detallefacturacomprainsumo->id);
      $sql = "UPDATE DetalleFacturaCompraInsumo SET idCabeceraFacturaCompra = ?,idInsumoCompra = ?,cantidad = ?,descuentoPorcentaje = ? WHERE id = ?;";
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
      $sql = "DELETE FROM DetalleFacturaCompraInsumo WHERE id = ?;";
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
         $sql = "SELECT * FROM DetalleFacturaCompraInsumo;";
      }else{
      $parametros = array($id);
         $sql = "SELECT * FROM DetalleFacturaCompraInsumo WHERE id = ?;";
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function leer_paginado($args)
   {
      $pagina = $args["pagina"];
      $registrosPorPagina = $args["registros_por_pagina"];
      $desde = (($pagina-1)*$registrosPorPagina);
      $sql ="SELECT * FROM DetalleFacturaCompraInsumo LIMIT $desde,$registrosPorPagina;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function numero_paginas($args)
   {
      $registrosPorPagina = $args["registros_por_pagina"];
      $sql ="SELECT IF(ceil(count(*)/$registrosPorPagina)>0,ceil(count(*)/$registrosPorPagina),1) as 'paginas' FROM DetalleFacturaCompraInsumo;";
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
            $sql = "SELECT * FROM DetalleFacturaCompraInsumo WHERE $nombreColumna = ?;";
            break;
         case "inicia":
            $sql = "SELECT * FROM DetalleFacturaCompraInsumo WHERE $nombreColumna LIKE '$filtro%';";
            break;
         case "termina":
            $sql = "SELECT * FROM DetalleFacturaCompraInsumo WHERE $nombreColumna LIKE '%$filtro';";
            break;
         default:
            $sql = "SELECT * FROM DetalleFacturaCompraInsumo WHERE $nombreColumna LIKE '%$filtro%';";
            break;
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }
}