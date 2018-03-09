<?php
include_once('../controladores/Controlador_Base.php');
include_once('../entidades/CRUD/CabeceraFacturaVenta.php');
class Controlador_cabecerafacturaventa extends Controlador_Base
{
   function crear($args)
   {
      $cabecerafacturaventa = new CabeceraFacturaVenta($args["id"],$args["idCliente"],$args["idVehiculo"],$args["kilometraje"],$args["fechaFactura"],$args["numeroFactura"],$args["observaciones"],$args["idVendedor"],$args["idSucursal"]);
      $sql = "INSERT INTO CabeceraFacturaVenta (idCliente,idVehiculo,kilometraje,fechaFactura,numeroFactura,observaciones,idVendedor,idSucursal) VALUES (?,?,?,?,?,?,?,?);";
      $fechaFacturaNoSQLTime = strtotime($cabecerafacturaventa->fechaFactura);
      $fechaFacturaSQLTime = date("Y-m-d", $fechaFacturaNoSQLTime);
      $cabecerafacturaventa->fechaFactura = $fechaFacturaSQLTime;
      $parametros = array($cabecerafacturaventa->idCliente,$cabecerafacturaventa->idVehiculo,$cabecerafacturaventa->kilometraje,$cabecerafacturaventa->fechaFactura,$cabecerafacturaventa->numeroFactura,$cabecerafacturaventa->observaciones,$cabecerafacturaventa->idVendedor,$cabecerafacturaventa->idSucursal);
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      if(is_null($respuesta[0])){
         return true;
      }else{
         return false;
      }
   }

   function actualizar($args)
   {
      $cabecerafacturaventa = new CabeceraFacturaVenta($args["id"],$args["idCliente"],$args["idVehiculo"],$args["kilometraje"],$args["fechaFactura"],$args["numeroFactura"],$args["observaciones"],$args["idVendedor"],$args["idSucursal"]);
      $parametros = array($cabecerafacturaventa->idCliente,$cabecerafacturaventa->idVehiculo,$cabecerafacturaventa->kilometraje,$cabecerafacturaventa->fechaFactura,$cabecerafacturaventa->numeroFactura,$cabecerafacturaventa->observaciones,$cabecerafacturaventa->idVendedor,$cabecerafacturaventa->idSucursal,$cabecerafacturaventa->id);
      $sql = "UPDATE CabeceraFacturaVenta SET idCliente = ?,idVehiculo = ?,kilometraje = ?,fechaFactura = ?,numeroFactura = ?,observaciones = ?,idVendedor = ?,idSucursal = ? WHERE id = ?;";
      $fechaFacturaNoSQLTime = strtotime($cabecerafacturaventa->fechaFactura);
      $fechaFacturaSQLTime = date("Y-m-d", $fechaFacturaNoSQLTime);
      $cabecerafacturaventa->fechaFactura = $fechaFacturaSQLTime;
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
      $sql = "DELETE FROM CabeceraFacturaVenta WHERE id = ?;";
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
         $sql = "SELECT * FROM CabeceraFacturaVenta;";
      }else{
      $parametros = array($id);
         $sql = "SELECT * FROM CabeceraFacturaVenta WHERE id = ?;";
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function leer_paginado($args)
   {
      $pagina = $args["pagina"];
      $registrosPorPagina = $args["registros_por_pagina"];
      $desde = (($pagina-1)*$registrosPorPagina);
      $sql ="SELECT * FROM CabeceraFacturaVenta LIMIT $desde,$registrosPorPagina;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function numero_paginas($args)
   {
      $registrosPorPagina = $args["registros_por_pagina"];
      $sql ="SELECT IF(ceil(count(*)/$registrosPorPagina)>0,ceil(count(*)/$registrosPorPagina),1) as 'paginas' FROM CabeceraFacturaVenta;";
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
            $sql = "SELECT * FROM CabeceraFacturaVenta WHERE $nombreColumna = ?;";
            break;
         case "inicia":
            $sql = "SELECT * FROM CabeceraFacturaVenta WHERE $nombreColumna LIKE '$filtro%';";
            break;
         case "termina":
            $sql = "SELECT * FROM CabeceraFacturaVenta WHERE $nombreColumna LIKE '%$filtro';";
            break;
         default:
            $sql = "SELECT * FROM CabeceraFacturaVenta WHERE $nombreColumna LIKE '%$filtro%';";
            break;
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }
}