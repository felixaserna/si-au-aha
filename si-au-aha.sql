-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-08-2020 a las 03:23:56
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `si-au-aha`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_facturas`
--

CREATE TABLE `registro_facturas` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_unicode_ci NOT NULL,
  `apellidoPaterno` text COLLATE utf8_unicode_ci NOT NULL,
  `apellidoMaterno` text COLLATE utf8_unicode_ci NOT NULL,
  `sede` text COLLATE utf8_unicode_ci NOT NULL,
  `fechaCurso` date NOT NULL,
  `proveedor` text COLLATE utf8_unicode_ci NOT NULL,
  `fechaCompra` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `registro_facturas`
--

INSERT INTO `registro_facturas` (`id`, `nombre`, `apellidoPaterno`, `apellidoMaterno`, `sede`, `fechaCurso`, `proveedor`, `fechaCompra`) VALUES
(1, 'MARIA', 'CORDOVA', 'MIÃ‘ON', 'CCCAMP Xalapa', '2019-11-30', 'WorlPoin', '2019-11-07'),
(2, 'MAGALI ELIZABETH', 'ROSAS', 'PACHECO', 'CCCAMP Xalapa', '2019-11-03', 'WorlPoin', '2019-11-07'),
(3, 'CIRENIA GUADALUPE', 'FLORES', 'RUIZ', 'CCCAMP Xalapa', '2019-11-30', 'WorlPoin', '2019-11-07'),
(4, 'MARIA DE LOURDES', 'CORDOBA', 'MAVIL', 'CCCAMP Xalapa', '2019-11-30', 'WorlPoin', '2019-11-07'),
(5, 'CESAR ALEJANDRO', 'MARTINEZ', 'LOPEZ', 'CCCAMP Xalapa', '2019-11-30', 'WorlPoin', '2019-11-07');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro_facturas`
--
ALTER TABLE `registro_facturas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro_facturas`
--
ALTER TABLE `registro_facturas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
