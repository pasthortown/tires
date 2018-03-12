DROP DATABASE llantas;
CREATE DATABASE llantas DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE llantas;

CREATE TABLE llanta (
    id INT NOT NULL AUTO_INCREMENT,
    codigo VARCHAR(500) NULL,
    nombre VARCHAR(500) NULL,
    ancho DOUBLE NULL,
    perfilLlanta DOUBLE NULL,
    fechaFabricacion DATE NULL,
    idConstruccionLlanta INT NULL,
    diametroRin DOUBLE NULL,
    idIndiceCarga INT NULL,
    idIndiceVelocidad INT NULL,
    codigoUTQG VARCHAR(100) NULL,
    presionMaxima DOUBLE NULL,
    DOT VARCHAR(100) NULL,
    limiteCarga VARCHAR(100) NULL,
    idFabricante INT NULL,
    idUbicacionPais VARCHAR(100) NULL,
    idCaracteristicaTerreno INT NULL,
    idTipoUso INT NULL,
    labrado VARCHAR(100) NULL,
    PRIMARY KEY (id)
);

CREATE TABLE IndiceVelocidad (
    id INT NOT NULL AUTO_INCREMENT,
    codigo VARCHAR(10) NULL,
    descripcion VARCHAR(100) NULL,
    velocidadMaxima INT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE ConstruccionLlanta (
    id INT NOT NULL AUTO_INCREMENT,
    descripcion VARCHAR(100) NULL,
    PRIMARY KEY (id)
);

CREATE TABLE IndiceCarga (
    id INT NOT NULL AUTO_INCREMENT,
    capacidad DOUBLE NULL,
    PRIMARY KEY (id)
);

CREATE TABLE TipoUso (
    id INT NOT NULL AUTO_INCREMENT,
    descripcion VARCHAR(500) NULL,
    PRIMARY KEY (id)
);

CREATE TABLE CaracteristicaTerreno (
    id INT NOT NULL AUTO_INCREMENT,
    descripcion VARCHAR(500) NULL,
    PRIMARY KEY (id)
);

CREATE TABLE Fabricante (
    id INT NOT NULL AUTO_INCREMENT,
    descripcion VARCHAR(500) NULL,
    PRIMARY KEY (id)
);

CREATE TABLE Persona (
    id INT NOT NULL AUTO_INCREMENT,
    identificacion VARCHAR(50) NULL,
    nombres VARCHAR(200) NULL,
    apellidos VARCHAR(200) NULL,
    telefono1 VARCHAR(20) NULL,
    telefono2 VARCHAR(20) NULL,
    correoElectronico VARCHAR(500) NULL,
    idUbicacionPais VARCHAR(100) NULL,
    idUbicacionProvincia VARCHAR(100) NULL,
    idUbicacionCanton VARCHAR(100) NULL,
    idUbicacionParroquia VARCHAR(100) NULL,
    idGenero INT NULL,
    direccion VARCHAR(500) NULL,
    PRIMARY KEY (id)
);

CREATE TABLE Genero(
	id INT AUTO_INCREMENT NOT NULL,
	descripcion varchar(255) NULL,
PRIMARY KEY (id));

CREATE TABLE Ubicacion (
    id INT NOT NULL AUTO_INCREMENT,
    codigo VARCHAR(50) NULL,
    descripcion VARCHAR(100) NULL,
    codigoPadre VARCHAR(50) NULL,
    PRIMARY KEY (id)
);

CREATE TABLE Vehiculo (
    id INT NOT NULL AUTO_INCREMENT,
    placa VARCHAR(20) NULL,
    numeroMotor VARCHAR(200) NULL,
    numeroChasis VARCHAR(200) NULL,
    idMarca INT NULL,
    modelo VARCHAR(200) NULL,
    idTipoVehiculo INT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE Bienes (
    id INT NOT NULL AUTO_INCREMENT,
    codigo VARCHAR(100) NULL,
    descripcion VARCHAR(200) NULL,
    fechaCompra DATE NULL,
    precioCompra DOUBLE NULL,
    idProveedor INT NULL,
    idFacturaCompra INT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE Marca (
    id INT NOT NULL AUTO_INCREMENT,
    descripcion VARCHAR(500) NULL,
    PRIMARY KEY (id)
);

CREATE TABLE TipoVehiculo (
    id INT NOT NULL AUTO_INCREMENT,
    descripcion VARCHAR(500) NULL,
    PRIMARY KEY (id)
);

CREATE TABLE Proveedor (
    id INT NOT NULL AUTO_INCREMENT,
    identificacion VARCHAR(50) NULL,
    nombreCompleto VARCHAR(200) NULL,
    nombreContacto VARCHAR(500) NULL,
    telefono1 VARCHAR(20) NULL,
    telefono2 VARCHAR(20) NULL,
    correoElectronico VARCHAR(500) NULL,
    idUbicacionPais VARCHAR(100) NULL,
    idUbicacionProvincia VARCHAR(100) NULL,
    idUbicacionCanton VARCHAR(100) NULL,
    idUbicacionParroquia VARCHAR(100) NULL,
    direccion VARCHAR(500) NULL,
    PRIMARY KEY (id)
);

CREATE TABLE CabeceraFacturaCompra (
    id INT NOT NULL AUTO_INCREMENT,
    idProveedor INT NULL,
    fechaFactura DATE NULL,
    numeroFactura VARCHAR(100) NULL,
    PRIMARY KEY (id)
);

CREATE TABLE CabeceraFacturaVenta (
    id INT NOT NULL AUTO_INCREMENT,
    idCliente INT NULL,
    idVehiculo INT NULL,
    kilometraje INT NULL,
    fechaFactura DATE NULL,
    numeroFactura VARCHAR(100) NULL,
    observaciones VARCHAR(4000) NULL,
    idVendedor INT NULL,
    idSucursal INT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE ImpuestosProductoCompra (
    id INT NOT NULL AUTO_INCREMENT,
    idProductoCompra INT NULL,
    nombre VARCHAR(100) NULL,
    descripcion VARCHAR(500) NULL,
    porcentaje DOUBLE NULL,
    PRIMARY KEY (id)
);

CREATE TABLE ImpuestosProductoVenta (
    id INT NOT NULL AUTO_INCREMENT,
    idProductoVenta INT NULL,
    nombre VARCHAR(100) NULL,
    descripcion VARCHAR(500) NULL,
    porcentaje DOUBLE NULL,
    PRIMARY KEY (id)
);

CREATE TABLE ImpuestosServicioCompra (
    id INT NOT NULL AUTO_INCREMENT,
    idServicioCompra INT NULL,
    nombre VARCHAR(100) NULL,
    descripcion VARCHAR(500) NULL,
    porcentaje DOUBLE NULL,
    PRIMARY KEY (id)
);

CREATE TABLE ImpuestosServicioVenta (
    id INT NOT NULL AUTO_INCREMENT,
    idServicioVenta INT NULL,
    nombre VARCHAR(100) NULL,
    descripcion VARCHAR(500) NULL,
    porcentaje DOUBLE NULL,
    PRIMARY KEY (id)
);

CREATE TABLE ImpuestosInsumoCompra (
    id INT NOT NULL AUTO_INCREMENT,
    idInsumoCompra INT NULL,
    nombre VARCHAR(100) NULL,
    descripcion VARCHAR(500) NULL,
    porcentaje DOUBLE NULL,
    PRIMARY KEY (id)
);

CREATE TABLE ImpuestosInsumoVenta (
    id INT NOT NULL AUTO_INCREMENT,
    idInsumoVenta INT NULL,
    nombre VARCHAR(100) NULL,
    descripcion VARCHAR(500) NULL,
    porcentaje DOUBLE NULL,
    PRIMARY KEY (id)
);

CREATE TABLE ProductoVenta (
    id INT NOT NULL AUTO_INCREMENT,
    descripcion VARCHAR(100) NULL,
    precio DOUBLE NULL,
    PRIMARY KEY (id)
);

CREATE TABLE ProductoCompra (
    id INT NOT NULL AUTO_INCREMENT,
    descripcion VARCHAR(100) NULL,
    precio DOUBLE NULL,
    PRIMARY KEY (id)
);

CREATE TABLE LlantaVenta (
    id INT NOT NULL AUTO_INCREMENT,
    idLlanta INT NULL,
    serie VARCHAR(100) NULL,
    precio DOUBLE NULL,
    PRIMARY KEY (id)
);

CREATE TABLE ServicioVenta (
    id INT NOT NULL AUTO_INCREMENT,
    descripcion VARCHAR(500) NULL,
    precio DOUBLE NULL,
    PRIMARY KEY (id)
);

CREATE TABLE InsumoVenta (
    id INT NOT NULL AUTO_INCREMENT,
    descripcion VARCHAR(500) NULL,
    precio DOUBLE NULL,
    PRIMARY KEY (id)
);

CREATE TABLE LlantaCompra (
    id INT NOT NULL AUTO_INCREMENT,
    idLlanta INT NULL,
    serie VARCHAR(100) NULL,
    precio DOUBLE NULL,
    PRIMARY KEY (id)
);

CREATE TABLE ServicioCompra (
    id INT NOT NULL AUTO_INCREMENT,
    descripcion VARCHAR(500) NULL,
    precio DOUBLE NULL,
    PRIMARY KEY (id)
);

CREATE TABLE InsumoCompra (
    id INT NOT NULL AUTO_INCREMENT,
    descripcion VARCHAR(500) NULL,
    precio DOUBLE NULL,
    PRIMARY KEY (id)
);

CREATE TABLE DetalleFacturaVentaProducto (
    id INT NOT NULL AUTO_INCREMENT,
    idCabeceraFacturaVenta INT NULL,
    idProductoVenta INT NULL,
    cantidad DOUBLE NULL,
    descuentoPorcentaje DOUBLE NULL,
    PRIMARY KEY (id)
);

CREATE TABLE DetalleFacturaVentaServicio (
    id INT NOT NULL AUTO_INCREMENT,
    idCabeceraFacturaVenta INT NULL,
    idServicioVenta INT NULL,
    cantidad DOUBLE NULL,
    idTecnicoLider INT NULL,
    observaciones VARCHAR(4096) NULL,
    descuentoPorcentaje DOUBLE NULL,
    PRIMARY KEY (id)
);

CREATE TABLE DetalleFacturaVentaInsumo (
    id INT NOT NULL AUTO_INCREMENT,
    idCabeceraFacturaVenta INT NULL,
    idInsumoVenta INT NULL,
    cantidad DOUBLE NULL,
    descuentoPorcentaje DOUBLE NULL,
    PRIMARY KEY (id)
);

CREATE TABLE DetalleFacturaCompraProducto (
    id INT NOT NULL AUTO_INCREMENT,
    idCabeceraFacturaCompra INT NULL,
    idProductoCompra INT NULL,
    cantidad DOUBLE NULL,
    descuentoPorcentaje DOUBLE NULL,
    PRIMARY KEY (id)
);

CREATE TABLE DetalleFacturaCompraServicio (
    id INT NOT NULL AUTO_INCREMENT,
    idCabeceraFacturaCompra INT NULL,
    idServicioCompra INT NULL,
    cantidad DOUBLE NULL,
    descuentoPorcentaje DOUBLE NULL,
    PRIMARY KEY (id)
);

CREATE TABLE DetalleFacturaCompraInsumo (
    id INT NOT NULL AUTO_INCREMENT,
    idCabeceraFacturaCompra INT NULL,
    idInsumoCompra INT NULL,
    cantidad DOUBLE NULL,
    descuentoPorcentaje DOUBLE NULL,
    PRIMARY KEY (id)
);

CREATE TABLE Empleado (
    id INT NOT NULL AUTO_INCREMENT,
    idPersona INT NULL,
    idSucursal INT NULL,
    idCargo INT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE Cargo (
    id INT NOT NULL AUTO_INCREMENT,
    descripcion VARCHAR(100) NULL,
    funciones TEXT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE Sucursal (
    id INT NOT NULL AUTO_INCREMENT,
    RUC VARCHAR(100) NULL,
    nombre VARCHAR(200) NULL,
    telefono1 VARCHAR(20) NULL,
    telefono2 VARCHAR(20) NULL,
    correoElectronico VARCHAR(500) NULL,
    idUbicacionPais VARCHAR(100) NULL,
    idUbicacionProvincia VARCHAR(100) NULL,
    idUbicacionCanton VARCHAR(100) NULL,
    idUbicacionParroquia VARCHAR(100) NULL,
    direccion VARCHAR(500) NULL,
    PRIMARY KEY (id)
);

CREATE TABLE Sueldo (
    id INT NOT NULL AUTO_INCREMENT,
    idContrato INT NULL,
    montoBruto DOUBLE NULL,
    fecha DATE NULL,
    idBaseIESS INT NULL,
    porcentajeIESSEmpleado DOUBLE NULL,
    porcentajeIESSEmpleador DOUBLE NULL,
    PRIMARY KEY (id)
);

CREATE TABLE Contrato (
    id INT NOT NULL AUTO_INCREMENT,
    codigo VARCHAR(100) NULL,
    idCargo INT NULL,
    fechaInicio DATE NULL,
    fechaFin DATE NULL,
    idMotivoFin INT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE MotivoFin (
    id INT NOT NULL AUTO_INCREMENT,
    descripcion VARCHAR(100) NULL,
    PRIMARY KEY (id)
);

CREATE TABLE BaseIESS (
    id INT NOT NULL AUTO_INCREMENT,
    descripcion VARCHAR(100) NULL,
    monto DOUBLE NULL,
    PRIMARY KEY (id)
);