-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-03-2016 a las 03:13:14
-- Versión del servidor: 10.1.8-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `autor1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `autor2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `autor3` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `asesor` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `nota` float NOT NULL,
  `investigacion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`id`, `nombre`, `autor1`, `autor2`, `autor3`, `asesor`, `fecha`, `nota`, `investigacion`, `estado`) VALUES
(9, 'Trazabilidad', 'Julio Perez', 'Alex Salgado', '', 'Jorge Gomez', '2016-03-10', 4.2, 'Alimentos', 0),
(10, 'Cocina Tecnologica', 'Laura Conde', 'Kelly Villareal', '', 'Jorge Gomez', '2016-03-10', 3.5, 'Internet de la cosas', 0),
(11, 'gato hidraulico para carros', 'Julio Perez', 'Luis Barrios', 'Carlos Cabarcas', 'Samir castaÃ±o', '2016-03-10', 4.3, 'mecanica', 0),
(12, 'Moto Automatizada', 'Laura Conde', 'Kelly Villareal', 'Alex Benavides', 'Milton Hernandez', '2016-03-10', 4.6, 'Inalambrica', 0),
(13, 'Cortadora de cesped', 'Carlos Florez', 'Anllelith Hernandez', 'Alonso Diaz', 'Samir castaÃ±o', '2016-03-10', 3.2, 'Domestico', 0),
(14, 'Semaforo automata', 'Jhonatan patertina', 'Carlos florez', '', 'Javier Peniche', '2016-03-10', 4.2, 'Transito', 0),
(15, 'sabrosona', 'dsadsad', '', '', 'dasdsad', '2016-03-10', 5, 'dasdsa', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
