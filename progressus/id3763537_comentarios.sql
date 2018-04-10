-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-04-2018 a las 19:17:00
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id3763537_comentarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ap_paterno` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ap_materno` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contra` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_domicilio` int(11) NOT NULL,
  `id_usuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilio`
--

CREATE TABLE IF NOT EXISTS `domicilio` (
  `id_domicilio` int(11) NOT NULL,
  `calle` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `n_interior` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `n_exterior` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `colonia` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `codigo_postal` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ciudad` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE IF NOT EXISTS `estado` (
  `id_estado` int(11) NOT NULL,
  `estatus` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `estatus`) VALUES
(1, 'ACTIVO'),
(2, 'INACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE IF NOT EXISTS `pedido` (
  `id_pedido` int(11) NOT NULL,
  `cantidad` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `id_producto` int(11) NOT NULL,
  `descripcion` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `precio` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `id_sub_sub_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sub_categoria`
--

CREATE TABLE IF NOT EXISTS `sub_categoria` (
  `id_sub_categoria` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sub_sub_categoria`
--

CREATE TABLE IF NOT EXISTS `sub_sub_categoria` (
  `id_sub_sub_categoria` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_sub_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuarios` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ap_paterno` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ap_materno` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `curp` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `rfc` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `imms` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contra` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_estado` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `nombre`, `ap_paterno`, `ap_materno`, `curp`, `rfc`, `imms`, `correo`, `contra`, `id_estado`) VALUES
(1, 'Alejandro', 'Galicia', 'Garcia', 'GAGA960815HMCLRL07', 'GAGA9608155G5', '6898014567', 'ale-galicia_96@hotmail.com', 'ninjaspartan117', 1),
(2, 'Cristian Alexander', 'Galicia', 'Garcia', 'GAGA960815HMCLRL07', 'GAGA9608155G5', '6898014567', 'cris@hotmail.com', 'ninjaspartan117', 2),
(3, 'Cristian Alexander', 'Galicia', 'Garcia', 'GAGA960815HMCLRL07', 'GAGA9608155G5', '6898014567', 'cris@hotmail.com', 'ninjaspartan117', 2),
(4, 'Cristian Alexander', 'Galicia', 'Garcia', 'GAGA960815HMCLRL07', 'GAGA9608155G5', '6898014567', 'cris@hotmail.com', 'ninjaspartan117', 1),
(5, 'Cristian Alexander', 'Galicia', 'Garcia', 'GAGA960815HMCLRL07', 'GAGA9608155G5', '6898014567', 'cris@hotmail.com', 'ninjaspartan117', 1),
(6, 'Cristian Alexander', 'Galicia', 'Garcia', 'GAGA960815HMCLRL07', 'GAGA9608155G5', '6898014567', 'cris@hotmail.com', 'ninjaspartan117', 2),
(7, 'Irene', '', '', '', '', '', '', '', 1),
(8, 'Brayan', 'Gil', 'Garcia', 'GAGA960815HMCLRL07', 'GAGA9608', '1234567890', 'aleX@hotmail.com', 'NINJA', 1),
(9, 'Cris', 'Alex', 'gal', 'GAGA960815HMCLRL07', 'GAGA9608155G5', '12345678987', 'vava@hot.com', '123456', 1),
(10, 'Michell', 'Luna', 'Garcia', 'GAGA960815HMCLRL07', 'GAGA9608155G5', '12345678987', 'ale-galicia_96@hotmail.com', 'alex', 1),
(11, 'julio', 'lipe', 'granados', 'GAGA960815HMCLRL07', 'GAGA9608155G5', '65342343567', 'ale-galicia_96@hotmail.com', 'jhgyfvtrgt', 1),
(12, 'JUAN', 'jgbfvtft', 'hbfvdfd', 'GAGA960815HMCLRL07', 'GAGA9608155G5', '76756432312', 'ssss@hng.com', '1234567890', 1),
(13, 'GERARDO', 'ALANIS', 'GUTUIETTES', 'GAGA960815HMCLRL07', 'GAGA9608155G5', '89765467897', 'perez@jhg.com', '1234567890', 1),
(14, 'GERARDO', 'ALANIS', 'GUTUIETTES', 'GAGA960815HMCLRL07', 'GAGA9608155G5', '89765467897', 'perez@jhg.com', '1234567890', 1),
(15, 'UJIHUTGR', 'JKHNJGBHV', 'JNHBGFVDC', 'GAGA960815HMCLRL07', 'GAGA9608155G5', '32435678909', 'ale-galicia_96@hotmail.com', 'qwertyy', 1),
(16, 'UJIHUTGR', 'JKHNJGBHV', 'JNHBGFVDC', 'GAGA960815HMCLRL07', 'GAGA9608155G5', '32435678909', 'ale-galicia_96@hotmail.com', '7867564534243', 1),
(17, 'UJIHUTGR', 'JKHNJGBHV', 'JNHBGFVDC', 'GAGA960815HMCLRL07', 'GAGA9608155G5', '32435678909', 'ale-galicia_96@hotmail.com', '89765', 1),
(18, 'UJIHUTGR', 'JKHNJGBHV', 'JNHBGFVDC', 'GAGA960815HMCLRL07', 'GAGA9608155G5', '32435678909', 'ale-galicia_96@hotmail.com', 'kljkhnjgbhf', 1),
(19, 'UJIHUTGR', 'JKHNJGBHV', 'JNHBGFVDC', 'GAGA960815HMCLRL07', 'GAGA9608155G5', '32435678909', 'ale-galicia_96@hotmail.com', 'jknhjgbh', 1),
(20, 'UJIHUTGR', 'JKHNJGBHV', 'JNHBGFVDC', 'GAGA960815HMCLRL07', 'GAGA9608155G5', '32435678909', 'ale-galicia_96@hotmail.com', 'mjkhjgbfv', 1),
(21, 'UJIHUTGR', 'JKHNJGBHV', 'JNHBGFVDC', 'GAGA960815HMCLRL07', 'GAGA9608155G5', '32435678909', 'ale-galicia_96@hotmail.com', 'qwerty', 1),
(22, 'UJIHUTGR', 'JKHNJGBHV', 'JNHBGFVDC', 'GAGA960815HMCLRL07', 'GAGA9608155G5', '32435678909', 'ale-galicia_96@hotmail.com', '123', 1),
(23, 'LOLA', 'KLMJKHJB', 'JMKHNJ', 'GAGA960815HMCLRL07', 'GAGA9608155G5', '09897865643', 'ale-galicia_96@hotmail.com', '89786756543', 1),
(24, 'LOLA', 'KLMJKHJB', 'JMKHNJ', 'GAGA960815HMCLRL07', 'GAGA9608155G5', '09897865643', 'ale-galicia_96@hotmail.com', '89786756543', 1),
(25, 'LOLA', 'KLMJKHJB', 'JMKHNJ', 'GAGA960815HMCLRL07', 'GAGA9608155G5', '09897865643', 'ale-galicia_96@hotmail.com', '87867565434', 1),
(26, 'LOLA', 'KLMJKHJB', 'JMKHNJ', 'GAGA960815HMCLRL07', 'GAGA9608155G5', '09897865643', 'ale-galicia_96@hotmail.com', '8097867564', 1),
(27, 'LOLA', 'KLMJKHJB', 'JMKHNJ', 'GAGA960815HMCLRL07', 'GAGA9608155G5', '09897865643', 'ale-galicia_96@hotmail.com', '1234567', 1),
(28, 'LOLAS', 'KLMJKHJB', 'JMKHNJ', 'GAGA960815HMCLRL07', 'GAGA9608155G5', '09897865643', 'ale-galicia_96@hotmail.com', '12345678', 1),
(29, 'LOLAS', 'KLMJKHJB', 'JMKHNJ', 'GAGA960815HMCLRL07', 'GAGA9608155G5', '09897865643', 'ale-galicia_96@hotmail.com', 'bhv', 1),
(30, 'LOLAS', 'KLMJKHJB', 'JMKHNJ', 'GAGA960815HMCLRL07', 'GAGA9608155G5', '09897865643', 'ale-galicia_96@hotmail.com', '132435678', 1),
(31, 'LOLAS', 'KLMJKHJB', 'JMKHNJ', 'GAGA960815HMCLRL07', 'GAGA9608155G5', '09897865643', 'ale-galicia_96@hotmail.com', '786543', 1),
(32, 'GHJ', 'NHJGF', 'JHBFV', 'GAGA960815HMCLRL07', 'GAGA9608155G5', 'ale@hotmail.com', 'rtyui@mjhng.com', 'qwertyy', 1),
(33, 'GHJ', 'NHJGF', 'JHBFV', 'GAGA960815HMCLRL07', 'GAGA9608155G5', 'ale@hotmail.com', 'rtyui@mjhng.com', 'qwertyy', 1),
(34, 'GHJ', 'NHJGF', 'JHBFV', 'GAGA960815HMCLRL09', 'GAGA9608155G5', 'ale@hotmail.com', 'rtyui@mjhng.com', 'qwertyy', 1),
(35, 'JNHGFVD', 'HNGBFVT', 'HNGFVDC', 'GAGA960815HMCLRL07', 'GAGA9608155G5', '32435678909', 'ale-galicia_96@hotmail.com', '1234567', 1),
(36, 'JNHGFVD', 'HNGBFVT', 'HNGFVDC', 'GAGA960815HMCLRL10', 'GAGA9608155G5', '32435678909', 'ale-galicia_96@hotmail.com', '123456', 1),
(37, 'JNHGFVD', 'HNGBFVT', 'HNGFVDC', 'GAGA960815HMCLRL10', 'GAGA9608155G9', '32435678909', 'ale-galicia_96@hotmail.com', '12345678', 1),
(38, 'JNHGFVD', 'HNGBFVT', 'HNGFVDC', 'GAGA960815HMCLRL11', 'GAGA9608155G9', '32435678909', 'ale-galicia_96@hotmail.com', '13243545676', 1),
(39, 'JNHGFVD', 'HNGBFVT', 'HNGFVDC', 'GAGA960815HMCLRL12', 'GAGA9608155G3', '32435678909', 'ale-galicia_96@hotmail.com', '123456', 1),
(40, 'JNHGFVD', 'HNGBFVT', 'HNGFVDC', 'GAGA960815HMCLRL13', 'GAGA9608155G1', '32435678910', 'ale-galicia_96@hotmail.com', '123456', 1),
(41, 'JNHGFVD', 'HNGBFVT', 'HNGFVDC', 'GAGA960815HMCLRL14', 'GAGA9608155G2', '32435678911', 'ale-galicias_96@hotmail.com', '23456', 1),
(42, 'MAURICIO', 'LOPEZ', 'DURAN', 'RAOM951108HMCMRR02', 'RAOM951108', '12345678909', 'mau@gmail.com', 'ninjaspartan117', 1),
(43, 'MICHELLE', 'LUNA', 'GRANADOS', 'VELM960626MMCLNC01', 'VELM960626', '65643512345', 'mich@gmail.com', 'ninjaspartan117', 1),
(44, 'MIA', 'WLFS', 'FS', 'BABO930721MMCTLL01', 'BABO930721', '23457890876', 'saulperez.sistemas@gmail.com', '1234567890', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `id_domicilio` (`id_domicilio`),
  ADD KEY `id_usuario` (`id_usuarios`);

--
-- Indices de la tabla `domicilio`
--
ALTER TABLE `domicilio`
  ADD PRIMARY KEY (`id_domicilio`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_sub_sub_categoria` (`id_sub_sub_categoria`);

--
-- Indices de la tabla `sub_categoria`
--
ALTER TABLE `sub_categoria`
  ADD PRIMARY KEY (`id_sub_categoria`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `sub_sub_categoria`
--
ALTER TABLE `sub_sub_categoria`
  ADD PRIMARY KEY (`id_sub_sub_categoria`),
  ADD KEY `id_sub_categoria` (`id_sub_categoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`),
  ADD KEY `id_estado` (`id_estado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`id_domicilio`) REFERENCES `domicilio` (`id_domicilio`),
  ADD CONSTRAINT `clientes_ibfk_2` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`id_usuarios`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`),
  ADD CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_sub_sub_categoria`) REFERENCES `sub_sub_categoria` (`id_sub_sub_categoria`);

--
-- Filtros para la tabla `sub_categoria`
--
ALTER TABLE `sub_categoria`
  ADD CONSTRAINT `sub_categoria_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);

--
-- Filtros para la tabla `sub_sub_categoria`
--
ALTER TABLE `sub_sub_categoria`
  ADD CONSTRAINT `sub_sub_categoria_ibfk_1` FOREIGN KEY (`id_sub_categoria`) REFERENCES `sub_categoria` (`id_sub_categoria`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
