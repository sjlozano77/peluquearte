-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2023 a las 05:11:03
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `peluqueria`
--
CREATE DATABASE IF NOT EXISTS `peluqueria` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `peluqueria`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `Id_empleado` int(2) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `Usuario` varchar(100) NOT NULL,
  `contraseña` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`Id_empleado`, `Nombre`, `Apellido`, `Usuario`, `contraseña`) VALUES
(1, 'Juan', 'Perez', 'Juancito23', '12345'),
(2, 'Raul', 'Magnasco', 'magnifico8', '54321'),
(3, 'Silvia', 'González', 'almafuerte5', '678910');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `Id_Reserva` int(4) NOT NULL,
  `DNI` int(8) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(40) NOT NULL,
  `Dia` varchar(15) NOT NULL,
  `Hora` varchar(111) NOT NULL,
  `Estado` varchar(20) NOT NULL,
  `Id_empleado` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`Id_Reserva`, `DNI`, `Nombre`, `Apellido`, `Dia`, `Hora`, `Estado`, `Id_empleado`) VALUES
(1, 123, 'pablo', 'guzman', 'Lunes', '', 'Confirmado', 1),
(2, 123, 'Pablo', 'Guzman', 'Lunes', '', 'Confirmado', 1),
(3, 456, 'Ariel', 'Grizman', 'Lunes', '', 'Pendiente', 2),
(4, 789, 'Marcos', 'Fernandez', 'Martes', '', 'Cancelado', 2),
(5, 111, 'Matias', 'Aguirre', 'Miercoles', '', 'Confirmado', 1),
(6, 123, 'Pablo', 'Guzman', 'Miercoles', '', 'Confirmado', 3),
(8, 234234, 'fgdfg', 'dfgdfg', '2023-06-01', '454', 'reservado', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`Id_empleado`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`Id_Reserva`),
  ADD KEY `Id_empleado` (`Id_empleado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `Id_empleado` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `Id_Reserva` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`Id_empleado`) REFERENCES `empleado` (`Id_empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
