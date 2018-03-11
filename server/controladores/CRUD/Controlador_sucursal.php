<?php
include_once('../controladores/Controlador_Base.php');
include_once('../entidades/CRUD/Sucursal.php');
class Controlador_sucursal extends Controlador_Base
{
   function crear($args)
   {
      $sucursal = new Sucursal($args["id"],$args["RUC"],$args["nombre"],$args["telefono1"],$args["telefono2"],$args["correoElectronico"],$args["idUbicacionPais"],$args["idUbicacionProvincia"],$args["idUbicacionCanton"],$args["idUbicacionParroquia"],$args["direccion"]);
      $sql = "INSERT INTO Sucursal (RUC,nombre,telefono1,telefono2,correoElectronico,idUbicacionPais,idUbicacionProvincia,idUbicacionCanton,idUbicacionParroquia,direccion) VALUES (?,?,?,?,?,?,?,?,?,?);";
      $parametros = array($sucursal->RUC,$sucursal->nombre,$sucursal->telefono1,$sucursal->telefono2,$sucursal->correoElectronico,$sucursal->idUbicacionPais,$sucursal->idUbicacionProvincia,$sucursal->idUbicacionCanton,$sucursal->idUbicacionParroquia,$sucursal->direccion);
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      if(is_null($respuesta[0])){
         return true;
      }else{
         return false;
      }
   }

   function actualizar($args)
   {
      $sucursal = new Sucursal($args["id"],$args["RUC"],$args["nombre"],$args["telefono1"],$args["telefono2"],$args["correoElectronico"],$args["idUbicacionPais"],$args["idUbicacionProvincia"],$args["idUbicacionCanton"],$args["idUbicacionParroquia"],$args["direccion"]);
      $parametros = array($sucursal->RUC,$sucursal->nombre,$sucursal->telefono1,$sucursal->telefono2,$sucursal->correoElectronico,$sucursal->idUbicacionPais,$sucursal->idUbicacionProvincia,$sucursal->idUbicacionCanton,$sucursal->idUbicacionParroquia,$sucursal->direccion,$sucursal->id);
      $sql = "UPDATE Sucursal SET RUC = ?,nombre = ?,telefono1 = ?,telefono2 = ?,correoElectronico = ?,idUbicacionPais = ?,idUbicacionProvincia = ?,idUbicacionCanton = ?,idUbicacionParroquia = ?,direccion = ? WHERE id = ?;";
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
      $sql = "DELETE FROM Sucursal WHERE id = ?;";
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
         $sql = "SELECT * FROM Sucursal;";
      }else{
      $parametros = array($id);
         $sql = "SELECT * FROM Sucursal WHERE id = ?;";
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function leer_paginado($args)
   {
      $pagina = $args["pagina"];
      $registrosPorPagina = $args["registros_por_pagina"];
      $desde = (($pagina-1)*$registrosPorPagina);
      $sql ="SELECT * FROM Sucursal LIMIT $desde,$registrosPorPagina;";
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function numero_paginas($args)
   {
      $registrosPorPagina = $args["registros_por_pagina"];
      $sql ="SELECT IF(ceil(count(*)/$registrosPorPagina)>0,ceil(count(*)/$registrosPorPagina),1) as 'paginas' FROM Sucursal;";
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
            $sql = "SELECT * FROM Sucursal WHERE $nombreColumna = ?;";
            break;
         case "inicia":
            $sql = "SELECT * FROM Sucursal WHERE $nombreColumna LIKE '$filtro%';";
            break;
         case "termina":
            $sql = "SELECT * FROM Sucursal WHERE $nombreColumna LIKE '%$filtro';";
            break;
         default:
            $sql = "SELECT * FROM Sucursal WHERE $nombreColumna LIKE '%$filtro%';";
            break;
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }
}