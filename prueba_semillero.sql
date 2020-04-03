-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 20-03-2020 a las 00:42:18
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba_semillero`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesores`
--

DROP TABLE IF EXISTS `asesores`;
CREATE TABLE IF NOT EXISTS `asesores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `edad` int(4) NOT NULL,
  `genero` varchar(34) COLLATE utf8_spanish_ci NOT NULL,
  `cliente` text COLLATE utf8_spanish_ci NOT NULL,
  `cede` varchar(34) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `asesores`
--

INSERT INTO `asesores` (`id`, `nombre`, `cedula`, `telefono`, `fecha_nacimiento`, `edad`, `genero`, `cliente`, `cede`) VALUES
(8, 'Jose Fernando', '234667', '23547', '1990-09-09 05:00:00', 29, 'masculino', 'ee', 'rr');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
