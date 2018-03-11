<?php
include_once('../controladores/Controlador_Base.php');
include_once('../entidades/CRUD/Proveedor.php');
class Controlador_proveedor extends Controlador_Base
{
   function crear($args)
   {
      $proveedor = new Proveedor($args["id"],$args["identificacion"],$args["nombres"],$args["apellidos"],$args["telefono1"],$args["telefono2"],$args["correoElectronico"],$args["idUbicacionPais"],$args["idUbicacionProvincia"],$args["idUbicacionCanton"],$args["idUbicacionParroquia"],$args["direccion"]);
      $sql = "INSERT INTO Proveedor (identificacion,nombres,apellidos,telefono1,telefono2,correoElectronico,idUbicacionPais,idUbicacionProvincia,idUbicacionCanton,idUbicacionParroquia,direccion) VALUES (?,?,?,?,?,?,?,?,?,?,?);";
      $parametros = array($proveedor->identificacion,$proveedor->nombres,$proveedor->apellidos,$proveedor->telefono1,$proveedor->telefono2,$proveedor->correoElectronico,$proveedor->idUbicacionPais,$proveedor->idUbicacionProvincia,$proveedor->idUbicacionCanton,$proveedor->idUbicacionParroquia,$proveedor->direccion);
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      if(is_null($respuesta[0])){
         return true;
      }else{
         return false;
      }
   }

   function actualizar($args)
   {
      $proveedor = new Proveedor($args["id"],$args["identificacion"],$args["nombres"],$args["apellidos"],$args["telefono1"],$args["telefono2"],$args["correoElectronico"],$args["idUbicacionPais"],$args["idUbicacionProvincia"],$args["idUbicacionCanton"],$args["idUbicacionParroquia"],$args["direccion"]);
      $parametros = array($proveedor->identificacion,$proveedor->nombres,$proveedor->apellidos,$proveedor->telefono1,$proveedor->telefono2,$proveedor->correoElectronico,$proveedor->idUbicacionPais,$proveedor->idUbicacionProvincia,$proveedor->idUbicacionCanton,$proveedor->idUbicacionParroquia,$proveedor->direccion,$proveedor->id);
      $sql = "UPDATE Proveedor SET identificacion = ?,nombres = ?,apellidos = ?,telefono1 = ?,telefono2 = ?,correoElectronico = ?,idUbicacionPais = ?,idUbicacionProvincia = ?,idUbicacionCanton = ?,idUbicacionParroquia = ?,direccion = ? WHERE id = ?;";
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
      $sql = "DELETE FROM Proveedor WHERE id = ?;";
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
         $sql = "SELECT * FROM Proveedor;";
      }else{
      $parametros = array($id);
         $sql = "SELECT * FROM Proveedor WHERE id = ?;";
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function leer_paginado($args)
   {
      $pagina = $args["pagina"];
      $registrosPorPagina = $args["registros_por_pagina"];
      $desde = (($pagina-1)*$registrosPorPagina);
      $sql ="SELECT * FROM Proveedor LIMIT $desde,$registrosPorPagina;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function numero_paginas($args)
   {
      $registrosPorPagina = $args["registros_por_pagina"];
      $sql ="SELECT IF(ceil(count(*)/$registrosPorPagina)>0,ceil(count(*)/$registrosPorPagina),1) as 'paginas' FROM Proveedor;";
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
            $sql = "SELECT * FROM Proveedor WHERE $nombreColumna = ?;";
            break;
         case "inicia":
            $sql = "SELECT * FROM Proveedor WHERE $nombreColumna LIKE '$filtro%';";
            break;
         case "termina":
            $sql = "SELECT * FROM Proveedor WHERE $nombreColumna LIKE '%$filtro';";
            break;
         default:
            $sql = "SELECT * FROM Proveedor WHERE $nombreColumna LIKE '%$filtro%';";
            break;
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }
}