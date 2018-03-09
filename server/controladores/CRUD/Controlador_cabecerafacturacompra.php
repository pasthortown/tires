<?php
include_once('../controladores/Controlador_Base.php');
include_once('../entidades/CRUD/CabeceraFacturaCompra.php');
class Controlador_cabecerafacturacompra extends Controlador_Base
{
   function crear($args)
   {
      $cabecerafacturacompra = new CabeceraFacturaCompra($args["id"],$args["idProveedor"],$args["fechaFactura"],$args["numeroFactura"]);
      $sql = "INSERT INTO CabeceraFacturaCompra (idProveedor,fechaFactura,numeroFactura) VALUES (?,?,?);";
      $fechaFacturaNoSQLTime = strtotime($cabecerafacturacompra->fechaFactura);
      $fechaFacturaSQLTime = date("Y-m-d", $fechaFacturaNoSQLTime);
      $cabecerafacturacompra->fechaFactura = $fechaFacturaSQLTime;
      $parametros = array($cabecerafacturacompra->idProveedor,$cabecerafacturacompra->fechaFactura,$cabecerafacturacompra->numeroFactura);
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      if(is_null($respuesta[0])){
         return true;
      }else{
         return false;
      }
   }

   function actualizar($args)
   {
      $cabecerafacturacompra = new CabeceraFacturaCompra($args["id"],$args["idProveedor"],$args["fechaFactura"],$args["numeroFactura"]);
      $parametros = array($cabecerafacturacompra->idProveedor,$cabecerafacturacompra->fechaFactura,$cabecerafacturacompra->numeroFactura,$cabecerafacturacompra->id);
      $sql = "UPDATE CabeceraFacturaCompra SET idProveedor = ?,fechaFactura = ?,numeroFactura = ? WHERE id = ?;";
      $fechaFacturaNoSQLTime = strtotime($cabecerafacturacompra->fechaFactura);
      $fechaFacturaSQLTime = date("Y-m-d", $fechaFacturaNoSQLTime);
      $cabecerafacturacompra->fechaFactura = $fechaFacturaSQLTime;
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
      $sql = "DELETE FROM CabeceraFacturaCompra WHERE id = ?;";
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
         $sql = "SELECT * FROM CabeceraFacturaCompra;";
      }else{
      $parametros = array($id);
         $sql = "SELECT * FROM CabeceraFacturaCompra WHERE id = ?;";
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function leer_paginado($args)
   {
      $pagina = $args["pagina"];
      $registrosPorPagina = $args["registros_por_pagina"];
      $desde = (($pagina-1)*$registrosPorPagina);
      $sql ="SELECT * FROM CabeceraFacturaCompra LIMIT $desde,$registrosPorPagina;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function numero_paginas($args)
   {
      $registrosPorPagina = $args["registros_por_pagina"];
      $sql ="SELECT IF(ceil(count(*)/$registrosPorPagina)>0,ceil(count(*)/$registrosPorPagina),1) as 'paginas' FROM CabeceraFacturaCompra;";
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
            $sql = "SELECT * FROM CabeceraFacturaCompra WHERE $nombreColumna = ?;";
            break;
         case "inicia":
            $sql = "SELECT * FROM CabeceraFacturaCompra WHERE $nombreColumna LIKE '$filtro%';";
            break;
         case "termina":
            $sql = "SELECT * FROM CabeceraFacturaCompra WHERE $nombreColumna LIKE '%$filtro';";
            break;
         default:
            $sql = "SELECT * FROM CabeceraFacturaCompra WHERE $nombreColumna LIKE '%$filtro%';";
            break;
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }
}