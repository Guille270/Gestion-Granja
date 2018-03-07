-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27-02-2018 a les 13:33:19
-- Versió del servidor: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `granja`
--

-- --------------------------------------------------------

--
-- Estructura de la taula `animals`
--

CREATE TABLE IF NOT EXISTS `animals` (
  `codi` varchar(255) COLLATE utf8_bin NOT NULL,
  `dataNaixement` date NOT NULL,
  `raca` varchar(255) COLLATE utf8_bin NOT NULL,
  `motiuEntrada` varchar(255) COLLATE utf8_bin NOT NULL,
  `dataEntrada` date NOT NULL,
  `documentSanitari` varchar(255) COLLATE utf8_bin NOT NULL,
  `sexe` char(1) COLLATE utf8_bin NOT NULL,
  `procedencia` varchar(255) COLLATE utf8_bin NOT NULL,
  `dataBaixa` date DEFAULT NULL,
  `estat` varchar(50) COLLATE utf8_bin NOT NULL,
  `destinacio` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`codi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
