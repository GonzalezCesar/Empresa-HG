-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-07-2025 a las 00:49:10
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
-- Estructura de tabla para la tabla `usuario_hiringgroup`
--

CREATE TABLE `usuario_hiringgroup` (
  `ID_usuHG` int(11) NOT NULL,
  `ID_usuario` int(11) NOT NULL,
  `Nombres_usuHG` varchar(50) NOT NULL,
  `Apellidos_usuHG` varchar(50) NOT NULL,
  `Gestionar_Nomina_usuHG` tinyint(1) NOT NULL,
  `Gestionar_contratos_usuHG` tinyint(1) NOT NULL,
  `Departamento_usuHG` enum('''RRHH''','''Contabilidad''') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario_hiringgroup`
--
ALTER TABLE `usuario_hiringgroup`
  ADD PRIMARY KEY (`ID_usuHG`),
  ADD KEY `ID_usuario` (`ID_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario_hiringgroup`
--
ALTER TABLE `usuario_hiringgroup`
  MODIFY `ID_usuHG` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario_hiringgroup`
--
ALTER TABLE `usuario_hiringgroup`
  ADD CONSTRAINT `usuario_ID_usuario_usuario_hiringgroup` FOREIGN KEY (`ID_usuario`) REFERENCES `usuario` (`ID_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
