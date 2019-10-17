-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 10-10-2019 a las 01:36:02
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ubd1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntoventa`
--

CREATE TABLE `puntoventa` (
  `NroPuntoVenta` int(11) NOT NULL,
  `DescripcionPV` varchar(50) NOT NULL,
  `NombreGerente` varchar(50) NOT NULL,
  `Ubicacion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `puntoventa`
--

INSERT INTO `puntoventa` (`NroPuntoVenta`, `DescripcionPV`, `NombreGerente`, `Ubicacion`) VALUES
(1, 'Restaurant Hotel', 'Marcos Acuña', 'Primer piso'),
(2, 'Restaurant Spa', 'Nacho Fernandez', 'Segundo piso'),
(3, 'Restaurant Casino', 'Nicolas Ottamendi', 'Primer piso');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `puntoventa`
--
ALTER TABLE `puntoventa`
  ADD PRIMARY KEY (`NroPuntoVenta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `puntoventa`
--
ALTER TABLE `puntoventa`
  MODIFY `NroPuntoVenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
