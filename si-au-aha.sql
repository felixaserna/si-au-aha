-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-09-2020 a las 19:51:23
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
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellidoPaterno` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellidoMaterno` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `sede` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fechaCurso` date NOT NULL,
  `factura` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `proveedor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fechaCompra` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariosdb`
--

CREATE TABLE `usuariosdb` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellidop` varchar(200) NOT NULL,
  `apellidom` varchar(200) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nomsitio` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuariosdb`
--

INSERT INTO `usuariosdb` (`id`, `nombre`, `apellidop`, `apellidom`, `usuario`, `password`, `nomsitio`, `telefono`) VALUES
(1, 'FÃ©lix Antonio', 'Serna', 'Olguin', 'admin', 'admin123', 'Grupo Aspec Prehospital', '2731256673');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro_facturas`
--
ALTER TABLE `registro_facturas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuariosdb`
--
ALTER TABLE `usuariosdb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro_facturas`
--
ALTER TABLE `registro_facturas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuariosdb`
--
ALTER TABLE `usuariosdb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
