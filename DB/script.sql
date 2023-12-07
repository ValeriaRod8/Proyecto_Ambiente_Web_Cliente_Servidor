CREATE DATABASE consultorio;

USE consultorio;

CREATE TABLE `consultas` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Telefono` varchar(30) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Detalle` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `consultas`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `consultas`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;


CREATE TABLE `reserva` (
  `Id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Nombre` varchar(100) NOT NULL,
  `Telefono` INT NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Fecha` DATE NOT NULL,
  `Servicio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `usuarios` (
  `id` int(2) NOT NULL,
  `nombre` varchar(256) COLLATE utf8_spanish2_ci NOT NULL,
  `username` varchar(256) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(256) COLLATE utf8_spanish2_ci NOT NULL,
  `modificado` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

CREATE TABLE Reservas (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(255) NOT NULL,
    Apellidos VARCHAR(255) NOT NULL,
    Correo VARCHAR(255) NOT NULL,
    Servicio VARCHAR(255) NOT NULL,
    Fecha DATE NOT NULL,
    Hora TIME NOT NULL,
    MensajeAdicional TEXT,
    Estado VARCHAR(20) NOT NULL, 
    FechaCreacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FechaModificacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE Contacto (
  Id INT AUTO_INCREMENT PRIMARY KEY,
  Descripcion VARCHAR(255) NOT NULL
);