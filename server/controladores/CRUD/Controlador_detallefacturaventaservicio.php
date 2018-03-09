<?php
include_once('../controladores/Controlador_Base.php');
include_once('../entidades/CRUD/DetalleFacturaVentaServicio.php');
class Controlador_detallefacturaventaservicio extends Controlador_Base
{
   function crear($args)
   {
      $detallefacturaventaservicio = new DetalleFacturaVentaServicio($args["id"],$args["idCabeceraFacturaVenta"],$args["idServicioVenta"],$args["cantidad"],$args["idTecnicoLider"],$args["observaciones"],$args["descuentoPorcentaje"]);
      $sql = "INSERT INTO DetalleFacturaVentaServicio (idCabeceraFacturaVenta,idServicioVenta,cantidad,idTecnicoLider,observaciones,descuentoPorcentaje) VALUES (?,?,?,?,?,?);";
      $parametros = array($detallefacturaventaservicio->idCabeceraFacturaVenta,$detallefacturaventaservicio->idServicioVenta,$detallefacturaventaservicio->cantidad,$detallefacturaventaservicio->idTecnicoLider,$detallefacturaventaservicio->observaciones,$detallefacturaventaservicio->descuentoPorcentaje);
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      if(is_null($respuesta[0])){
         return true;
      }else{
         return false;
      }
   }

   function actualizar($args)
   {
      $detallefacturaventaservicio = new DetalleFacturaVentaServicio($args["id"],$args["idCabeceraFacturaVenta"],$args["idServicioVenta"],$args["cantidad"],$args["idTecnicoLider"],$args["observaciones"],$args["descuentoPorcentaje"]);
      $parametros = array($detallefacturaventaservicio->idCabeceraFacturaVenta,$detallefacturaventaservicio->idServicioVenta,$detallefacturaventaservicio->cantidad,$detallefacturaventaservicio->idTecnicoLider,$detallefacturaventaservicio->observaciones,$detallefacturaventaservicio->descuentoPorcentaje,$detallefacturaventaservicio->id);
      $sql = "UPDATE DetalleFacturaVentaServicio SET idCabeceraFacturaVenta = ?,idServicioVenta = ?,cantidad = ?,idTecnicoLider = ?,observaciones = ?,descuentoPorcentaje = ? WHERE id = ?;";
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
      $sql = "DELETE FROM DetalleFacturaVentaServicio WHERE id = ?;";
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
         $sql = "SELECT * FROM DetalleFacturaVentaServicio;";
      }else{
      $parametros = array($id);
         $sql = "SELECT * FROM DetalleFacturaVentaServicio WHERE id = ?;";
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function leer_paginado($args)
   {
      $pagina = $args["pagina"];
      $registrosPorPagina = $args["registros_por_pagina"];
      $desde = (($pagina-1)*$registrosPorPagina);
      $sql ="SELECT * FROM DetalleFacturaVentaServicio LIMIT $desde,$registrosPorPagina;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function numero_paginas($args)
   {
      $registrosPorPagina = $args["registros_por_pagina"];
      $sql ="SELECT IF(ceil(count(*)/$registrosPorPagina)>0,ceil(count(*)/$registrosPorPagina),1) as 'paginas' FROM DetalleFacturaVentaServicio;";
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
            $sql = "SELECT * FROM DetalleFacturaVentaServicio WHERE $nombreColumna = ?;";
            break;
         case "inicia":
            $sql = "SELECT * FROM DetalleFacturaVentaServicio WHERE $nombreColumna LIKE '$filtro%';";
            break;
         case "termina":
            $sql = "SELECT * FROM DetalleFacturaVentaServicio WHERE $nombreColumna LIKE '%$filtro';";
            break;
         default:
            $sql = "SELECT * FROM DetalleFacturaVentaServicio WHERE $nombreColumna LIKE '%$filtro%';";
            break;
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }
}