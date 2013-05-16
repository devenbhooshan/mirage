-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 07, 2013 at 12:45 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=114 ;

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
(63, 3, 1, 'hi', '1367890613'),
(64, 3, 1, 'hi', '1367911344'),
(65, 1, 3, 'hi', '1367911351'),
(66, 3, 1, 'kaisa hai', '1367911358'),
(67, 1, 3, 'mast hun', '1367911364'),
(68, 3, 1, 'tu bata', '1367911370'),
(69, 1, 3, 'main bhi mast', '1367911384'),
(70, 3, 1, 'sab badiya chal raha hai na', '1367911401'),
(71, 1, 3, 'haan bhai', '1367911407'),
(72, 3, 1, 'kya hua thoda dukhi sa lag raha hai', '1367911428'),
(73, 1, 3, 'nahin aisi baat nahin hai', '1367911440'),
(74, 3, 1, 'to kaisi baaat hai', '1367911450'),
(75, 1, 3, 'abe tu senti na kar', '1367911467'),
(76, 3, 1, 'acha chal theek hai', '1367911476'),
(77, 1, 3, 'apna khayal rakhna ', '1367911488'),
(78, 3, 1, 'haan haan theek hai', '1367911496'),
(79, 1, 3, 'bye', '1367911506'),
(80, 3, 1, 'bye', '1367911510'),
(81, 1, 3, 'tc', '1367911514'),
(82, 3, 1, 'tc', '1367911518'),
(83, 3, 1, 'hello', '1367921314'),
(84, 3, 1, 'hellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohellovv', '1367921322'),
(85, 3, 1, 'hi', '1367921352'),
(86, 1, 3, 'hi', '1367921379'),
(87, 3, 1, 'hi', '1367924176'),
(88, 3, 1, 'hi', '1367924187'),
(89, 3, 1, 'hi', '1367924207'),
(90, 3, 1, 'dddd', '1367924233'),
(91, 3, 1, 'dddd', '1367924235'),
(92, 3, 1, 'dddd', '1367924246'),
(93, 3, 1, 'dddd', '1367924247'),
(94, 3, 1, 'dddd', '1367924261'),
(95, 3, 1, 'dddd', '1367924264'),
(96, 3, 1, 'dddd', '1367924280'),
(97, 3, 1, 'dddd', '1367924284'),
(98, 1, 4, 'hi', '1367926555'),
(99, 4, 1, 'hi', '1367926562'),
(100, 4, 1, 'hi', '1367926610'),
(101, 1, 0, 'jj', '1367927556'),
(102, 1, 0, 'jj', '1367927558'),
(103, 1, 0, 'jj', '1367927558'),
(104, 1, 3, 'hi', '1367927568'),
(105, 3, 1, 'hi', '1367928406'),
(106, 3, 1, 'hi', '1367930179'),
(107, 1, 3, 'kaisa hai', '1367930185'),
(108, 3, 1, 'badiya hun', '1367930191'),
(109, 1, 3, 'tu kaisa hai', '1367930197'),
(110, 3, 1, 'bataya to badiya hun', '1367930207'),
(111, 1, 3, 'k', '1367930211'),
(112, 3, 1, 'k k kya kar raha hai', '1367930223'),
(113, 1, 3, 'hur', '1367930229');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` text NOT NULL,
  `id_no` int(11) NOT NULL,
  `login_time` text NOT NULL,
  `status` int(11) NOT NULL,
  `logout_time` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `ip`, `id_no`, `login_time`, `status`, `logout_time`) VALUES
(3, '127.0.0.1', 1, '1367913945', 0, '1367914067'),
(5, '127.0.0.1', 3, '1367914125', 0, '1367914134'),
(6, '127.0.0.1', 3, '1367914336', 0, '1367914353'),
(7, '127.0.0.1', 1, '1367918016', 0, '1367918285'),
(8, '127.0.0.1', 1, '1367918320', 0, '1367921418'),
(9, '127.0.0.1', 3, '1367921302', 0, '1367921422'),
(11, '127.0.0.1', 3, '1367923032', 0, '1367923117'),
(12, '127.0.0.1', 3, '1367923192', 0, '1367924685'),
(13, '127.0.0.1', 1, '1367923216', 0, '1367924306'),
(14, '127.0.0.1', 1, '1367924392', 0, '1367924705'),
(15, '127.0.0.1', 3, '1367924705', 0, '1367925019'),
(16, '127.0.0.1', 3, '1367925074', 0, '1367925389'),
(17, '127.0.0.1', 1, '1367925088', 0, '1367925389'),
(18, '127.0.0.1', 2, '1367925114', 0, '1367925486'),
(19, '127.0.0.1', 3, '1367926130', 0, '1367926489'),
(20, '127.0.0.1', 1, '1367926158', 0, '1367926489'),
(21, '127.0.0.1', 2, '1367926174', 0, '1367926489'),
(22, '127.0.0.1', 4, '1367926511', 0, '1367926649'),
(23, '127.0.0.1', 1, '1367926547', 0, '1367926662'),
(24, '127.0.0.1', 1, '1367927185', 0, '1367927521'),
(25, '127.0.0.1', 1, '1367927552', 0, '1367927921'),
(26, '127.0.0.1', 1, '1367927937', 0, '1367928238'),
(27, '127.0.0.1', 1, '1367928387', 0, '1367928702'),
(28, '127.0.0.1', 3, '1367928400', 0, '1367928747'),
(29, '127.0.0.1', 1, '1367929087', 0, '1367929423'),
(30, '127.0.0.1', 1, '1367929433', 0, '1367929811'),
(31, '127.0.0.1', 3, '1367930079', 0, '1367930102'),
(32, '127.0.0.1', 1, '1367930123', 0, '1367930134'),
(33, '127.0.0.1', 1, '1367930131', 0, '1367930134'),
(34, '127.0.0.1', 3, '1367930142', 0, '1367930297'),
(35, '127.0.0.1', 1, '1367930149', 0, '1367930289');

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
  `confirmation` int(11) NOT NULL,
  PRIMARY KEY (`id_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_no`, `first_name`, `last_name`, `email`, `password`, `confirmation`) VALUES
(1, 'Deven', 'Bhooshan', 'devenbhooshan@gmail.com', 'year-2011', 0),
(2, 'Guru', 'Pratap', 'gurupratap@gmail.com', 'year-2011', 0),
(3, 'Hari', 'Om', 'hariom@gmail.com', 'year-2011', 0),
(4, 'Himanshu', 'Shukla', 'him@gmail.com', 'year-2011', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
