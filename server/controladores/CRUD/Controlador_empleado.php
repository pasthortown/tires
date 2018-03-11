<?php
include_once('../controladores/Controlador_Base.php');
include_once('../entidades/CRUD/Empleado.php');
class Controlador_empleado extends Controlador_Base
{
   function crear($args)
   {
      $empleado = new Empleado($args["id"],$args["idPersona"],$args["idSucursal"],$args["idCargo"]);
      $sql = "INSERT INTO Empleado (idPersona,idSucursal,idCargo) VALUES (?,?,?);";
      $parametros = array($empleado->idPersona,$empleado->idSucursal,$empleado->idCargo);
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      if(is_null($respuesta[0])){
         return true;
      }else{
         return false;
      }
   }

   function actualizar($args)
   {
      $empleado = new Empleado($args["id"],$args["idPersona"],$args["idSucursal"],$args["idCargo"]);
      $parametros = array($empleado->idPersona,$empleado->idSucursal,$empleado->idCargo,$empleado->id);
      $sql = "UPDATE Empleado SET idPersona = ?,idSucursal = ?,idCargo = ? WHERE id = ?;";
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
         $sql = "SELECT Empleado.*, CONCAT(Persona.apellidos, ' ', Persona.nombres) as 'Persona', CONCAT(Sucursal.nombre, ', ', Sucursal.direccion) as 'Sucursal', Cargo.descripcion as 'Cargo' FROM Empleado INNER JOIN Persona ON Empleado.idPersona = Persona.id INNER JOIN Sucursal ON Empleado.idSucursal = Sucursal.id INNER JOIN Cargo ON Empleado.idCargo = Cargo.id ORDER BY Sucursal, Persona ASC;";
      }else{
      $parametros = array($id);
         $sql = "SELECT Empleado.*, CONCAT(Persona.apellidos, ' ', Persona.nombres) as 'Persona', CONCAT(Sucursal.nombre, ', ', Sucursal.direccion) as 'Sucursal', Cargo.descripcion as 'Cargo' FROM Empleado INNER JOIN Persona ON Empleado.idPersona = Persona.id INNER JOIN Sucursal ON Empleado.idSucursal = Sucursal.id INNER JOIN Cargo ON Empleado.idCargo = Cargo.id WHERE Empleado.id = ?;";
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }

   function leer_paginado($args)
   {
      $pagina = $args["pagina"];
      $registrosPorPagina = $args["registros_por_pagina"];
      $desde = (($pagina-1)*$registrosPorPagina);
      $sql ="SELECT Empleado.*, CONCAT(Persona.apellidos, ' ', Persona.nombres) as 'Persona', CONCAT(Sucursal.nombre, ', ', Sucursal.direccion) as 'Sucursal', Cargo.descripcion as 'Cargo' FROM Empleado INNER JOIN Persona ON Empleado.idPersona = Persona.id INNER JOIN Sucursal ON Empleado.idSucursal = Sucursal.id INNER JOIN Cargo ON Empleado.idCargo = Cargo.id ORDER BY Sucursal, Persona ASC LIMIT $desde,$registrosPorPagina;";
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
            $sql = "SELECT Empleado.*, CONCAT(Persona.apellidos, ' ', Persona.nombres) as 'Persona', CONCAT(Sucursal.nombre, ', ', Sucursal.direccion) as 'Sucursal', Cargo.descripcion as 'Cargo' FROM Empleado INNER JOIN Persona ON Empleado.idPersona = Persona.id INNER JOIN Sucursal ON Empleado.idSucursal = Sucursal.id INNER JOIN Cargo ON Empleado.idCargo = Cargo.id WHERE $nombreColumna = ?;";
            break;
         case "inicia":
            $sql = "SELECT Empleado.*, CONCAT(Persona.apellidos, ' ', Persona.nombres) as 'Persona', CONCAT(Sucursal.nombre, ', ', Sucursal.direccion) as 'Sucursal', Cargo.descripcion as 'Cargo' FROM Empleado INNER JOIN Persona ON Empleado.idPersona = Persona.id INNER JOIN Sucursal ON Empleado.idSucursal = Sucursal.id INNER JOIN Cargo ON Empleado.idCargo = Cargo.id WHERE $nombreColumna LIKE '$filtro%' ORDER BY Sucursal, Persona ASC;";
            break;
         case "termina":
            $sql = "SELECT Empleado.*, CONCAT(Persona.apellidos, ' ', Persona.nombres) as 'Persona', CONCAT(Sucursal.nombre, ', ', Sucursal.direccion) as 'Sucursal', Cargo.descripcion as 'Cargo' FROM Empleado INNER JOIN Persona ON Empleado.idPersona = Persona.id INNER JOIN Sucursal ON Empleado.idSucursal = Sucursal.id INNER JOIN Cargo ON Empleado.idCargo = Cargo.id WHERE $nombreColumna LIKE '%$filtro' ORDER BY Sucursal, Persona ASC;";
            break;
         default:
            $sql = "SELECT Empleado.*, CONCAT(Persona.apellidos, ' ', Persona.nombres) as 'Persona', CONCAT(Sucursal.nombre, ', ', Sucursal.direccion) as 'Sucursal', Cargo.descripcion as 'Cargo' FROM Empleado INNER JOIN Persona ON Empleado.idPersona = Persona.id INNER JOIN Sucursal ON Empleado.idSucursal = Sucursal.id INNER JOIN Cargo ON Empleado.idCargo = Cargo.id WHERE $nombreColumna LIKE '%$filtro%' ORDER BY Sucursal, Persona ASC;";
            break;
      }
      $respuesta = $this->conexion->ejecutarConsulta($sql,$parametros);
      return $respuesta;
   }
}