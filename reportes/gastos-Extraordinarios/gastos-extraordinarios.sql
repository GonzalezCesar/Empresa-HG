-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-05-2025 a las 23:01:36
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
-- Base de datos: `consejo_comunal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos-extraordinarios`
--

CREATE TABLE `gastos-extraordinarios` (
  `codigo` varchar(70) NOT NULL,
  `id-casa` varchar(70) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `monto` int(20) NOT NULL,
  `fecha` date NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gastos-extraordinarios`
--
ALTER TABLE `gastos-extraordinarios`
  ADD PRIMARY KEY (`codigo`),
  ADD UNIQUE KEY `id-casa` (`id-casa`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `gastos-extraordinarios`
--
ALTER TABLE `gastos-extraordinarios`
  ADD CONSTRAINT `gastos-extraordinarios_ibfk_1` FOREIGN KEY (`id-casa`) REFERENCES `casa` (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
