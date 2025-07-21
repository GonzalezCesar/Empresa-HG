-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-07-2025 a las 00:47:53
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empresa_hg`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato`
--

CREATE TABLE `contrato` (
  `ID_contrato` int(11) NOT NULL,
  `ID_postulacion` int(11) NOT NULL,
  `ID_usuHG` int(11) NOT NULL,
  `ID_banco` int(11) NOT NULL,
  `Fecha_inicio_contrato` date NOT NULL,
  `Fecha_fin_contrato` date NOT NULL,
  `Tipo_de_contrato` enum('''Temporal''','''Indefinido''','''Prueba''') NOT NULL,
  `Salario_Mensual_contrato` decimal(10,2) NOT NULL,
  `Numero_cuenta_contrato` varchar(50) NOT NULL,
  `Descripcion_contrato` text NOT NULL,
  `Activo_contrato` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`ID_contrato`),
  ADD KEY `ID_postulacion` (`ID_postulacion`),
  ADD KEY `ID_usuHG` (`ID_usuHG`),
  ADD KEY `ID_banco` (`ID_banco`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contrato`
--
ALTER TABLE `contrato`
  MODIFY `ID_contrato` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD CONSTRAINT `banco_ID_banco_contrato` FOREIGN KEY (`ID_banco`) REFERENCES `banco` (`ID_banco`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `postulacion_ID_postulacion_contrato` FOREIGN KEY (`ID_postulacion`) REFERENCES `postulacion` (`ID_postulacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuHG_ID_usuHG_contrato` FOREIGN KEY (`ID_usuHG`) REFERENCES `usuario_hiringgroup` (`ID_usuHG`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
