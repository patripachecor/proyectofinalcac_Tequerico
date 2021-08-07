-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-08-2021 a las 00:12:38
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectofinalcac`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunas`
--

CREATE TABLE `comunas` (
  `idComuna` int(11) NOT NULL,
  `nombrecomuna` varchar(40) NOT NULL,
  `idprovicomuna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comunas`
--

INSERT INTO `comunas` (`idComuna`, `nombrecomuna`, `idprovicomuna`) VALUES
(1, 'Teno', 1),
(2, 'Romeral', 1),
(3, 'Rauco', 1),
(4, 'Maule', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `idPedido` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `mail` varchar(30) DEFAULT NULL,
  `lugarentrega` varchar(80) NOT NULL,
  `comuna` int(11) NOT NULL,
  `provincia` int(11) NOT NULL,
  `codpostal` varchar(9) NOT NULL,
  `formadepago` varchar(10) NOT NULL,
  `titulartarje` varchar(40) NOT NULL,
  `numerotarje` int(11) NOT NULL,
  `vtotarje` varchar(10) NOT NULL,
  `clavetarje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`idPedido`, `nombre`, `apellido`, `usuario`, `mail`, `lugarentrega`, `comuna`, `provincia`, `codpostal`, `formadepago`, `titulartarje`, `numerotarje`, `vtotarje`, `clavetarje`) VALUES
(1, 'Catalina', 'Taborda', '@cata', '', 'Los Alamos 5000', 1, 1, '33400', 'on', 'Catalina', 98764531, '0824', 987),
(2, 'Manuel', 'Paz', '@manpaz', '', 'Av Chile 300', 4, 2, '33890', 'on', 'Manuel', 156734, '1121', 183),
(3, 'Carolina', 'Rodríguez', '@carolinaro', '', 'San Jeronimo', 2, 1, '33400', 'on', 'Carolina Rodri', 67746343, '1021', 491),
(4, 'Gabriel', 'Rysz', '@gaborysz', '', 'Av La Plata 3500', 3, 1, '33400', 'on', 'Gabriel Rysz', 6373929, '0925', 921),
(5, 'Gisela', 'Rodríguez', 'gisero', '', 'Urquiza 335', 4, 2, '33890', 'on', 'Gisela Rodríguez', 4352619, '1021', 379);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE `provincia` (
  `idProvincia` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`idProvincia`, `nombre`) VALUES
(1, 'Curicó'),
(2, 'Talca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `clave` varchar(20) NOT NULL,
  `nombreyapellido` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `usuario`, `clave`, `nombreyapellido`) VALUES
(1, 'tequerico@gmail.com.cl', '181818', ''),
(2, 'prueba@gmail.com', '202020', ''),
(3, 'prueba@hotmail.com', '212121', ''),
(4, 'ljg@yahoo.com', '345466', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comunas`
--
ALTER TABLE `comunas`
  ADD PRIMARY KEY (`idComuna`),
  ADD UNIQUE KEY `LocComuna` (`idComuna`),
  ADD KEY `ComProv` (`idprovicomuna`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`idPedido`);

--
-- Indices de la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`idProvincia`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comunas`
--
ALTER TABLE `comunas`
  MODIFY `idComuna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `idPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `provincia`
--
ALTER TABLE `provincia`
  MODIFY `idProvincia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comunas`
--
ALTER TABLE `comunas`
  ADD CONSTRAINT `ComProv` FOREIGN KEY (`idprovicomuna`) REFERENCES `provincia` (`idProvincia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
