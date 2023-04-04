-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-04-2023 a las 22:48:32
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clientes`
--
CREATE DATABASE IF NOT EXISTS `clientes` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `clientes`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `circuitos`
--

CREATE TABLE `circuitos` (
  `id_circuitos` int(11) NOT NULL,
  `cid` varchar(20) NOT NULL,
  `id_empresas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `circuitos`
--

INSERT INTO `circuitos` (`id_circuitos`, `cid`, `id_empresas`) VALUES
(1, '6154889', 1),
(2, '8769654', 1),
(3, '13077350', 2),
(6, '111111111', 3),
(9, '99999', 6),
(10, '555', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id_contactos` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `numero` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_empresas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id_contactos`, `nombre`, `numero`, `email`, `id_empresas`) VALUES
(1, 'Peter Morales', '945967135', 'infraestructura.tics@ich.edu.pe', 1),
(2, 'Carlos Moyano', '981617453', 'cmoyano@cmch.com.pe', 2),
(3, 'Johny Castañeda', '946578259', 'infraestructura.tics@ich.edu.pe', 1),
(6, 'qqqqqq', '99999', 'qqqqq', 6),
(7, '', '555', 'YYY', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id_empresas` int(11) NOT NULL,
  `ruc` varchar(20) NOT NULL,
  `razonsocial` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id_empresas`, `ruc`, `razonsocial`) VALUES
(1, '20125753869', 'INSTITUTO DE CIENCIAS Y HUMANIDADES'),
(2, '20515290142', 'CLINICA MEDICA CAYETANO HEREDIA S.A'),
(3, 'prueba', '50505050500'),
(4, 'rdrdrd', '33333333333'),
(5, 'rz', '4444444'),
(6, 'qqqqq', '9999999'),
(7, 'YYYY', '555');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `circuitos`
--
ALTER TABLE `circuitos`
  ADD PRIMARY KEY (`id_circuitos`),
  ADD KEY `id_empresas` (`id_empresas`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id_contactos`),
  ADD KEY `id_empresas` (`id_empresas`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id_empresas`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `circuitos`
--
ALTER TABLE `circuitos`
  MODIFY `id_circuitos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id_contactos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id_empresas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `circuitos`
--
ALTER TABLE `circuitos`
  ADD CONSTRAINT `circuitos_ibfk_1` FOREIGN KEY (`id_empresas`) REFERENCES `empresas` (`id_empresas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD CONSTRAINT `contactos_ibfk_1` FOREIGN KEY (`id_empresas`) REFERENCES `empresas` (`id_empresas`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
