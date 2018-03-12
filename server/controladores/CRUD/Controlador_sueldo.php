<?php
include_once('../controladores/Controlador_Base.php');
include_once('../entidades/CRUD/Sueldo.php');
class Controlador_sueldo extends Controlador_Base
{
   function crear($args)
   {
      $sueldo = new Sueldo($args["id"],$args["idContrato"],$args["montoBruto"],$args["fecha"],$args["idBaseIESS"],$args["porcentajeIESSEmpleado"],$args["porcentajeIESSEmpleador"],$args["montoPagoPrimeraQuincena"],$args["montoPagoSegundaQuincena"]);
      $sql = "INSERT INTO Sueldo (idContrato,montoBruto,fecha,idBaseIESS,porcentajeIESSEmpleado,porcentajeIESSEmpleador,montoPagoPrimeraQuincena,montoPagoSegundaQuincena) VALUES (?,?,?,?,?,?,?,?);";
      $fechaNoSQLTime = strtotime($sueldo->fecha);
      $fechaSQLTime = date("Y-m-d", $fechaNoSQLTime);
      $sueldo->fecha = $fechaSQLTime;
      $parametros = array($sueldo->idContrato,$sueldo->montoBruto,$sueldo->fecha,$sueldo->idBaseIESS,$sueldo->porcentajeIESSEmpleado,$sueldo->porcentajeIESSEmpleador,$sueldo->montoPagoPrimeraQuincena,$sueldo->montoPagoSegundaQuincena);
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      if(is_null($respuesta[0])){
         return true;
      }else{
         return false;
      }
   }

   function actualizar($args)
   {
      $sueldo = new Sueldo($args["id"],$args["idContrato"],$args["montoBruto"],$args["fecha"],$args["idBaseIESS"],$args["porcentajeIESSEmpleado"],$args["porcentajeIESSEmpleador"],$args["montoPagoPrimeraQuincena"],$args["montoPagoSegundaQuincena"]);
      $parametros = array($sueldo->idContrato,$sueldo->montoBruto,$sueldo->fecha,$sueldo->idBaseIESS,$sueldo->porcentajeIESSEmpleado,$sueldo->porcentajeIESSEmpleador,$sueldo->montoPagoPrimeraQuincena,$sueldo->montoPagoSegundaQuincena,$sueldo->id);
      $sql = "UPDATE Sueldo SET idContrato = ?,montoBruto = ?,fecha = ?,idBaseIESS = ?,porcentajeIESSEmpleado = ?,porcentajeIESSEmpleador = ?,montoPagoPrimeraQuincena = ?,montoPagoSegundaQuincena = ? WHERE id = ?;";
      $fechaNoSQLTime = strtotime($sueldo->fecha);
      $fechaSQLTime = date("Y-m-d", $fechaNoSQLTime);
      $sueldo->fecha = $fechaSQLTime;
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
      $sql = "DELETE FROM Sueldo WHERE id = ?;";
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
         $sql = "SELECT * FROM Sueldo;";
      }else{
      $parametros = array($id);
         $sql = "SELECT * FROM Sueldo WHERE id = ?;";
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function leer_paginado($args)
   {
      $pagina = $args["pagina"];
      $registrosPorPagina = $args["registros_por_pagina"];
      $desde = (($pagina-1)*$registrosPorPagina);
      $sql ="SELECT * FROM Sueldo LIMIT $desde,$registrosPorPagina;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function numero_paginas($args)
   {
      $registrosPorPagina = $args["registros_por_pagina"];
      $sql ="SELECT IF(ceil(count(*)/$registrosPorPagina)>0,ceil(count(*)/$registrosPorPagina),1) as 'paginas' FROM Sueldo;";
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
            $sql = "SELECT * FROM Sueldo WHERE $nombreColumna = ?;";
            break;
         case "inicia":
            $sql = "SELECT * FROM Sueldo WHERE $nombreColumna LIKE '$filtro%';";
            break;
         case "termina":
            $sql = "SELECT * FROM Sueldo WHERE $nombreColumna LIKE '%$filtro';";
            break;
         default:
            $sql = "SELECT * FROM Sueldo WHERE $nombreColumna LIKE '%$filtro%';";
            break;
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }
}