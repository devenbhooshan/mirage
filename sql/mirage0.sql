-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 07, 2013 at 07:16 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mirage`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `m_by` int(11) NOT NULL,
  `m_to` int(11) NOT NULL,
  `message` text NOT NULL,
  `time` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `m_by`, `m_to`, `message`, `time`) VALUES
(27, 1, 3, 'hi', '1367890015'),
(28, 3, 1, 'DEVEN BHOOSHAN', '1367890249'),
(29, 3, 1, 'hi', '1367890581'),
(30, 3, 1, 'hi', '1367890585'),
(31, 3, 1, 'hi', '1367890585'),
(32, 3, 1, 'hi', '1367890585'),
(33, 3, 1, 'hi', '1367890586'),
(34, 3, 1, 'hi', '1367890586'),
(35, 3, 1, 'hi', '1367890586'),
(36, 3, 1, 'hi', '1367890586'),
(37, 3, 1, 'hi', '1367890586'),
(38, 3, 1, 'hi', '1367890587'),
(39, 3, 1, 'hi', '1367890587'),
(40, 3, 1, 'hi', '1367890587'),
(41, 3, 1, 'hi', '1367890587'),
(42, 3, 1, 'hi', '1367890587'),
(43, 3, 1, 'hi', '1367890588'),
(44, 3, 1, 'hi', '1367890588'),
(45, 3, 1, 'hi', '1367890588'),
(46, 3, 1, 'hi', '1367890588'),
(47, 3, 1, 'hi', '1367890588'),
(48, 3, 1, 'hi', '1367890589'),
(49, 3, 1, 'hi', '1367890589'),
(50, 3, 1, 'hi', '1367890589'),
(51, 3, 1, 'hi', '1367890589'),
(52, 3, 1, 'hi', '1367890590'),
(53, 3, 1, 'hi', '1367890590'),
(54, 3, 1, 'hi', '1367890590'),
(55, 3, 1, 'hi', '1367890590'),
(56, 3, 1, 'hi', '1367890591'),
(57, 3, 1, 'hi', '1367890592'),
(58, 3, 1, 'hi', '1367890612'),
(59, 3, 1, 'hi', '1367890612'),
(60, 3, 1, 'hi', '1367890613'),
(61, 3, 1, 'hi', '1367890613'),
(62, 3, 1, 'hi', '1367890613'),
(63, 3, 1, 'hi', '1367890613');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_no` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `status` int(11) NOT NULL,
  `confirmation` int(11) NOT NULL,
  PRIMARY KEY (`id_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_no`, `first_name`, `last_name`, `email`, `password`, `status`, `confirmation`) VALUES
(1, 'Deven', 'Bhooshan', 'devenbhooshan@gmail.com', 'year-2011', 0, 0),
(2, 'Guru', 'Pratap', 'gurupratap@gmail.com', 'year-2011', 0, 0),
(3, 'Hari', 'Om', 'hariom@gmail.com', 'year-2011', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
