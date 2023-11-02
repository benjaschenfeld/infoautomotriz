-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-11-2023 a las 20:17:05
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
  `nombres` varchar(25) NOT NULL,
  `anio` int(25) NOT NULL,
  `motor` varchar(25) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `id_categoria_ext` int(11) NOT NULL,
  `caracteristicas` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `autos`
--

INSERT INTO `autos` (`id_auto`, `nombres`, `anio`, `motor`, `marca`, `id_categoria_ext`, `caracteristicas`) VALUES
(4, 'Fluence', 2014, '1.6', 'Renault', 3, 'lololololololol'),
(14, 'PRUEBA', 2022, '2.3', 'holaaaa', 3, 'jijiji9ii'),
(15, 'juan', 2002, '1.8', 'asasasas', 2, 'oooooooo'),
(16, 'asasass', 2022, '1.6', 'asasasassasasaasas', 11, 'asasaas');

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
(2, 'sedan', '5 puertas'),
(3, 'Deportivos', 'Tienen mejor aceleración, velocidad máxima, adherencia al asfalto, mejor sistema de frenado y una mayor potencia que otros coches convencionales, lo que se logra mediante motores, frenos, suspensión, caja de cambios, neumáticos, chasis y tipo de carrocería especiales.'),
(7, 'SDSADSAD', 'SADASDSAD'),
(11, 'Coupe', 'No tiene cola, suele ser de dos puertas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `pasword` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_usuario`, `email`, `pasword`) VALUES
(1, 'benjaminschenfeld2003@gmail.com', 'hola'),
(2, 'samuelgamondi@gmail.com', 'hola'),
(3, 'ssssddd', '$2y$10$n3ujp9.dmB19IPmlcRG6OOTClAoNXcsaFwH9cLCdiKqBClSVrfAZS'),
(4, 'luchito@gmail.com', '$2y$10$dhNgi1cnVDxuzW5RHzrj6evJSDukQLMtNuxu0WbfivppeNrkXN1iq'),
(5, 'luchito@gmail.com', '$2y$10$wYLb.gcKAY4qDZ3uO36O.OmouUoLFU5fIFMHnuD/nzTeXsxZWipSK'),
(6, 'bueno@12.com', '$2y$10$XwadplcZyxKg/HIJc1hXy.2AfkMDCo.gYDOGPhgWYhzKwuvtdZ9Tm'),
(7, 'benja@gmail.com', '$2y$10$LDP0cThYr2h.kTooiJ.1Y.vwsvt9MgoHwt9OMDgnvsoT1cB1piXdK');

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
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autos`
--
ALTER TABLE `autos`
  MODIFY `id_auto` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
