<?php
include_once('../controladores/Controlador_Base.php');
include_once('../entidades/CRUD/DetalleFacturaVentaInsumo.php');
class Controlador_detallefacturaventainsumo extends Controlador_Base
{
   function crear($args)
   {
      $detallefacturaventainsumo = new DetalleFacturaVentaInsumo($args["id"],$args["idCabeceraFacturaVenta"],$args["idInsumoVenta"],$args["cantidad"],$args["descuentoPorcentaje"]);
      $sql = "INSERT INTO DetalleFacturaVentaInsumo (idCabeceraFacturaVenta,idInsumoVenta,cantidad,descuentoPorcentaje) VALUES (?,?,?,?);";
      $parametros = array($detallefacturaventainsumo->idCabeceraFacturaVenta,$detallefacturaventainsumo->idInsumoVenta,$detallefacturaventainsumo->cantidad,$detallefacturaventainsumo->descuentoPorcentaje);
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      if(is_null($respuesta[0])){
         return true;
      }else{
         return false;
      }
   }

   function actualizar($args)
   {
      $detallefacturaventainsumo = new DetalleFacturaVentaInsumo($args["id"],$args["idCabeceraFacturaVenta"],$args["idInsumoVenta"],$args["cantidad"],$args["descuentoPorcentaje"]);
      $parametros = array($detallefacturaventainsumo->idCabeceraFacturaVenta,$detallefacturaventainsumo->idInsumoVenta,$detallefacturaventainsumo->cantidad,$detallefacturaventainsumo->descuentoPorcentaje,$detallefacturaventainsumo->id);
      $sql = "UPDATE DetalleFacturaVentaInsumo SET idCabeceraFacturaVenta = ?,idInsumoVenta = ?,cantidad = ?,descuentoPorcentaje = ? WHERE id = ?;";
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
      $sql = "DELETE FROM DetalleFacturaVentaInsumo WHERE id = ?;";
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
         $sql = "SELECT * FROM DetalleFacturaVentaInsumo;";
      }else{
      $parametros = array($id);
         $sql = "SELECT * FROM DetalleFacturaVentaInsumo WHERE id = ?;";
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function leer_paginado($args)
   {
      $pagina = $args["pagina"];
      $registrosPorPagina = $args["registros_por_pagina"];
      $desde = (($pagina-1)*$registrosPorPagina);
      $sql ="SELECT * FROM DetalleFacturaVentaInsumo LIMIT $desde,$registrosPorPagina;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function numero_paginas($args)
   {
      $registrosPorPagina = $args["registros_por_pagina"];
      $sql ="SELECT IF(ceil(count(*)/$registrosPorPagina)>0,ceil(count(*)/$registrosPorPagina),1) as 'paginas' FROM DetalleFacturaVentaInsumo;";
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
            $sql = "SELECT * FROM DetalleFacturaVentaInsumo WHERE $nombreColumna = ?;";
            break;
         case "inicia":
            $sql = "SELECT * FROM DetalleFacturaVentaInsumo WHERE $nombreColumna LIKE '$filtro%';";
            break;
         case "termina":
            $sql = "SELECT * FROM DetalleFacturaVentaInsumo WHERE $nombreColumna LIKE '%$filtro';";
            break;
         default:
            $sql = "SELECT * FROM DetalleFacturaVentaInsumo WHERE $nombreColumna LIKE '%$filtro%';";
            break;
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }
}