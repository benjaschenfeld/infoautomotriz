-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-09-2023 a las 22:23:21
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `automotrizinfo_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autos`
--

CREATE TABLE `autos` (
  `id_auto` int(255) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `anio` int(25) NOT NULL,
  `motor` varchar(25) NOT NULL,
  `color` varchar(100) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `id_categoria_ext` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `autos`
--

INSERT INTO `autos` (`id_auto`, `nombre`, `anio`, `motor`, `color`, `marca`, `id_categoria_ext`) VALUES
(3, 'x6', 2018, 'v8', 'negro', 'BMW', 1),
(4, 'Fluence', 2014, '1.6', 'Blanco', 'Renault', 2),
(5, 'Fluence', 2014, '1.6', 'Blanco', 'Renault', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(255) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `caracteristicas` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre`, `caracteristicas`) VALUES
(1, 'Coupe', 'No tiene cola, estructura rigida'),
(2, 'sedan', '5 puertas'),
(3, 'Deportivos', 'Tienen mejor aceleración, velocidad máxima, adherencia al asfalto, mejor sistema de frenado y una mayor potencia que otros coches convencionales, lo que se logra mediante motores, frenos, suspensión, caja de cambios, neumáticos, chasis y tipo de carrocería especiales.'),
(4, 'Deportivos', 'Tienen mejor aceleración, velocidad máxima, adherencia al asfalto, mejor sistema de frenado y una mayor potencia que otros coches convencionales, lo que se logra mediante motores, frenos, suspensión, caja de cambios, neumáticos, chasis y tipo de carrocería especiales.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autos`
--
ALTER TABLE `autos`
  ADD PRIMARY KEY (`id_auto`),
  ADD KEY `fk_id_categoria` (`id_categoria_ext`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autos`
--
ALTER TABLE `autos`
  MODIFY `id_auto` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `autos`
--
ALTER TABLE `autos`
  ADD CONSTRAINT `autos_ibfk_1` FOREIGN KEY (`id_categoria_ext`) REFERENCES `categoria` (`id_categoria`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
