-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-07-2025 a las 00:48:51
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
-- Estructura de tabla para la tabla `recibo`
--

CREATE TABLE `recibo` (
  `ID_recibo` int(11) NOT NULL,
  `ID_contrato` int(11) NOT NULL,
  `ID_nomina` int(11) NOT NULL,
  `Salario_bruto_recibo` decimal(10,2) NOT NULL,
  `Comision_hiring` decimal(10,2) NOT NULL,
  `Descuento_inces` decimal(10,2) NOT NULL,
  `Descuento_ivss` decimal(10,2) NOT NULL,
  `Salario_neto` decimal(10,2) NOT NULL,
  `Fecha_pago` date NOT NULL,
  `Numero_recibo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `recibo`
--
ALTER TABLE `recibo`
  ADD PRIMARY KEY (`ID_recibo`),
  ADD KEY `ID_contrato` (`ID_contrato`),
  ADD KEY `ID_nomina` (`ID_nomina`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `recibo`
--
ALTER TABLE `recibo`
  MODIFY `ID_recibo` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `recibo`
--
ALTER TABLE `recibo`
  ADD CONSTRAINT `contrato_ID_contrato_recibo` FOREIGN KEY (`ID_contrato`) REFERENCES `contrato` (`ID_contrato`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nomina_ID_nomina_recibo` FOREIGN KEY (`ID_nomina`) REFERENCES `nomina` (`ID_nomina`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
