<?php
include_once('../controladores/Controlador_Base.php');
include_once('../entidades/CRUD/Cliente.php');
class Controlador_cliente extends Controlador_Base
{
   function crear($args)
   {
      $cliente = new Cliente($args["id"],$args["identificacion"],$args["nombres"],$args["apellidos"],$args["telefono1"],$args["telefono2"],$args["correoElectronico"],$args["direccion"],$args["ubicacion"]);
      $sql = "INSERT INTO Cliente (identificacion,nombres,apellidos,telefono1,telefono2,correoElectronico,direccion,ubicacion) VALUES (?,?,?,?,?,?,?,?);";
      $parametros = array($cliente->identificacion,$cliente->nombres,$cliente->apellidos,$cliente->telefono1,$cliente->telefono2,$cliente->correoElectronico,$cliente->direccion,$cliente->ubicacion);
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      if(is_null($respuesta[0])){
         return true;
      }else{
         return false;
      }
   }

   function actualizar($args)
   {
      $cliente = new Cliente($args["id"],$args["identificacion"],$args["nombres"],$args["apellidos"],$args["telefono1"],$args["telefono2"],$args["correoElectronico"],$args["direccion"],$args["ubicacion"]);
      $parametros = array($cliente->identificacion,$cliente->nombres,$cliente->apellidos,$cliente->telefono1,$cliente->telefono2,$cliente->correoElectronico,$cliente->direccion,$cliente->ubicacion,$cliente->id);
      $sql = "UPDATE Cliente SET identificacion = ?,nombres = ?,apellidos = ?,telefono1 = ?,telefono2 = ?,correoElectronico = ?,direccion = ?,ubicacion = ? WHERE id = ?;";
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
      $sql = "DELETE FROM Cliente WHERE id = ?;";
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
         $sql = "SELECT * FROM Cliente;";
      }else{
      $parametros = array($id);
         $sql = "SELECT * FROM Cliente WHERE id = ?;";
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function leer_paginado($args)
   {
      $pagina = $args["pagina"];
      $registrosPorPagina = $args["registros_por_pagina"];
      $desde = (($pagina-1)*$registrosPorPagina);
      $sql ="SELECT * FROM Cliente LIMIT $desde,$registrosPorPagina;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function numero_paginas($args)
   {
      $registrosPorPagina = $args["registros_por_pagina"];
      $sql ="SELECT IF(ceil(count(*)/$registrosPorPagina)>0,ceil(count(*)/$registrosPorPagina),1) as 'paginas' FROM Cliente;";
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
            $sql = "SELECT * FROM Cliente WHERE $nombreColumna = ?;";
            break;
         case "inicia":
            $sql = "SELECT * FROM Cliente WHERE $nombreColumna LIKE '$filtro%';";
            break;
         case "termina":
            $sql = "SELECT * FROM Cliente WHERE $nombreColumna LIKE '%$filtro';";
            break;
         default:
            $sql = "SELECT * FROM Cliente WHERE $nombreColumna LIKE '%$filtro%';";
            break;
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }
}