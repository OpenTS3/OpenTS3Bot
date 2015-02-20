-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 15. Dez 2014 um 17:02
-- Server Version: 5.5.40-cll
-- PHP-Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `hendrikh_ts`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `calle` varchar(20) NOT NULL,
  `calleopt` varchar(20) DEFAULT NULL,
  `postal` varchar(10) NOT NULL,
  `ciudad` varchar(20) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `ver_mail` tinyint(1) DEFAULT NULL,
  `session` varchar(32) DEFAULT NULL,
  `autologin` varchar(32) DEFAULT NULL,
  `ip` varchar(15) NOT NULL,
  `regdia` date DEFAULT NULL,
  PRIMARY KEY (`idusuario`),
  UNIQUE KEY `idusuario` (`idusuario`),
  UNIQUE KEY `usuario` (`usuario`),
  UNIQUE KEY `mail` (`mail`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Daten für Tabelle `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `usuario`, `password`, `nombre`, `calle`, `calleopt`, `postal`, `ciudad`, `mail`, `ver_mail`, `session`, `autologin`, `ip`, `regdia`) VALUES
(1, 'admin', 'password', 'Administrator', 'admin', '', '00000', 'admin', 'admin@admin.de', NULL, NULL, NULL, '', NULL),
(2, 'test', 'test', 'Testperson', 'test', '', '00000', 'test', 'test@test.de', NULL, NULL, NULL, '', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
