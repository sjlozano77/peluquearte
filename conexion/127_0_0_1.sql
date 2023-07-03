-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-07-2023 a las 15:36:37
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

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
  `Id_empleado` int(4) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `Usuario` varchar(100) NOT NULL,
  `contraseña` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`Id_empleado`, `Nombre`, `Apellido`, `Usuario`, `contraseña`) VALUES
(1, 'Juan', 'Perez', 'Juancito23', '12345'),
(2, 'Raul', 'Magnasco', 'magnifico8', '54321'),
(3, 'Silvia', 'González', 'almafuerte5', '678910'),
(5, 'cc', 'cc', 'c10', '1'),
(6, 'd', 'd', 'd10', '1'),
(7, 'd', 'd', 'd10', '123'),
(8, 'E', 'E', 'e10', '1'),
(9, '1', 'sd', 'sd', '1'),
(10, 'fg', 'fdg', 'dfgdfg', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peluquero`
--

CREATE TABLE `peluquero` (
  `Dni` int(9) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Apellido` varchar(30) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `Ruta` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `peluquero`
--

INSERT INTO `peluquero` (`Dni`, `Nombre`, `Apellido`, `FechaNacimiento`, `Ruta`) VALUES
(4, 'hj', 'hj', '2023-07-22', '/img/perfiles/hj hj.jpg'),
(88, 'F', 'F', '2023-07-22', '/img/perfiles/F F.jpg'),
(111, 'pepe', 'flaco', '2023-07-22', '/img/perfiles/pepe flaco.jpg'),
(123, 'juan', 'perez', '2023-07-03', '/img/perfiles/juan perez.jpg'),
(222, 'fg', 'fdg', '2023-07-22', '/img/perfiles/fg fdg.jpg'),
(333, 'g', 'g', '2023-07-22', '/img/perfiles/g g.jpg'),
(415, 'FG', 'FG', '2023-07-22', '/img/perfiles/FG FG.jpg'),
(456, 'dd', 'ddd', '2023-07-22', '/img/perfiles/dd ddd.jpg'),
(789, 'pedro', 'luka', '2023-07-22', '/img/perfiles/pedro luka.jpg'),
(998, 'fg', 'fgfg', '2023-07-22', '/img/perfiles/fg fgfg.jpg'),
(4545, 'HHJJK', 'KKKK', '2023-07-22', '/img/perfiles/HHJJK KKKK.jpg'),
(5663, 'dfg', 'fgfg', '2023-07-22', '/img/perfiles/dfg fgfg.jpg'),
(7898, 'FGFG', 'GHHG', '2023-07-22', '/img/perfiles/FGFG GHHG.jpg'),
(8219, 'ghh', 'ghgfh', '2023-07-22', '/img/perfiles/ghh ghgfh.jpg'),
(9371, 'dfdf', 'dfdf', '2023-07-22', '/img/perfiles/dfdf dfdf.jpg'),
(9959, 'fg', 'fggf', '2023-07-22', '/img/perfiles/fg fggf.jpg'),
(9992, 'df', 'fd', '2023-07-22', '/img/perfiles/df fd.jpg'),
(14545, 'dfdf', 'dfgd', '2023-07-22', '/img/perfiles/dfdf dfgd.jpg'),
(54545, 'H', 'GH', '2023-07-22', '/img/perfiles/H GH.jpg'),
(54777, ' DSFZ HF', 'GFH DGJN', '2023-07-22', '/img/perfiles/ DSFZ HF GFH DGJN.jpg'),
(68765, 'df', 'fdgfg', '2023-07-22', '/img/perfiles/df fdgfg.jpg'),
(414545, 'fgh', 'ghgh', '2023-07-22', '/img/perfiles/fgh ghgh.jpg'),
(456856, 'ghgh', 'ghgh', '2023-07-22', '/img/perfiles/ghgh ghgh.jpg'),
(457459, 'ghj', 'gjh', '2023-07-22', '/img/perfiles/ghj gjh.jpg'),
(544854, 'dfg', 'fdg', '2023-07-22', '/img/perfiles/dfg fdg.jpg'),
(654545, 'df', 'fg', '2023-07-22', '/img/perfiles/df fg.jpg'),
(4544545, 'gh', 'gjh', '2023-07-22', '/img/perfiles/gh gjh.jpg'),
(4676657, 'hj', 'hj', '2023-07-22', '/img/perfiles/hj hj.jpg'),
(5454546, 'dfsdf', 'dfdf', '2023-07-22', '/img/perfiles/dfsdf dfdf.jpg'),
(7565656, 'gh', 'fghfgh', '2023-07-22', '/img/perfiles/gh fghfgh.jpg'),
(56656885, 'fgfg', 'cgfg', '2023-07-22', '/img/perfiles/fgfg cgfg.jpg'),
(556665646, 'gh', 'gh', '2023-07-22', '/img/perfiles/gh gh.jpg'),
(2147483647, 'fdgdfg', 'dfgdfg', '2023-07-22', '/img/perfiles/fdgdfg dfgdfg.jpg');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`Id_Reserva`, `DNI`, `Nombre`, `Apellido`, `Dia`, `Hora`, `Estado`, `Id_empleado`) VALUES
(9, 123, 'hgg', 'edrrd', '2023-07-23', '16:50:00', '', 1),
(10, 123, '777', '777', '2023-07-22', '11:45:00', 'Reservado', 2),
(11, 4545, 'ghgh', 'ghgh', '2023-07-22', '11:45:00', 'reservado', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`Id_empleado`);

--
-- Indices de la tabla `peluquero`
--
ALTER TABLE `peluquero`
  ADD PRIMARY KEY (`Dni`);

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
  MODIFY `Id_empleado` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `Id_Reserva` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
