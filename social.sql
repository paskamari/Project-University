-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2013 at 03:07 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `social`
--

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE IF NOT EXISTS `college` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` bigint(10) unsigned NOT NULL,
  `firstname` varchar(25) COLLATE utf8_bin NOT NULL,
  `lastname` varchar(25) COLLATE utf8_bin NOT NULL,
  `nationalcode` bigint(10) unsigned NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `time` int(11) NOT NULL,
  `password` varchar(100) COLLATE utf8_bin NOT NULL,
  `repeatpass` varchar(25) COLLATE utf8_bin NOT NULL,
  `degree` varchar(25) COLLATE utf8_bin NOT NULL,
  `field` varchar(25) COLLATE utf8_bin NOT NULL,
  `univer` varchar(25) COLLATE utf8_bin NOT NULL,
  `trak` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=8 ;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`id`, `username`, `firstname`, `lastname`, `nationalcode`, `email`, `time`, `password`, `repeatpass`, `degree`, `field`, `univer`, `trak`) VALUES
(1, 8911004703, 'Ø­Ù…ÛŒØ¯', 'Ù¾Ø³ Ú©Ù…Ø±ÛŒ', 920222617, 'hpaskamari@gmail.com', 1378198026, 'f1c1592588411002af340cbaedd6fc33', '777', 'ÙƒØ§Ø±Ø¯Ø§Ù†ÙŠ', 'ÙƒØ§Ù…Ù¾ÙŠÙˆØªØ±', 'Ø§Ø³Ø±Ø§Ø±', 2),
(7, 8911003788, 'Ø³Ù…Ø§Ù†Ù‡', 'Ø®ÙˆØ´ Ø¹Ø§Ø·ÙÙ‡', 921044801, 'khoshatefeh@gmail.com', 1378200717, '550a141f12de6341fba65b0ad0433500', '444', 'ÙƒØ§Ø±Ø´Ù†Ø§Ø³ÙŠ', 'ÙƒØ§Ù…Ù¾ÙŠÙˆØªØ±', 'Ø§Ø³Ø±Ø§Ø±', 0);

-- --------------------------------------------------------

--
-- Table structure for table `totalpage`
--

CREATE TABLE IF NOT EXISTS `totalpage` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `allvisits` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `totalpage`
--

INSERT INTO `totalpage` (`id`, `allvisits`) VALUES
(1, 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
