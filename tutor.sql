-- phpMyAdmin SQL Dump
-- version 4.0.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-06-2013 a las 04:35:35
-- Versión del servidor: 5.0.51b-community-nt-log
-- Versión de PHP: 5.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tutor`
--
CREATE DATABASE IF NOT EXISTS `tutor` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `tutor`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluaciones`
--

CREATE TABLE IF NOT EXISTS `evaluaciones` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `evaluacion` varchar(255) NOT NULL,
  `grupo` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `evaluaciones`
--

INSERT INTO `evaluaciones` (`id`, `evaluacion`, `grupo`) VALUES
(1, 'Enfermería', 1),
(2, 'Administración de farmacos', 1),
(3, 'Administración de farmacos via intramuscular en el área del brazo', 2),
(4, 'Administración de farmacos via intramuscular en el área del gluteo', 2),
(5, 'Administración de farmacos via intravenosa', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE IF NOT EXISTS `notas` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `usuario_id` int(11) NOT NULL,
  `evaluacion_id` int(11) NOT NULL,
  `nota` int(11) NOT NULL,
  `estado` enum('si','no') NOT NULL default 'no',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nombre` varchar(255) default NULL,
  `ci` varchar(255) default NULL,
  `usuario` varchar(255) default NULL,
  `password` varchar(255) default NULL,
  `tipo` enum('alumno','profesor') default 'alumno',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `ci`, `usuario`, `password`, `tipo`) VALUES
(1, 'Profesor Jirafales', '123', 'profesor', 'profesor', 'profesor'),
(2, 'Alumno', '456', 'alumno', 'alumno', 'alumno'),
(4, 'nombre', 'ci', 'user', 'pass', 'alumno');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
