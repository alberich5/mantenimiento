-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-08-2016 a las 01:33:35
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemalaravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `educacion`
--

CREATE TABLE IF NOT EXISTS `educacion` (
  `id` int(10) unsigned NOT NULL,
  `idUsuario` int(10) unsigned NOT NULL,
  `idTipoeducacion` int(11) NOT NULL,
  `titulo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `institucion` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `anio` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_10_25_000000_update_users_table', 2),
('2016_03_13_151018_crear_tabla_educacion', 3),
('2016_03_13_153835_crear_tabla_tiposEducacion', 3),
('2016_03_20_224237_crear_tabla_tipos_publicaciones', 4),
('2016_03_20_230021_crear_tabla_publicaciones', 5),
('2016_03_26_211538_crear_tabla_pais', 6),
('2016_03_25_161404_crear_tabla_proyectos', 7),
('2016_07_07_223315_crear_tabla_tipos_usuario', 8),
('2016_07_07_225615_update_table_users_V2', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE IF NOT EXISTS `pais` (
  `id` int(10) unsigned NOT NULL,
  `nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=200 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Colombia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Albania', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Alemania', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Andorra', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Angola', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Antigua y Barbuda', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Arabia Saudita', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Argelia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Argentina', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Armenia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Australia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Austria', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Azerbaiyán', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Bahamas', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Bahrein', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Bangladesh', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Barbados', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Bélgica', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Bélice', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Benin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Bielorrusia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Bolivia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Bosnia y Herzegovina', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Botsuana', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Brasil', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'Brunei', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'Bulgaria', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'Burkina Faso', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'Burundi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'Bután', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'Cabo Verde', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'Camboya', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'Camerún', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'Canadá', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'Chad', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'Chile', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'China', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'Chipre', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'Colombia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'Comoras', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'Corea del Norte', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'Corea del Sur', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'Costa de Marfil', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'Costa Rica', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'Croacia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'Cuba', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'Dinamarca', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'Dominica', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'Ecuador', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'Egipto', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'El Salvador', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'Emiratos Arabes Unid', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'Eritrea', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 'Eslovaquia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'Eslovenia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 'España', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 'Estados Unidos', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 'Estonia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 'Etiopía', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 'Filipinas', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 'Finlandia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 'Fiyi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 'Francia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 'Gab�n', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 'Gambia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 'Georgia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 'Ghana', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 'Granada', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 'Grecia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 'Guatemala', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 'Guinea', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 'Guinea Ecuatorial', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 'Guinea Francesa', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 'Guinea-Bissau', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 'Guyana', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 'Haití', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 'Honduras', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 'Hungría', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 'India', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 'Indonesia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 'Irán', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 'Iraq', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 'Irlanda', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 'Islandia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 'Islas Georgias del S', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 'Islas Malvinas', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 'Islas Marshall', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 'Islas Salom�n', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 'Israel', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 'Italia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 'Jamaica', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 'Jap�n', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 'Jordania', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 'Kazajistán', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 'Kenia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 'Kirguistán', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 'Kiribati', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 'Kuwait', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 'Laos', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 'Leshoto', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, 'Letonia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 'Líbano', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 'Libia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 'Liechtenstein', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, 'Lituania', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, 'Luxemburgo', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 'Madagascar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, 'Malasia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 'Malaui', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, 'Maldivas', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, 'Mali', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, 'Malta', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, 'Marruecos', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, 'Mauricio', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(115, 'Mauritania', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(116, 'México', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(117, 'Micronesia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(118, 'Moldavia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(119, 'M�naco', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(120, 'Mongolia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(121, 'Montenegro', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(122, 'Mozambique', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(123, 'Myanmar (birmania)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(124, 'Namibia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(125, 'Nauru', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(126, 'Nepal', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(127, 'Nicaragua', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(128, 'Níger', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(129, 'Nigeria', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(130, 'Noruega', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(131, 'Nueva Zelanda', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(132, 'Omán', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(133, 'Países Bajos', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(134, 'Pakistán', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(135, 'Palaos', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(136, 'Panamá', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(137, 'Papúa Nueva Guinea', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(138, 'Paraguay', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(139, 'Perú', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(140, 'Polonia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(141, 'Portugal', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(142, 'Puerto Rico', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(143, 'Qatar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(144, 'Reino Unido', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(145, 'República Centroafri', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(146, 'República Checa', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(147, 'República de Macedon', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(148, 'República del Congo', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(149, 'República DemocrAtic', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(150, 'República Dominicana', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(151, 'república saharaui', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(152, 'Ruanda', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(153, 'Rumania', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(154, 'Rusia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(155, 'Samoa', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(156, 'San Crist�bal y Nevi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(157, 'San Marino', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(158, 'San Vicente y las Gr', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(159, 'Santa Lucía', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(160, 'Santo Tomé y Príncip', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(161, 'Senegal', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(162, 'Serbia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(163, 'Seychelles', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(164, 'Sierra Leona', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(165, 'Singapur', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(166, 'Siria', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(167, 'Somalia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(168, 'Sri Lanka', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(169, 'Suazilandia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(170, 'SudAfrica', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(171, 'SudAn del norte', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(172, 'Sudan del sur', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(173, 'Suecia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(174, 'Suiza', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(175, 'Surinam', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(176, 'Tailandia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(177, 'Tanzania', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(178, 'Tayikistán', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(179, 'Timor Oriental', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(180, 'Togo', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(181, 'Tonga', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(182, 'Trinidad y Tobago', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(183, 'Túnez', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(184, 'Turkmenistán', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(185, 'Turquía', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(186, 'Tuvalu', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(187, 'Ucrania', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(188, 'uganda', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(189, 'Uruguay', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(190, 'Uzbekistán', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(191, 'Vanuatu', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(192, 'Vaticano', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(193, 'Venezuela', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(194, 'Vietnam', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(195, 'Yemen', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(196, 'Yibuti', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(197, 'Zambia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(198, 'Zimbabue', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(199, 'Antiguo', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE IF NOT EXISTS `proyectos` (
  `id` int(10) unsigned NOT NULL,
  `idUsuario` int(10) unsigned NOT NULL,
  `titulo` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `integrantes` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `objetivo` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `pais` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `financiamiento` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pclave` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ruta` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id`, `idUsuario`, `titulo`, `integrantes`, `descripcion`, `objetivo`, `estado`, `fecha`, `pais`, `financiamiento`, `pclave`, `ruta`, `created_at`, `updated_at`) VALUES
(1, 1, 'nuevo proyecto de prueba', 'NILTON HOYOS, JOEGE CALIXTO', 'trabajo de prueba descripcion,trabajo de prueba descripcion,trabajo de prueba descripcion,trabajo de prueba descripcion,trabajo de prueba descripcion,', 'objetivo de prueba,,,objetivo de pruebaobjetivo de pruebaobjetivo de pruebaobjetivo de prueba', '2', '2016-03-15', 'colombia', 'recursos propios', 'trabajo, grado , proyecto', 'proyectos/1_pdf_plusis.pdf', '2016-03-28 07:08:07', '2016-03-28 07:08:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE IF NOT EXISTS `publicaciones` (
  `id` int(10) unsigned NOT NULL,
  `idUsuario` int(10) unsigned NOT NULL,
  `idTipopublicacion` int(11) NOT NULL,
  `titulo` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `autores` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `universidad` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `anio` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `pais` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `revista` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `volumen` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `numero` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `pageI` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `pageF` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `volumenL` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `numeroL` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `ciudad` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `edicion` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `editorial` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ruta` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`id`, `idUsuario`, `idTipopublicacion`, `titulo`, `autores`, `universidad`, `anio`, `pais`, `revista`, `volumen`, `numero`, `pageI`, `pageF`, `volumenL`, `numeroL`, `ciudad`, `edicion`, `editorial`, `ruta`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Seguridad informatica', 'NILTON HOYOS', 'udenar', '2013', 'colombia', '', '', '', '', '', '', '', '', '', '', '2/1_articles-106223_archivo.pdf', '2016-03-22 03:57:44', '2016-03-22 03:57:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposeducacion`
--

CREATE TABLE IF NOT EXISTS `tiposeducacion` (
  `id` int(10) unsigned NOT NULL,
  `titulo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tiposeducacion`
--

INSERT INTO `tiposeducacion` (`id`, `titulo`, `created_at`, `updated_at`) VALUES
(1, 'ESTUDIANTE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'PREGRADO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'ESPECIALIZACION', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'MAESTRIA', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'DOCTORADO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'POSTDOCTORADO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'OTROS', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_publicaciones`
--

CREATE TABLE IF NOT EXISTS `tipos_publicaciones` (
  `id` int(10) unsigned NOT NULL,
  `titulo` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipos_publicaciones`
--

INSERT INTO `tipos_publicaciones` (`id`, `titulo`, `created_at`, `updated_at`) VALUES
(1, 'TRABAJOS DE GRADO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'TRABAJOS DE MAESTRIA', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'TRABAJOS DE DOCTORADO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'ARTICULOS', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'LIBROS', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'OTROS', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_usuario`
--

CREATE TABLE IF NOT EXISTS `tipos_usuario` (
  `id` int(10) unsigned NOT NULL,
  `nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipos_usuario`
--

INSERT INTO `tipos_usuario` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'ADMINISTRADOR', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'STANDARD', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `nombres` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `pais` int(11) NOT NULL,
  `ciudad` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `institucion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ocupacion` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `imagenurl` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tipoUsuario` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombres`, `apellidos`, `pais`, `ciudad`, `email`, `telefono`, `institucion`, `ocupacion`, `password`, `imagenurl`, `remember_token`, `created_at`, `updated_at`, `tipoUsuario`) VALUES
(1, 'nilton', 'hoyos', 1, '', 'plusis@gmail.com', '', '', '', '$2y$10$rd5xaITM0qhpqd2kHes3e.gWhsTwqRbTcNeuq3.UDhKBnAC51BK2i', '../storage/fotografias/userimagen-1.jpg', '50ZObK9sOLxU9QNTlRwinKroEBkbxvDx1a00wzvRdslZGpiFYTD2miYKZel7', '2015-10-05 05:39:17', '2016-07-24 22:44:19', 1),
(7, 'plusis', 'web', 9, 'buenos aires', 'plusis123@gmail.com', '', 'universidad', 'docente', '$2y$10$c5K2TUeEEJjNikJKcSeeyu8XU1S/Ad0il0PY9s6vmSmgZqWULYKxK', '../storage/fotografias/userimagen-7.png', NULL, '2015-10-25 23:25:51', '2016-02-29 05:26:21', 0),
(8, 'nilton1', 'hoyos1', 1, 'Mexico', 'nilton1hoyos1@gmail.com', '315324589', 'universidad1', 'Estudiante1', '$2y$10$Rma8t7pUm2bhtGa99yxikuV1RaDCWWFD.6FbwkU8QYu17FgpTB8US', '', NULL, '2016-03-06 07:08:15', '2016-03-06 07:08:15', 0),
(9, 'nilton2', 'hoyos2', 1, 'Bogota', 'nilton2hoyos2@gmail.com', '315324589', 'universidad2', 'Docente1', '$2y$10$xy4Z/PXz82h0AdSnwykD0O3LUqcDVzMpnZflMDyCRqNfvyj9VC/bG', '', NULL, '2016-03-06 07:08:15', '2016-03-06 07:08:15', 0),
(10, 'nilton3', 'hoyos3', 1, 'Mexico', 'nilton3hoyos3@gmail.com', '315324589', 'universidad3', 'Estudiante2', '$2y$10$1ICb.m703A2ATc.eYJZEPOvENdaDc7WgbIrirA6q9cGJXG3jSpM62', '', NULL, '2016-03-06 07:08:15', '2016-03-06 07:08:15', 0),
(11, 'nilton4', 'hoyos4', 1, 'Bogota', 'nilton4hoyos4@gmail.com', '315324589', 'universidad4', 'Docente2', '$2y$10$4gzT0bXu0H4VF8n1VfBsNu1pl4f6wpkU5CmezGmHVRyY4b.vx8xh2', '', NULL, '2016-03-06 07:08:15', '2016-03-06 07:08:15', 0),
(12, 'nilton5', 'hoyos5', 1, 'Mexico', 'nilton5hoyos5@gmail.com', '315324589', 'universidad5', 'Estudiante2', '$2y$10$Y0r291TySm0SAZWhppy7IeDKlb3ZnUUGLUAs4vks.QeqIons7V1He', '', NULL, '2016-03-06 07:08:15', '2016-03-06 07:08:15', 0),
(13, 'nilton6', 'hoyos6', 1, 'Bogota', 'nilton6hoyos6@gmail.com', '315324589', 'universidad6', 'Docente2', '$2y$10$IEiP2egwPJyuJtrxg73AL.bY48elYQS3qY2miKA/qw2DOXJZHVJC2', '', NULL, '2016-03-06 07:08:15', '2016-03-06 07:08:15', 0),
(14, 'nilton7', 'hoyos7', 1, 'Mexico', 'nilton7hoyos7@gmail.com', '315324589', 'universidad7', 'Estudiante3', '$2y$10$jIl/fZeVo5rzQ7gBrHyuZ..YI2EG30V02.TJCaXkwOSN0EZqVLh6K', '', NULL, '2016-03-06 07:08:15', '2016-03-06 07:08:15', 0),
(15, 'nilton8', 'hoyos8', 1, 'Bogota', 'nilton8hoyos8@gmail.com', '315324589', 'universidad8', 'Docente3', '$2y$10$0HnhfihqZi4pXrspS.i7lOCCR0IIEzZBBimTRaj7/ZaLKLkcmxJDm', '', NULL, '2016-03-06 07:08:15', '2016-03-06 07:08:15', 0),
(16, 'nilton9', 'hoyos9', 1, 'Mexico', 'nilton9hoyos9@gmail.com', '315324589', 'universidad9', 'Estudiante3', '$2y$10$2/kBJXigcqG4PrHAwDIdo.BSvufPpREQKNEap9uBzzm0WyEecwEvS', '', NULL, '2016-03-06 07:08:15', '2016-03-06 07:08:15', 0),
(17, 'nilton10', 'hoyos10', 1, 'Bogota', 'nilton10hoyos10@gmail.com', '315324589', 'universidad10', 'Docente3', '$2y$10$z.T5pukE76g.9h/V2idz2ulg8XOR3NGoi6.BMapn7liRLj0R1z9zO', '', NULL, '2016-03-06 07:08:16', '2016-03-06 07:08:16', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `educacion`
--
ALTER TABLE `educacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `educacion_idusuario_index` (`idUsuario`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proyectos_idusuario_index` (`idUsuario`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `publicaciones_idusuario_index` (`idUsuario`);

--
-- Indices de la tabla `tiposeducacion`
--
ALTER TABLE `tiposeducacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipos_publicaciones`
--
ALTER TABLE `tipos_publicaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipos_usuario`
--
ALTER TABLE `tipos_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `educacion`
--
ALTER TABLE `educacion`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=200;
--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tiposeducacion`
--
ALTER TABLE `tiposeducacion`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `tipos_publicaciones`
--
ALTER TABLE `tipos_publicaciones`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `tipos_usuario`
--
ALTER TABLE `tipos_usuario`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `educacion`
--
ALTER TABLE `educacion`
  ADD CONSTRAINT `educacion_idusuario_foreign` FOREIGN KEY (`idUsuario`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD CONSTRAINT `proyectos_idusuario_foreign` FOREIGN KEY (`idUsuario`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD CONSTRAINT `publicaciones_idusuario_foreign` FOREIGN KEY (`idUsuario`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
