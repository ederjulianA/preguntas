-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-05-2014 a las 03:51:15
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `preguntas`
--
CREATE DATABASE IF NOT EXISTS `preguntas` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE `preguntas`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE IF NOT EXISTS `rol` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(120) COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `rol`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '0000-00-00', '0000-00-00'),
(2, 'Profesor', '0000-00-00', '0000-00-00'),
(3, 'Estudiante', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `password_temp` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `code` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `active` int(11) NOT NULL,
  `tipo_user` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `password_temp`, `code`, `active`, `tipo_user`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin@admin.com', '$2y$10$sqK0Mj3nimaU2MfRGnduSOF3eK643iFLg.dRd8ePw8mIcAyaPbP1m', '', '', 1, 1, 'i4QG4QmcwgxXQTWMyXy7jVuiLFw958NTep5ttsZo7JDZ0F9rTrSN9zMnbeMN', '2014-05-18', '2014-05-18'),
(3, 'estudiante 1', 'estudiante1@gmail.com', '$2y$10$ZItwQRQtnpmPNNYoi5Z4BOJODK6Py7C98l.8/ybbwWoy6hVOBghVO', '', '', 1, 2, '', '2014-05-18', '2014-05-18'),
(4, 'estudiante2', 'estudiante2@gmail.com', '$2y$10$ehe1i6iB8lhEl.UNrtfdn.5YgspxJVafm8BEaKgcW7VZtDZ9cpIBm', '', '', 1, 3, '', '2014-05-18', '2014-05-18'),
(5, 'profesor 2', 'profesor2@gmail.com', '$2y$10$eOh.piBtkaMVdlCdjBPsLeixuBLmH1MxRjE59Vl7hdmFzTo6Cfsyq', '', '', 1, 2, '', '2014-05-18', '2014-05-18');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
