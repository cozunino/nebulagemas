-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-12-2020 a las 16:36:38
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nebulagemas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adm`
--

CREATE TABLE `adm` (
  `email` varchar(50) NOT NULL,
  `password` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `adm`
--

INSERT INTO `adm` (`email`, `password`) VALUES
('nebulaz@gmail.com', 283166);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `precio` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`) VALUES
(1, 'citrino', 720),
(3, 'turmalinanegra', 630),
(4, 'amatistaelestial', 140),
(5, 'ambar', 750),
(6, 'onix', 616),
(7, 'turquesa', 3220),
(8, 'variscita', 840),
(9, 'bismuto', 1540),
(10, 'calcopirita', 2380),
(11, 'cangarosa', 980),
(12, 'cianita', 750),
(13, 'rejalgar', 1680),
(14, 'jade', 890),
(15, 'cobaltocita', 560),
(16, 'agatamiel', 790),
(17, 'cuarzoazul', 450),
(18, 'rodocrocita', 920),
(19, 'obsidiana', 1050),
(20, 'malaquita', 1100),
(21, 'calcedoniaazul', 690),
(22, 'leopardina', 540),
(23, 'amatistabandeada', 380),
(25, 'dolomita', 850),
(26, 'cristales', 145),
(27, 'denditrico', 140),
(31, 'cuarzo fume', 300);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` int(15) NOT NULL,
  `password` varchar(10) NOT NULL,
  `direccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `apellido`, `email`, `telefono`, `password`, `direccion`) VALUES
('Agustina', 'Ricardes', 'agusricard@hotmail.com', 47925722, '123456', 'Moldes 2532'),
('Cristina', 'Ventura', 'arqcristinaventura@yahoo.com.ar', 45421882, '123456', 'Jaramillo 3204\r\n5°A'),
('Jorge', 'Jesus', 'arqjj@gmail.com', 43528692, '123456', 'Conde 2490'),
('Eleonora', 'Acosta', 'eleo@yahoo.com.ar', 43247653, '123456', 'Talcahuano 546 7°A'),
('Federico', 'Zunino', 'fedezv@gmail.com', 45421882, '123456', 'Jaramillo 3204'),
('Julian', 'Gomez', 'gomez@yahoo.com.ar', 43532123, '123456', 'Nuñez 3236'),
('Juana', 'Tesoriero', 'juanitat@yahoo.com', 47012828, '123456', 'Migueletes 1126'),
('Maria', 'Lopez', 'maria@yahoo.com', 47925586, '123456', 'Montevideo 580'),
('Mauricio', 'Salomon', 'mauri@hotmail.com', 45672839, '123456', 'Montevideo 580 1°C'),
('Marta', 'Villar', 'mavillar@hotmail.com', 42536772, '123456', 'Zabala 2036 8D'),
('Natalia', 'Caneva', 'naticaneva@yahoo.com', 45432828, '123456', 'Estomba 3850'),
('Coni', 'Zunino', 'nebulaz@gmail.com', 1122699600, '123456', 'Monteagudo 1890'),
('Pablo', 'Denegri', 'padenegri@gmail.com', 47025353, '123456', 'Plaza 1170'),
('Pablo', 'Martinez', 'pamarti@gmail.com', 43265312, '123456', 'Zapiola 1127'),
('Francisco', 'Peñaloza', 'pancho77@gmail.com', 47034546, '123456', 'Darregueyra 470'),
('Veronica', 'Telles', 'verte@gmail.com', 43582535, '123456', 'Caseros 1538');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
