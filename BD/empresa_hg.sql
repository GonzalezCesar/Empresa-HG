-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-07-2025 a las 04:14:00
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

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
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `ID_admin` int(11) NOT NULL,
  `ID_usuario` int(11) NOT NULL,
  `Cedula_admin` varchar(15) NOT NULL,
  `Nombres_admin` varchar(80) NOT NULL,
  `Apellidos_admin` varchar(80) NOT NULL,
  `Telefono_admin` varchar(50) NOT NULL,
  `Codigo_Especial` varchar(50) NOT NULL,
  `Crear_usuario_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`ID_admin`, `ID_usuario`, `Cedula_admin`, `Nombres_admin`, `Apellidos_admin`, `Telefono_admin`, `Codigo_Especial`, `Crear_usuario_admin`) VALUES
(201, 101, '28644834', 'Jose Manuel', 'Guerrero Silva', '+584243679531', '37gj6f', 1),
(202, 102, '29436883', 'Maria Vanesa', 'Larez Rodriguez', '+584123654843', 'ad5f6d', 1),
(203, 105, '73179387', 'Daila Alejandra', 'Márquez', '+584167953481', 'asd1a6', 1),
(204, 106, '18593495', 'Luis Manuel', 'Miranda Figuera', '+584145199131', '6as5d1', 1),
(205, 107, '13996462', 'Lestes Adrian', 'Caceres Reyes', '+584264931894', 'ad761c', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banco`
--

