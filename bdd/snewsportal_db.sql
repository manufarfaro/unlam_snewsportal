-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-06-2012 a las 16:34:06
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

-- --------------------------------

CREATE DATABASE `snewsportal_db`;

-- -----------------------------


USE `snewsportal_db`;



--
-- Base de datos: `snewsportal_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comment`
--

CREATE TABLE IF NOT EXISTS `snewsportal_db`.`comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `notice_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL DEFAULT 'Anonimous',
  `text` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isActive` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='latin1_swedish_ci' AUTO_INCREMENT=7 ;

--
-- Volcar la base de datos para la tabla `comment`
--

INSERT INTO `comment` (`comment_id`, `notice_id`, `name`, `text`, `timestamp`, `isActive`) VALUES

(5, 11, 'Marcos', 'Es increíble que sigan ocurriendo estas cosas!', '2012-06-11 11:29:21', 1),
(6, 11, 'Micaela', 'La situación no da para más...', '2012-06-11 11:29:44', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notice`
--

CREATE TABLE IF NOT EXISTS `snewsportal_db`.`notice` (
  `notice_id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `text` text NOT NULL,
  `dateCreated` date DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isActive` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`notice_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='latin1_swedish_ci' AUTO_INCREMENT=14 ;

--
-- Volcar la base de datos para la tabla `notice`
--

INSERT INTO `notice` (`notice_id`, `person_id`, `title`, `text`, `dateCreated`, `timestamp`, `isActive`) VALUES
(12, 15, 'Arranca una semana Cálida en Bs As', 'La jornada en la Capital Federal y el conurbano bonaerense se presentará con neblinas y bancos de niebla, nubosidad variable y con una temperatura mínima estimada en 5 grados y una máxima en 17.\r\n\r\nSegún informó el Servicio Meteorológico Nacional (SMN), para mañana, el SMN adelanta cielo parcialmente nublado o nublado con probabilidad de lluvias y lloviznas aisladas. Las temperaturas oscilarán entre los 13 y los 18 grados. \r\n\r\nEl miércoles el cielo estará nublado. Habrá probabilidad de precipitaciones y una mínima estimada en 16 grados y una máxima en 23', '2012-06-11', '2012-06-11 11:28:53', 1),
(11, 14, 'Descarriló un tren del Sarmiento', 'Como una espiral que parece no tener fin un tren volvión a ser protagonista de un accidente. Una formación del ferrocarril Sarmiento descarriló en cercanías de la estación bonaerense de Merlo, sin que se produjeran víctimas.\r\n\r\nEl accidente, cuyas causas se investigan, se produjo a la madrugada cuando dos vagones de una formación se salieron de las vías. \r\n\r\nA raíz del hecho, la línea Sarmiento circula únicamente entre la terminal porteña de Once y la estación Castelar.\r\n\r\nOtro epìsodio dejó ayer 14 heridos en la estación Retiro, cuando una formación de la línea Belgrano Norte, que estaba por salir, frenó bruscamente y generó golpes y heridas cortantes entre los pasajeros.\r\n\r\nActualmente las líneas Sarmiento y Mitre son manejadas por las empresas Metrovías y Ferrovías, luego de que el Gobierno rescindiera el contrato de concesión que mantenía con la empresa Trenes de Buenos Aires (TBA) tras la tragedia de Once en el que murieron 51 personas y hubo más de 700 heridos.', '2012-06-11', '2012-06-11 11:27:56', 1),
(13, 14, 'Récord de descargas en Aplicación de Apple', '\r\n\r\n Una aplicación de Apple gratuita para detectar comida "no segura" en China rompe récords de descargas porque detalla a sus ya más de 200.000 usuarios "marcas peligrosas" de alimentos y "puntos geográficos" en que estallaron escándalos alimentarios, informa hoy el "South China Morning Post".\r\n\r\nLa aplicación, lanzada al público a fin de mayo, muestra miles de productos que fueron denunciados por infligir la seguridad alimentaria, así como fotos ilustrativas sobre la escala y gravedad de los problemas, además de valorar el riesgo potencial de consumir cada artículo. Bajo el nombre, "Guía de Supervisión de China", sólo en tres días la aplicación se convirtió en la número uno del país en ser descargada, entre las gratuitas, y encabezó la lista de las "app" (aplicaciones) preferidas del sector médico.\r\n\r\nSu inventor, un gerente de productos de Software de Seguridad de Internet de Kingsoft y que no reveló su nombre, manifestó que la aplicación fue un regalo para su esposa e hija. Además, dijo, servirá para informar "a más personas para que eviten los productos tóxicos y puedan salvaguardar su seguridad alimentaria".', '2012-06-11', '2012-06-11 11:33:47', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `person`
--

CREATE TABLE IF NOT EXISTS `snewsportal_db`.`person` (
  `person_id` int(11) NOT NULL AUTO_INCREMENT,
  `userpass` varchar(50) NOT NULL DEFAULT '',
  `name` varchar(25) DEFAULT '',
  `surname` varchar(30) DEFAULT '',
  `mail` varchar(50) NOT NULL DEFAULT '',
  `role_id` int(11) NOT NULL,
  `isActive` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`person_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='latin1_swedish_ci' AUTO_INCREMENT=18 ;

--
-- Volcar la base de datos para la tabla `person`
--

INSERT INTO `person` (`person_id`, `userpass`, `name`, `surname`, `mail`, `role_id`, `isActive`) VALUES
(14, '12345678', 'Agustin', 'Faggiano', 'agustinfaggiano@hotmail.com', 2, 1),
(15, 'babolat', 'Nestor', 'Gutierrez', 'ngutierrez@gmail.com', 3, 1),
(16, '123456', 'Nora', 'Fernandez', 'nora@nora.com', 3, 1),
(17, '87654321', 'Emanuel', 'Farfaro', 'manu.farfaro@gmail.com ', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role`
--

CREATE TABLE IF NOT EXISTS `snewsportal_db`.`role` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(50) NOT NULL,
  `isActive` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='latin1_swedish_ci' AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `role`
--

