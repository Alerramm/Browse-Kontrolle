-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-04-2018 a las 09:02:47
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Estructura de tabla para la tabla `consumos`
--

CREATE TABLE `consumos` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `consumo` double NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `consumos`
--

INSERT INTO `consumos` (`id`, `id_cliente`, `consumo`, `fecha`) VALUES
(1, 1, 25.5, '2017-10-12 09:00:00'),
(2, 1, 28, '2017-11-12 13:00:00'),
(3, 1, 27, '2017-12-12 12:00:00'),
(4, 1, 30, '2018-01-12 17:00:00'),
(5, 1, 26, '2018-02-12 14:00:00'),
(6, 1, 25, '2018-03-12 11:00:00'),
(7, 1, 28, '2018-04-12 17:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consumos`
--
ALTER TABLE `consumos`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
