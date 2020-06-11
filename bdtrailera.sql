-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-06-2020 a las 00:58:38
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdtrailera`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carga`
--

CREATE TABLE `carga` (
  `idCarga` int(11) NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `peso` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `carga`
--

INSERT INTO `carga` (`idCarga`, `descripcion`, `peso`) VALUES
(9, 'Trece cajas de Tomate', '67 kilos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nit` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `numContacto` int(20) NOT NULL,
  `correo` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `idUsuarioCli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nombre`, `apellido`, `direccion`, `nit`, `numContacto`, `correo`, `idUsuarioCli`) VALUES
(7, 'Nataren', '', 'Soyapango', '1234-123456-123-1', 88776655, 'bonillajose@gmail.com', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleenvio`
--

CREATE TABLE `detalleenvio` (
  `idDetalleEnvio` int(11) NOT NULL,
  `idRuta` int(11) NOT NULL,
  `idEnvio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `idEmpleado` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `sexo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cargo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `dui` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nit` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `idUsuarioEmp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`idEmpleado`, `nombre`, `apellido`, `sexo`, `direccion`, `cargo`, `dui`, `nit`, `idUsuarioEmp`) VALUES
(70, 'Natk', 'Bonk', 'Masculino', 'Soy', 'Empleado', '34557895-0', '1234-123456-123-1', 79),
(73, 'dfdh', 'Carpio', 'Femenino', 'Tonaca', 'Administrador', '12356789-3', '3333-888888-888-7', 80);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envio`
--

CREATE TABLE `envio` (
  `idEnvio` int(11) NOT NULL,
  `fechaRealizacion` date NOT NULL,
  `fechaEntrega` date NOT NULL,
  `idCliente` int(11) NOT NULL,
  `idEmpleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motorista`
--

CREATE TABLE `motorista` (
  `idMotorista` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `dui` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nit` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `numLicencia` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `motorista`
--

INSERT INTO `motorista` (`idMotorista`, `nombre`, `apellido`, `direccion`, `dui`, `nit`, `numLicencia`) VALUES
(13, 'Nataren', 'Bonilla', 'Soyapango', '12357579-0', '1234-123456-123-1', '1234-123456-123-1'),
(17, 'Kasandra', 'Carpio', 'Tonaca', '12345678-0', '3333-888888-888-7', '1344-123456-123-1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ruta`
--

CREATE TABLE `ruta` (
  `idRuta` int(11) NOT NULL,
  `kilometraje` double NOT NULL,
  `latPuntoA` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `lngPuntoA` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `latPuntoB` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `lngPuntoB` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `idMotorista` int(11) NOT NULL,
  `idVehiculo` int(11) NOT NULL,
  `idCarga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ruta`
--

INSERT INTO `ruta` (`idRuta`, `kilometraje`, `latPuntoA`, `lngPuntoA`, `latPuntoB`, `lngPuntoB`, `idMotorista`, `idVehiculo`, `idCarga`) VALUES
(25, 28.1, '13.688549607959276', '-89.1912210968137', '13.81928347355936', '-89.26865378886464', 13, 72, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariocli`
--

CREATE TABLE `usuariocli` (
  `idUsuarioCli` int(11) NOT NULL,
  `usuarioCli` varchar(40) NOT NULL,
  `passwordCli` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuariocli`
--

INSERT INTO `usuariocli` (`idUsuarioCli`, `usuarioCli`, `passwordCli`) VALUES
(4, 'cliNAt', 'e2756eaac75cef9ae3a5939105684fb1f6e74a79');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarioemp`
--

CREATE TABLE `usuarioemp` (
  `idUsuarioEmp` int(11) NOT NULL,
  `usuarioEmp` varchar(50) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarioemp`
--

INSERT INTO `usuarioemp` (`idUsuarioEmp`, `usuarioEmp`, `password`, `rol`) VALUES
(79, 'empNata', 'b53e9b6273d7a2e1f33b26941e3272c87d1da7d3', 'Empleado'),
(80, 'empKas', 'deb50d8a093553b5d4673b99033a7b5c228bf41e', 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `idVehiculo` int(11) NOT NULL,
  `marca` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `placa` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `modelo` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `tazaCombustible` double NOT NULL,
  `capacidadCombustible` double NOT NULL,
  `kmRecorridos` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`idVehiculo`, `marca`, `placa`, `modelo`, `tazaCombustible`, `capacidadCombustible`, `kmRecorridos`) VALUES
(72, 'toyota', 'P798-123', 'corola', 56.3, 60.5, 56);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carga`
--
ALTER TABLE `carga`
  ADD PRIMARY KEY (`idCarga`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`),
  ADD KEY `idUsuarioCli` (`idUsuarioCli`);

--
-- Indices de la tabla `detalleenvio`
--
ALTER TABLE `detalleenvio`
  ADD PRIMARY KEY (`idDetalleEnvio`),
  ADD KEY `idRuta` (`idRuta`),
  ADD KEY `idEnvio` (`idEnvio`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`idEmpleado`),
  ADD UNIQUE KEY `dui` (`dui`),
  ADD UNIQUE KEY `nit` (`nit`),
  ADD KEY `idUsuarioEmp` (`idUsuarioEmp`);

--
-- Indices de la tabla `envio`
--
ALTER TABLE `envio`
  ADD PRIMARY KEY (`idEnvio`),
  ADD KEY `idCliente` (`idCliente`),
  ADD KEY `idEmpleado` (`idEmpleado`);

--
-- Indices de la tabla `motorista`
--
ALTER TABLE `motorista`
  ADD PRIMARY KEY (`idMotorista`),
  ADD UNIQUE KEY `nit` (`nit`),
  ADD UNIQUE KEY `dui` (`dui`),
  ADD UNIQUE KEY `numLicencia` (`numLicencia`);

--
-- Indices de la tabla `ruta`
--
ALTER TABLE `ruta`
  ADD PRIMARY KEY (`idRuta`),
  ADD KEY `idMotorista` (`idMotorista`),
  ADD KEY `idCarga` (`idCarga`),
  ADD KEY `idVehiculo` (`idVehiculo`);

--
-- Indices de la tabla `usuariocli`
--
ALTER TABLE `usuariocli`
  ADD PRIMARY KEY (`idUsuarioCli`),
  ADD UNIQUE KEY `usuarioCli` (`usuarioCli`);

--
-- Indices de la tabla `usuarioemp`
--
ALTER TABLE `usuarioemp`
  ADD PRIMARY KEY (`idUsuarioEmp`),
  ADD UNIQUE KEY `usuarioEmp` (`usuarioEmp`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`idVehiculo`),
  ADD UNIQUE KEY `placa` (`placa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carga`
--
ALTER TABLE `carga`
  MODIFY `idCarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `detalleenvio`
--
ALTER TABLE `detalleenvio`
  MODIFY `idDetalleEnvio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `idEmpleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT de la tabla `envio`
--
ALTER TABLE `envio`
  MODIFY `idEnvio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `motorista`
--
ALTER TABLE `motorista`
  MODIFY `idMotorista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `ruta`
--
ALTER TABLE `ruta`
  MODIFY `idRuta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `usuariocli`
--
ALTER TABLE `usuariocli`
  MODIFY `idUsuarioCli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarioemp`
--
ALTER TABLE `usuarioemp`
  MODIFY `idUsuarioEmp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `idVehiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`idUsuarioCli`) REFERENCES `usuariocli` (`idUsuarioCli`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalleenvio`
--
ALTER TABLE `detalleenvio`
  ADD CONSTRAINT `detalleenvio_ibfk_1` FOREIGN KEY (`idRuta`) REFERENCES `ruta` (`idRuta`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `detalleenvio_ibfk_3` FOREIGN KEY (`idEnvio`) REFERENCES `envio` (`idEnvio`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`idUsuarioEmp`) REFERENCES `usuarioemp` (`idUsuarioEmp`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `envio`
--
ALTER TABLE `envio`
  ADD CONSTRAINT `envio_ibfk_1` FOREIGN KEY (`idEmpleado`) REFERENCES `empleado` (`idEmpleado`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `envio_ibfk_2` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ruta`
--
ALTER TABLE `ruta`
  ADD CONSTRAINT `ruta_ibfk_1` FOREIGN KEY (`idMotorista`) REFERENCES `motorista` (`idMotorista`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `ruta_ibfk_2` FOREIGN KEY (`idCarga`) REFERENCES `carga` (`idCarga`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `ruta_ibfk_3` FOREIGN KEY (`idVehiculo`) REFERENCES `vehiculo` (`idVehiculo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
