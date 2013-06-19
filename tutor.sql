-- phpMyAdmin SQL Dump
-- version 3.5.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-06-2013 a las 17:39:23
-- Versión del servidor: 5.0.51b-community-nt-log
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tutor`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluaciones`
--

CREATE TABLE IF NOT EXISTS `evaluaciones` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `evaluacion` varchar(255) NOT NULL,
  `grupo` int(11) NOT NULL,
  `preguntas` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `evaluaciones`
--

INSERT INTO `evaluaciones` (`id`, `evaluacion`, `grupo`, `preguntas`) VALUES
(1, 'Enfermería', 1, 6),
(2, 'Administración de farmacos', 1, 8),
(3, 'Administración de farmacos via intramuscular en el área del brazo', 2, 5),
(4, 'Administración de farmacos via intramuscular en el área del gluteo', 2, 6),
(5, 'Administración de farmacos via intravenosa', 3, 6);

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
  `fecha` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`id`, `usuario_id`, `evaluacion_id`, `nota`, `estado`, `fecha`) VALUES
(26, 2, 1, 6, 'si', '2013-06-19 15:23:09'),
(27, 2, 2, 8, 'si', '2013-06-19 15:25:10'),
(28, 2, 3, 5, 'si', '2013-06-19 15:27:19'),
(36, 2, 4, 6, 'si', '2013-06-19 17:05:13'),
(37, 2, 5, 6, 'si', '2013-06-19 17:37:49');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `ci`, `usuario`, `password`, `tipo`) VALUES
(1, 'Profesor Jirafales', '123', 'profesor', 'profesor', 'profesor'),
(2, 'Alumno', '456', 'alumno', 'alumno', 'alumno'),
(4, 'nombre', 'ci', 'user', 'pass', 'alumno'),
(5, 'ceglys', '20307323', 'ceglys', '021189elyr', 'alumno'),
(6, 'luis', '123', 'luis', 'luis', 'alumno');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
