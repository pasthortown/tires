<?php
include_once('../controladores/Controlador_Base.php');
include_once('../entidades/CRUD/Empleado.php');
class Controlador_empleado extends Controlador_Base
{
   function crear($args)
   {
      $empleado = new Empleado($args["id"],$args["identificacion"],$args["nombres"],$args["apellidos"],$args["telefono1"],$args["telefono2"],$args["correoElectronico"],$args["direccion"],$args["ubicacion"],$args["idSucursal"]);
      $sql = "INSERT INTO Empleado (identificacion,nombres,apellidos,telefono1,telefono2,correoElectronico,direccion,ubicacion,idSucursal) VALUES (?,?,?,?,?,?,?,?,?);";
      $parametros = array($empleado->identificacion,$empleado->nombres,$empleado->apellidos,$empleado->telefono1,$empleado->telefono2,$empleado->correoElectronico,$empleado->direccion,$empleado->ubicacion,$empleado->idSucursal);
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      if(is_null($respuesta[0])){
         return true;
      }else{
         return false;
      }
   }

   function actualizar($args)
   {
      $empleado = new Empleado($args["id"],$args["identificacion"],$args["nombres"],$args["apellidos"],$args["telefono1"],$args["telefono2"],$args["correoElectronico"],$args["direccion"],$args["ubicacion"],$args["idSucursal"]);
      $parametros = array($empleado->identificacion,$empleado->nombres,$empleado->apellidos,$empleado->telefono1,$empleado->telefono2,$empleado->correoElectronico,$empleado->direccion,$empleado->ubicacion,$empleado->idSucursal,$empleado->id);
      $sql = "UPDATE Empleado SET identificacion = ?,nombres = ?,apellidos = ?,telefono1 = ?,telefono2 = ?,correoElectronico = ?,direccion = ?,ubicacion = ?,idSucursal = ? WHERE id = ?;";
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
      $sql = "DELETE FROM Empleado WHERE id = ?;";
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
         $sql = "SELECT * FROM Empleado;";
      }else{
      $parametros = array($id);
         $sql = "SELECT * FROM Empleado WHERE id = ?;";
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function leer_paginado($args)
   {
      $pagina = $args["pagina"];
      $registrosPorPagina = $args["registros_por_pagina"];
      $desde = (($pagina-1)*$registrosPorPagina);
      $sql ="SELECT * FROM Empleado LIMIT $desde,$registrosPorPagina;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function numero_paginas($args)
   {
      $registrosPorPagina = $args["registros_por_pagina"];
      $sql ="SELECT IF(ceil(count(*)/$registrosPorPagina)>0,ceil(count(*)/$registrosPorPagina),1) as 'paginas' FROM Empleado;";
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
            $sql = "SELECT * FROM Empleado WHERE $nombreColumna = ?;";
            break;
         case "inicia":
            $sql = "SELECT * FROM Empleado WHERE $nombreColumna LIKE '$filtro%';";
            break;
         case "termina":
            $sql = "SELECT * FROM Empleado WHERE $nombreColumna LIKE '%$filtro';";
            break;
         default:
            $sql = "SELECT * FROM Empleado WHERE $nombreColumna LIKE '%$filtro%';";
            break;
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }
}