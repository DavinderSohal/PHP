-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 31, 2017 at 11:27 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `air`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=129 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `username`, `password`, `confirm_password`, `mobile`, `email`, `date_of_birth`, `address`, `city`, `state`, `image`) VALUES
(1, 'davinder', 'davinder', '123', '123', '1', 'd@gmail.com', '2017-07-19', 'patiala', 'patiala', 'punjab', 'Penguins.jpg'),
(2, 'vad', 'cad', '11', '11', '111', '111@gmail.com', '222222-02-22', 'qq', 'qq', 'qq', 'Tulips.jpg'),
(3, 'n', 'n', 'n', 'n', 'n', 'n@h', '0004-04-04', 'k', 'k', 'k', 'Chrysanthemum.jpg'),
(4, 'l', 'l', 'l', 'l', 'l', 'l@kk', '2017-07-30', 'k', 'k', 'k', 'Jellyfish.jpg'),
(5, ',', 'm', 'm', 'm', 'm', 'm@m', '0007-07-07', 'j', 'k', 'kj', 'Penguins.jpg'),
(6, ',', 'k', 'k', 'k', 'k', 'k@k', '0004-04-04', 'k', 'j', 'j', 'Penguins.jpg'),
(7, 'p', 'p', 'p', 'p', 'p', 'p@g', '0004-04-04', '5', '5', '5', ''),
(8, 'i', 'h', 'v', 'd', 's', 'h@f', '2017-07-30', 'chxcbd', 'sj', 'hsb', 'Lighthouse.jpg'),
(9, 'v', 'v', 'v', 'v', 'v', 'v@v', '0005-05-05', 'g', 'g', 'g', 'Hydrangeas.jpg'),
(127, '1', '1', '1', '1', '1', '111@gmail.com', '0004-04-04', '1', '1', '1', 'Tulips.jpg'),
(128, 'kkkkkk', 'kkkkk', 'kkk', 'kkk', 'k', 'k@kk', '0004-04-04', 'jjjj', 'kkkk', 'kkkk', 'Tulips.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
