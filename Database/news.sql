-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 16, 2017 at 03:40 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `newssite`
--

CREATE TABLE IF NOT EXISTS `newssite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `newssite`
--

INSERT INTO `newssite` (`id`, `title`, `category`, `detail`, `image`, `date`) VALUES
(1, 'hello', 'hh', 'jaj ans dncj ancj cjnc cnw cn.\r\nvjaj ans dncj ancj cjnc cnw cn.\r\njaj ans dncj ancj cjnc cnw cn.\r\njaj ans dncj ancj cjnc cnw cn.\r\njaj ans dncj ancj cjnc cnw cn.\r\njaj ans dncj ancj cjnc cnw cn.\r\njaj ans dncj ancj cjnc cnw cn.\r\njaj ans dncj ancj cjnc cnw cn.', 'Hydrangeas.jpg', '2017-07-31');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
