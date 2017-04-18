-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 02-04-2016 a las 23:50:26
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `chat_ajax`
--
CREATE DATABASE IF NOT EXISTS `chat_ajax` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `chat_ajax`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mensaje` varchar(100) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `chat`
--

INSERT INTO `chat` (`id`, `mensaje`, `nombre`) VALUES
(1, 'holaaa como estan ', 'vladimir'),
(2, 'yo bien gracias y tu?', 'lennin'),
(3, 'bien gracias y que haces?', 'vladimir'),
(4, 'aqui viendo tutoriales', 'lennin'),
(5, 'ayaaa que bueno seguro los de vlaz vela', 'vladimir'),
(6, 'claro ese tio es muy bueno', 'lennin'),
(7, 'holaaa', 'vladimir'),
(8, 'holaaaaaa como estan', 'vladimir'),
(9, 'muy bien', 'lennin'),
(10, 'SUSCRIBETE TIO :D', 'vladimir'),
(11, 'nooo dislike', 'lennin'),
(12, 'okay U.u', 'vladimir'),
(13, 'ffkjgkgjfkfgj', 'vladimir'),
(14, 'kfjfdkjfdjdf', 'vladimir'),
(15, 'kfjfdkjdfkfdjkdfj', 'vladimir'),
(16, 'kfjdfkjfdkjfdkjfd', 'vladimir'),
(17, 'kfjkfdkdfjfkjdfkjdfkj', 'vladimir'),
(18, 'kfjkdfjfdjkfd', 'vladimir'),
(19, 'kjfdffjdkfdjfdkjd', 'vladimir'),
(20, 'hey que viva este canal tio', 'vladimir'),
(21, 'si tienes razon', 'lennin'),
(24, 'hey ya funciona?', 'vladimir'),
(25, 'si al parecer ya funciona :D', 'lennin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