CREATE TABLE `banco` (
  `ID_banco` int(11) NOT NULL,
  `Nombre_banco` varchar(255) NOT NULL,
  `Descripcion_banco` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `banco`
--

INSERT INTO `banco` (`ID_banco`, `Nombre_banco`, `Descripcion_banco`) VALUES
(1, 'BANCO DE VENEZUELA', 'BDV'),
(2, 'BBVA PROVINCIAL', 'BBVA'),
(3, 'BANESCO', 'BAN'),
(4, 'BANCO NACIONAL DE CREDITO', 'BNC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contratado`
--

CREATE TABLE `contratado` (
  `ID_contratado` int(11) NOT NULL,
  `ID_usuario` int(11) NOT NULL,
  `ID_contrato` int(11) NOT NULL,
  `Fecha_de_contratacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contratado`
--

INSERT INTO `contratado` (`ID_contratado`, `ID_usuario`, `ID_contrato`, `Fecha_de_contratacion`) VALUES
(601, 116, 1, '2025-07-23'),
(602, 117, 2, '2025-07-23'),
(603, 118, 3, '2025-07-25'),
(604, 119, 4, '2025-07-28');

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
-- Volcado de datos para la tabla `contrato`
--

INSERT INTO `contrato` (`ID_contrato`, `ID_postulacion`, `ID_usuHG`, `ID_banco`, `Fecha_inicio_contrato`, `Fecha_fin_contrato`, `Tipo_de_contrato`, `Salario_Mensual_contrato`, `Numero_cuenta_contrato`, `Descripcion_contrato`, `Activo_contrato`) VALUES
(1, 1, 301, 1, '2025-07-16', '2030-07-09', '\'Temporal\'', 2400.00, '16640241424501244', 'prue1', 1),
(2, 2, 302, 2, '2024-07-17', '2025-07-24', '\'Temporal\'', 2100.00, '456547524212054', 'prue2\r\n', 1),
(3, 3, 301, 3, '2025-05-23', '2025-11-27', '\'Indefinido\'', 2300.00, '54654435643687', 'prue3', 1),
(4, 4, 302, 4, '2025-07-21', '2025-10-10', '\'Prueba\'', 2600.00, '543463445456456', 'prue4', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `ID_empresa` int(11) NOT NULL,
  `Nombre_empresa` varchar(255) NOT NULL,
  `Rif_empresa` varchar(20) NOT NULL,
  `Direccion_empresa` text NOT NULL,
  `Telefono_empresa` varchar(20) NOT NULL,
  `Sector_empresa` text NOT NULL,
  `Fecha_Registro_empresa` date NOT NULL,
  `Activa_empresa` tinyint(1) NOT NULL,
  `ID_sector` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`ID_empresa`, `Nombre_empresa`, `Rif_empresa`, `Direccion_empresa`, `Telefono_empresa`, `Sector_empresa`, `Fecha_Registro_empresa`, `Activa_empresa`, `ID_sector`) VALUES
(1, 'EcoMarket C.A.', 'J-16016518', 'Calle Los Jabillos, Quinta Roselina, El Paraíso, Caracas 1020', '+584127090599', 'Comercio', '2022-12-15', 1, 3),
(2, 'Mercalux C.A.', 'J-65161561', 'Av. Francisco de Miranda, Centro Comercial El Milagro, local 24, Los Teques, Miranda', '+584248593641', 'Comercio', '2025-07-01', 1, 3),
(3, 'Distribuidora El Roble 2025', 'J-5166964144', 'Calle 82B, Sector Tierra Negra, Maracaibo, Zulia', '+584167934914', 'Distribuidor', '2025-07-20', 1, 2),
(4, 'Todo Hogar Express', 'J-468456169', 'Av. Bolívar, C.C. Costa Azul, local 17-B, Pampatar, Edo. Nueva Esparta', '+584128494994', 'Comercio', '2025-07-17', 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `experiencia_laboral`
--

CREATE TABLE `experiencia_laboral` (
  `ID_expeLa` int(11) NOT NULL,
  `ID_postulante` int(11) NOT NULL,
  `Empresa_expeLa` varchar(255) NOT NULL,
  `Cargo_expeLa` varchar(255) NOT NULL,
  `Fecha_inicio_expeLa` date NOT NULL,
  `Fecha_fin_expeLa` date NOT NULL,
  `Descripcion_expeLa` text NOT NULL,
  `Referencia_expeLa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `experiencia_laboral`
--

INSERT INTO `experiencia_laboral` (`ID_expeLa`, `ID_postulante`, `Empresa_expeLa`, `Cargo_expeLa`, `Fecha_inicio_expeLa`, `Fecha_fin_expeLa`, `Descripcion_expeLa`, `Referencia_expeLa`) VALUES
(1, 501, 'Alimentos La Molienda C.A.', 'Auxiliar de Producción', '2023-04-03', '2025-06-03', 'Encargado del empaque y etiquetado de productos alimenticios, supervisando la calidad antes del despacho.', 'Luis Machado – Jefe de Planta – 0414-5552233'),
(2, 502, 'VenTech Digital Group', 'Desarrollador Web Junior', '2022-09-15', '2025-06-11', 'Participación en el desarrollo de páginas corporativas y mantenimiento de sitios web en HTML, CSS y JavaScript.', 'María Fernanda Pérez – Líder de Proyecto – mf.perez@ventech.com'),
(3, 503, 'Farmacias VitaNova', 'Cajero y Atención al Cliente', '2022-10-26', '2025-03-10', 'Manejo de caja registradora, control de inventario básico y atención personalizada al público.', 'Ramón Delgado – Encargado de Tienda – 0426-6671100'),
(4, 504, 'Transporte y Envíos Lara', 'Asistente Administrativo', '2021-04-13', '2025-05-16', 'Gestión de documentos, seguimiento de envíos y coordinación con chóferes de carga a nivel nacional.', 'Coordinadora de Operaciones – carlar@transportelara.com.ve');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formacion_academica`
--

CREATE TABLE `formacion_academica` (
  `ID_FormaAcad` int(11) NOT NULL,
  `ID_postulante` int(11) NOT NULL,
  `Institucion_FormaAcad` varchar(255) NOT NULL,
  `Titulo_FormaAcad` varchar(255) NOT NULL,
  `Fecha_inicio_FormaAcad` date NOT NULL,
  `Fecha_fin_FormaAcad` date NOT NULL,
  `Descripcion_FormaAcad` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `formacion_academica`
--

INSERT INTO `formacion_academica` (`ID_FormaAcad`, `ID_postulante`, `Institucion_FormaAcad`, `Titulo_FormaAcad`, `Fecha_inicio_FormaAcad`, `Fecha_fin_FormaAcad`, `Descripcion_FormaAcad`) VALUES
(1, 501, 'Instituto Tecnológico San Rafael', 'Técnico Medio en Procesamiento de Alimentos', '2008-07-24', '2015-07-09', 'Formación práctica en el procesamiento, conservación y control de calidad de productos alimenticios.'),
(2, 502, 'Universidad Nacional Experimental Politécnica (UNEXPO)', 'Ingeniero en Informática', '2015-07-09', '2022-07-14', 'Carrera centrada en el desarrollo de software, bases de datos, redes y sistemas computacionales.\r\n\r\n'),
(3, 503, 'Centro de Estudios Comerciales Los Andes', 'Técnico en Administración Comercial', '2017-06-08', '2023-07-07', 'Formación orientada a la gestión de ventas, inventarios y atención al cliente en entornos comerciales.'),
(4, 504, 'Instituto Universitario de Tecnología Antonio José de Sucre (IUTAJS)', 'Técnico Superior Universitario en Administración', '2018-07-11', '2023-07-29', 'Estudios enfocados en el manejo de recursos administrativos, planificación y logística empresarial.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nomina`
--

CREATE TABLE `nomina` (
  `ID_nomina` int(11) NOT NULL,
  `ID_empresa` int(11) NOT NULL,
  `ID_usuHG` int(11) NOT NULL,
  `Mes_nomina` int(11) NOT NULL,
  `Ano_nomina` int(11) NOT NULL,
  `fecha_creacion_nomina` datetime NOT NULL,
  `Total_nomina` decimal(10,2) NOT NULL,
  `Estado_nomina` enum('''Pendiente''','''Pagado''''''Cancelada''') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `nomina`
--

INSERT INTO `nomina` (`ID_nomina`, `ID_empresa`, `ID_usuHG`, `Mes_nomina`, `Ano_nomina`, `fecha_creacion_nomina`, `Total_nomina`, `Estado_nomina`) VALUES
(1, 1, 301, 4, 2025, '2025-05-01 22:05:24', 250000.00, '\'Pagado\'\'\'Cancelada\''),
(2, 2, 302, 3, 2025, '2025-03-01 22:05:24', 600400.00, '\'Pendiente\''),
(3, 3, 301, 5, 2025, '2025-06-05 22:07:16', 430050.00, '\'Pagado\'\'\'Cancelada\''),
(4, 4, 302, 4, 2025, '2025-05-08 22:07:16', 202000.00, '\'Pagado\'\'\'Cancelada\'');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oferta_laboral`
--

CREATE TABLE `oferta_laboral` (
  `ID_oferta_laboral` int(11) NOT NULL,
  `ID_empresa` int(11) NOT NULL,
  `Titulo_oferta_laboral` varchar(255) NOT NULL,
  `Descrpcion_oferta_laboral` text NOT NULL,
  `Profecion_oferta_laboral` varchar(250) NOT NULL,
  `Salario_oferta_laboral` decimal(10,2) NOT NULL,
  `Ubicacion_oferta_laboral` varchar(250) NOT NULL,
  `Fecha_publicacion_oferta_laboral` date NOT NULL,
  `Fecha_cierre_oferta_laboral` date NOT NULL,
  `Activa_oferta_laboral` tinyint(1) NOT NULL,
  `Requisitos_oferta_laboral` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `oferta_laboral`
--

INSERT INTO `oferta_laboral` (`ID_oferta_laboral`, `ID_empresa`, `Titulo_oferta_laboral`, `Descrpcion_oferta_laboral`, `Profecion_oferta_laboral`, `Salario_oferta_laboral`, `Ubicacion_oferta_laboral`, `Fecha_publicacion_oferta_laboral`, `Fecha_cierre_oferta_laboral`, `Activa_oferta_laboral`, `Requisitos_oferta_laboral`) VALUES
(1, 1, 'Asistente de Logística y Abastecimiento', 'Encargado de apoyar el control de inventario y la coordinación de pedidos entre tiendas y proveedores ecológicos.', 'Técnico Superior en Logística / Administración', 2100.00, 'Caracas, Distrito Capital', '2025-07-01', '2025-07-10', 1, 'Manejo de Excel intermedio-avanzado\r\nExperiencia mínima de 1 año en logística o almacén\r\nCapacidad para trabajar bajo presión y en equipo'),
(2, 2, 'Analista de Ventas y Consumo', 'Responsable del análisis de datos de ventas, tendencias de consumo y rendimiento de productos para toma de decisiones.', 'Lic. en Estadística / Ingeniería Industrial / Administración', 2800.00, 'Valencia, Edo. Carabobo', '2025-07-01', '2025-07-17', 1, 'Conocimientos en Power BI o Tableau\r\nExperiencia con bases de datos SQL\r\nPensamiento analítico y habilidades comunicativas'),
(3, 3, 'Chofer de Reparto – Zona Centro', 'Realizar la entrega segura y puntual de mercancía a los diferentes clientes comerciales en la zona centro del país.', 'Bachiller / Licencia de conducir tipo 4 o 5', 1500.00, 'Barquisimeto, Edo. Lara', '2025-07-02', '2025-07-09', 1, 'Licencia de conducir vigente\r\nConocimiento de rutas comerciales del centro del país\r\nBuena condición física y responsabilidad\r\n\r\n'),
(4, 4, 'Asesor de Ventas de Piso – Línea Blanca', 'Atención al cliente y asesoramiento en la compra de electrodomésticos y muebles para el hogar.\r\n\r\n', 'Técnico en Ventas / Bachiller con experiencia', 1800.00, 'Maracaibo, Edo. Zulia', '2025-07-03', '2025-07-19', 1, 'Experiencia en atención al cliente o ventas (mínimo 1 año)\r\nConocimientos básicos en productos del hogar\r\nExcelente presencia y habilidades de comunicación\r\n\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulacion`
--

CREATE TABLE `postulacion` (
  `ID_postulacion` int(11) NOT NULL,
  `ID_oferta` int(11) NOT NULL,
  `ID_postulante` int(11) NOT NULL,
  `Fecha_postulacion` datetime NOT NULL,
  `Estado_postulacion` enum('''Pendiente''','''Revisado''','''Entrevista''','''Contratado''','''Rechasado''') NOT NULL,
  `notas_postulacion` text NOT NULL,
  `calificacio_postulacion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `postulacion`
--

INSERT INTO `postulacion` (`ID_postulacion`, `ID_oferta`, `ID_postulante`, `Fecha_postulacion`, `Estado_postulacion`, `notas_postulacion`, `calificacio_postulacion`) VALUES
(1, 1, 501, '2025-07-03 19:51:12', '\'Revisado\'', 'test', '8/10'),
(2, 2, 502, '2025-07-10 20:12:29', '\'Revisado\'', 'test2', '5/10'),
(3, 3, 503, '2025-07-11 20:12:29', '\'Entrevista\'', 'test3', '10/10'),
(4, 4, 504, '2025-07-08 20:12:29', '\'Rechasado\'', 'test4', '2/10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulante`
--

CREATE TABLE `postulante` (
  `ID_postulante` int(11) NOT NULL,
  `ID_usuario` int(11) NOT NULL,
  `Cedula_postulante` varchar(20) NOT NULL,
  `Nombre_postulante` varchar(50) NOT NULL,
  `Apellido_postulante` varchar(50) NOT NULL,
  `Fecha_de_nacimiento_postulante` date NOT NULL,
  `Telefono_postulante` varchar(20) NOT NULL,
  `Direccion_postulante` text NOT NULL,
  `Tipo_de_sangre_postulante` varchar(20) NOT NULL,
  `Contacto_de_emergencia_postulante` varchar(50) NOT NULL,
  `Telefono_de_emergencia_postulante` varchar(20) NOT NULL,
  `Fecha_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `postulante`
--

INSERT INTO `postulante` (`ID_postulante`, `ID_usuario`, `Cedula_postulante`, `Nombre_postulante`, `Apellido_postulante`, `Fecha_de_nacimiento_postulante`, `Telefono_postulante`, `Direccion_postulante`, `Tipo_de_sangre_postulante`, `Contacto_de_emergencia_postulante`, `Telefono_de_emergencia_postulante`, `Fecha_registro`) VALUES
(501, 112, '24866437', 'Mariana', 'Torres', '2003-12-10', '+584126849354', ' Urb. Las Rosas, Calle Apamate, Casa N° 17-B, Parroquia El Valle, Caracas 1041, Distrito Capital', 'A', 'Mayra', '+584128478354', '2025-07-17'),
(502, 113, '26468301', 'Jose', 'Rivas', '1998-07-10', '+584148930064', 'Residencias Altamira Sur, Torre B, Apto 9-3, Av. San Juan Bosco, Municipio Chacao, Caracas 1060\r\n\r\n', 'AB', 'Jose', '+584125678112', '2025-07-01'),
(503, 114, '19646382', 'Alex', 'Gonzales', '1995-07-12', '+58426825825', 'Barrio La Esperanza, Calle 4, Casa sin número, Sector El Samán, Maracaibo 4004, Edo. Zulia', 'O', 'Roger', '+584147896524', '2025-07-10'),
(504, 115, '12548654', 'Angel', 'Flores', '2003-11-28', '+584245843210', 'Quinta “Los Almendros”, Calle Cedral, Urb. Santa María, Municipio San Diego, Valencia 2006, Edo. Carabobo', 'B', 'Luis', '+584268001405', '2025-07-17');

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
-- Volcado de datos para la tabla `recibo`
--

INSERT INTO `recibo` (`ID_recibo`, `ID_contrato`, `ID_nomina`, `Salario_bruto_recibo`, `Comision_hiring`, `Descuento_inces`, `Descuento_ivss`, `Salario_neto`, `Fecha_pago`, `Numero_recibo`) VALUES
(1, 1, 1, 2400.00, 24.00, 10.00, 5.00, 2563.00, '2025-05-09', '1684931891'),
(2, 2, 2, 2100.00, 21.00, 10.00, 5.00, 3210.00, '2025-04-16', '23544524354'),
(3, 3, 3, 3500.00, 35.00, 15.00, 7.00, 35410.00, '2025-05-02', '654534344644'),
(4, 4, 4, 2200.00, 22.00, 11.00, 6.00, 2644.00, '2025-06-11', '34531531453');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sector`
--

CREATE TABLE `sector` (
  `ID_sector` int(11) NOT NULL,
  `Nombre_sector` varchar(50) NOT NULL,
  `Descripcion_sector` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sector`
--

INSERT INTO `sector` (`ID_sector`, `Nombre_sector`, `Descripcion_sector`) VALUES
(1, 'Primario', 'Agricultura\r\nPesca\r\nMinería\r\nSilvicultura\r\n\r\n'),
(2, 'Secundario', 'Industria alimentaria\r\nTextil\r\nMetalúrgica\r\nConstrucción\r\nFarmacéutica'),
(3, 'Terciario', 'Comercio\r\nTransporte\r\nBanca y finanzas\r\nTelecomunicaciones\r\nEducación\r\nSalud'),
(4, 'Cuaternario', 'Tecnología de la información\r\nInvestigación científica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID_usuario` int(11) NOT NULL,
  `Email_usuario` varchar(255) NOT NULL,
  `Password_usuario` varchar(255) NOT NULL,
  `Tipo_de_usuario` enum('''Administrador''','''Postulante''','''Empresa''','''HiringGroup''','''Contratado''') NOT NULL,
  `Fecha_de_creacio_usuario` datetime NOT NULL,
  `Ultimo_loguin_usuario` datetime NOT NULL,
  `Activo_usuario` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID_usuario`, `Email_usuario`, `Password_usuario`, `Tipo_de_usuario`, `Fecha_de_creacio_usuario`, `Ultimo_loguin_usuario`, `Activo_usuario`) VALUES
(101, 'jose_guerrero@gmail.com', 'gue14783', '\'Administrador\'', '2021-03-04 13:33:24', '2025-07-20 13:33:24', 1),
(102, 'mariaLarez35@gmail.com', 'Marla7878', '\'Administrador\'', '2025-04-15 13:36:20', '2025-07-19 13:36:20', 1),
(103, 'oscarperez@gmail.com', '1386perez15', '\'HiringGroup\'', '2020-07-15 13:56:25', '2025-07-18 13:56:25', 1),
(104, 'anamary12@gmail.com', 'marsosa0102', '\'HiringGroup\'', '2020-06-19 13:56:25', '2025-07-20 19:56:25', 1),
(105, 'dailamc@gmail.com', 'daimc1456', '\'Administrador\'', '2022-05-11 16:02:39', '2025-07-20 22:02:31', 1),
(106, 'luismanu16@gmail.com', 'lunu8512', '\'Administrador\'', '2021-06-24 16:03:57', '2025-07-17 16:03:57', 1),
(107, 'lestercaceres@gmail.com', 'lex7492', '\'Administrador\'', '2023-11-24 16:03:57', '2025-07-19 16:03:57', 1),
(108, 'kariniangeles@gmail.com', 'kari383647', '\'Empresa\'', '2025-04-15 16:18:30', '2025-07-15 16:18:30', 1),
(109, 'angelojaime@gmail.com', 'ang821a2', '\'Empresa\'', '2025-07-01 16:18:30', '2025-07-19 16:18:30', 1),
(110, 'riverosamu@gmail.com', 'river52521', '\'Empresa\'', '2025-07-01 16:21:06', '2025-07-19 16:21:06', 1),
(111, 'naifraces14@gmail.com', 'naif23s68', '\'Empresa\'', '2025-06-04 16:22:01', '2025-07-20 16:22:01', 1),
(112, 'mariana.torres@gmail.com.', 'as5d6184s', '\'Postulante\'', '2025-07-17 17:53:06', '2025-07-20 17:53:06', 1),
(113, 'jose.rivas@gmail.com', '165dfgdafd', '\'Postulante\'', '2025-07-17 17:53:06', '2025-07-20 17:53:06', 1),
(114, 'AlexG@gmail.com', 'Axelg58212', '\'Postulante\'', '2025-07-10 17:53:06', '2025-07-19 17:53:06', 1),
(115, 'Angelflores@gmail.com', 'MC.angel684', '\'Postulante\'', '2025-07-03 17:53:06', '2025-07-18 17:53:06', 1),
(116, 'carlos.alvarado93@gmail.com', '56a4sd48r', '\'Contratado\'', '2025-07-10 19:09:18', '2025-07-20 19:09:18', 1),
(117, 'marifer.gonzalez28@gmail.com', 'sdf8r4v4g7', '\'Contratado\'', '2025-07-12 19:09:18', '2025-07-20 19:09:18', 1),
(118, 'valentina.perez.ve@gmail.com', 'oi7h7hhh7t', '\'Contratado\'', '2025-07-01 19:09:18', '2025-07-20 19:09:18', 1),
(119, 'josemanuel_rojas@gmail.com', 's4s7t7u7jm', '\'Contratado\'', '2025-06-11 19:09:18', '2025-07-20 19:09:18', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_empresa`
--

CREATE TABLE `usuarios_empresa` (
  `ID_usuEmpre` int(11) NOT NULL,
  `ID_empresa` int(11) NOT NULL,
  `ID_usuario` int(11) NOT NULL,
  `Nombre_usuEmpre` varchar(50) NOT NULL,
  `Apellido_usuEmpre` varchar(50) NOT NULL,
  `Cargo_usuEmpre` varchar(50) NOT NULL,
  `Telefono_usuEmpre` varchar(50) NOT NULL,
  `Contacto_Principal_usuEmpre` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios_empresa`
--

INSERT INTO `usuarios_empresa` (`ID_usuEmpre`, `ID_empresa`, `ID_usuario`, `Nombre_usuEmpre`, `Apellido_usuEmpre`, `Cargo_usuEmpre`, `Telefono_usuEmpre`, `Contacto_Principal_usuEmpre`) VALUES
(401, 1, 108, 'Karini', 'Pernia', 'CEO', '+584246897413', 1),
(402, 2, 109, 'Angelo', 'Jaime', 'CEO', '+1 498414368', 1),
(403, 3, 110, 'Luis', 'Rivero', 'Gerente', '+584246978423', 1),
(404, 4, 111, 'Rafael', 'Perdomo', 'Secretario', '+584267863247', 1);

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
-- Volcado de datos para la tabla `usuario_hiringgroup`
--

INSERT INTO `usuario_hiringgroup` (`ID_usuHG`, `ID_usuario`, `Nombres_usuHG`, `Apellidos_usuHG`, `Gestionar_Nomina_usuHG`, `Gestionar_contratos_usuHG`, `Departamento_usuHG`) VALUES
(301, 103, 'Oscar Samuel', 'Perez Ramirez', 1, 1, '\'Contabilidad\''),
(302, 104, 'Ana Maria', 'Hernández Ruiz', 1, 1, '\'RRHH\'');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`ID_admin`),
  ADD KEY `ID_usuario` (`ID_usuario`);

--
-- Indices de la tabla `banco`
--
ALTER TABLE `banco`
  ADD PRIMARY KEY (`ID_banco`);

--
-- Indices de la tabla `contratado`
--
ALTER TABLE `contratado`
  ADD PRIMARY KEY (`ID_contratado`),
  ADD KEY `ID_usuario` (`ID_usuario`),
  ADD KEY `ID_contrato` (`ID_contrato`);

--
-- Indices de la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`ID_contrato`),
  ADD KEY `ID_postulacion` (`ID_postulacion`),
  ADD KEY `ID_usuHG` (`ID_usuHG`),
  ADD KEY `ID_banco` (`ID_banco`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`ID_empresa`),
  ADD KEY `ID_sector` (`ID_sector`);

--
-- Indices de la tabla `experiencia_laboral`
--
ALTER TABLE `experiencia_laboral`
  ADD PRIMARY KEY (`ID_expeLa`),
  ADD KEY `ID_postulante` (`ID_postulante`);

--
-- Indices de la tabla `formacion_academica`
--
ALTER TABLE `formacion_academica`
  ADD PRIMARY KEY (`ID_FormaAcad`),
  ADD KEY `ID_postulante` (`ID_postulante`);

--
-- Indices de la tabla `nomina`
--
ALTER TABLE `nomina`
  ADD PRIMARY KEY (`ID_nomina`),
  ADD KEY `ID_empresa` (`ID_empresa`),
  ADD KEY `ID_usuHG` (`ID_usuHG`);

--
-- Indices de la tabla `oferta_laboral`
--
ALTER TABLE `oferta_laboral`
  ADD PRIMARY KEY (`ID_oferta_laboral`),
  ADD KEY `ID_empresa` (`ID_empresa`);

--
-- Indices de la tabla `postulacion`
--
ALTER TABLE `postulacion`
  ADD PRIMARY KEY (`ID_postulacion`),
  ADD KEY `ID_oferta` (`ID_oferta`),
  ADD KEY `ID_postulante` (`ID_postulante`);

--
-- Indices de la tabla `postulante`
--
ALTER TABLE `postulante`
  ADD PRIMARY KEY (`ID_postulante`),
  ADD KEY `ID_usuario` (`ID_usuario`);

--
-- Indices de la tabla `recibo`
--
ALTER TABLE `recibo`
  ADD PRIMARY KEY (`ID_recibo`),
  ADD KEY `ID_contrato` (`ID_contrato`),
  ADD KEY `ID_nomina` (`ID_nomina`);

--
-- Indices de la tabla `sector`
--
ALTER TABLE `sector`
  ADD PRIMARY KEY (`ID_sector`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_usuario`);

--
-- Indices de la tabla `usuarios_empresa`
--
ALTER TABLE `usuarios_empresa`
  ADD PRIMARY KEY (`ID_usuEmpre`),
  ADD KEY `ID_empre` (`ID_empresa`),
  ADD KEY `ID_usuario` (`ID_usuario`);

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
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `ID_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT de la tabla `banco`
--
ALTER TABLE `banco`
  MODIFY `ID_banco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `contratado`
--
ALTER TABLE `contratado`
  MODIFY `ID_contratado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=605;

--
-- AUTO_INCREMENT de la tabla `contrato`
--
ALTER TABLE `contrato`
  MODIFY `ID_contrato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `ID_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=402;

--
-- AUTO_INCREMENT de la tabla `experiencia_laboral`
--
ALTER TABLE `experiencia_laboral`
  MODIFY `ID_expeLa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `formacion_academica`
--
ALTER TABLE `formacion_academica`
  MODIFY `ID_FormaAcad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `nomina`
--
ALTER TABLE `nomina`
  MODIFY `ID_nomina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `oferta_laboral`
--
ALTER TABLE `oferta_laboral`
  MODIFY `ID_oferta_laboral` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `postulacion`
--
ALTER TABLE `postulacion`
  MODIFY `ID_postulacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `postulante`
--
ALTER TABLE `postulante`
  MODIFY `ID_postulante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=505;

--
-- AUTO_INCREMENT de la tabla `recibo`
--
ALTER TABLE `recibo`
  MODIFY `ID_recibo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `sector`
--
ALTER TABLE `sector`
  MODIFY `ID_sector` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=510;

--
-- AUTO_INCREMENT de la tabla `usuarios_empresa`
--
ALTER TABLE `usuarios_empresa`
  MODIFY `ID_usuEmpre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=405;

--
-- AUTO_INCREMENT de la tabla `usuario_hiringgroup`
--
ALTER TABLE `usuario_hiringgroup`
  MODIFY `ID_usuHG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=303;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `usuario_ID_usuario_administrador` FOREIGN KEY (`ID_usuario`) REFERENCES `usuario` (`ID_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `contratado`
--
ALTER TABLE `contratado`
  ADD CONSTRAINT `contrato_ID_contrato_contratado` FOREIGN KEY (`ID_contrato`) REFERENCES `contrato` (`ID_contrato`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ID_usuario_contratado` FOREIGN KEY (`ID_usuario`) REFERENCES `usuario` (`ID_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD CONSTRAINT `banco_ID_banco_contrato` FOREIGN KEY (`ID_banco`) REFERENCES `banco` (`ID_banco`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `postulacion_ID_postulacion_contrato` FOREIGN KEY (`ID_postulacion`) REFERENCES `postulacion` (`ID_postulacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuHG_ID_usuHG_contrato` FOREIGN KEY (`ID_usuHG`) REFERENCES `usuario_hiringgroup` (`ID_usuHG`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `sector_ID_sector_empresa` FOREIGN KEY (`ID_sector`) REFERENCES `sector` (`ID_sector`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `experiencia_laboral`
--
ALTER TABLE `experiencia_laboral`
  ADD CONSTRAINT `postulante_ID_postulante_experiencia_labolar` FOREIGN KEY (`ID_postulante`) REFERENCES `postulante` (`ID_postulante`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `formacion_academica`
--
ALTER TABLE `formacion_academica`
  ADD CONSTRAINT `postulante_ID_postulante_formacion_academica` FOREIGN KEY (`ID_postulante`) REFERENCES `postulante` (`ID_postulante`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `nomina`
--
ALTER TABLE `nomina`
  ADD CONSTRAINT `empresa_ID_empresa_nomina` FOREIGN KEY (`ID_empresa`) REFERENCES `empresa` (`ID_empresa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuHG_ID_usuHG_nomina` FOREIGN KEY (`ID_usuHG`) REFERENCES `usuario_hiringgroup` (`ID_usuHG`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `oferta_laboral`
--
ALTER TABLE `oferta_laboral`
  ADD CONSTRAINT `empresa_ID_empresa_oferta_laboral` FOREIGN KEY (`ID_empresa`) REFERENCES `empresa` (`ID_empresa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `postulacion`
--
ALTER TABLE `postulacion`
  ADD CONSTRAINT `oferta_ID_oferta_postulacion` FOREIGN KEY (`ID_oferta`) REFERENCES `oferta_laboral` (`ID_oferta_laboral`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `postulante_ID_postulante_postulacion` FOREIGN KEY (`ID_postulante`) REFERENCES `postulante` (`ID_postulante`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `postulante`
--
ALTER TABLE `postulante`
  ADD CONSTRAINT `usuario_ID_usuario_postilante` FOREIGN KEY (`ID_usuario`) REFERENCES `usuario` (`ID_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `recibo`
--
ALTER TABLE `recibo`
  ADD CONSTRAINT `contrato_ID_contrato_recibo` FOREIGN KEY (`ID_contrato`) REFERENCES `contrato` (`ID_contrato`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nomina_ID_nomina_recibo` FOREIGN KEY (`ID_nomina`) REFERENCES `nomina` (`ID_nomina`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios_empresa`
--
ALTER TABLE `usuarios_empresa`
  ADD CONSTRAINT `empresa_ID_empresa_usuarios_empresa` FOREIGN KEY (`ID_empresa`) REFERENCES `empresa` (`ID_empresa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ID_usuario_usuarios_empresa` FOREIGN KEY (`ID_usuario`) REFERENCES `usuario` (`ID_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario_hiringgroup`
--
ALTER TABLE `usuario_hiringgroup`
  ADD CONSTRAINT `usuario_ID_usuario_usuario_hiringgroup` FOREIGN KEY (`ID_usuario`) REFERENCES `usuario` (`ID_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
