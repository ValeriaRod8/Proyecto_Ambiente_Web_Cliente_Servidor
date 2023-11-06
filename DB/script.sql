CREATE TABLE `consultas` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(10) NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Detalle` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `consultas`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `consultas`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;