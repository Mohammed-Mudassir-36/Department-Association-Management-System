-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 07, 2022 at 11:58 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cse_department`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

DROP TABLE IF EXISTS `admintable`;
CREATE TABLE IF NOT EXISTS `admintable` (
  `name` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`name`, `emailid`, `password`) VALUES
('aaa', 'aaa', 'aaa'),
('mudassir', '@gmail', '123');

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

DROP TABLE IF EXISTS `chapter`;
CREATE TABLE IF NOT EXISTS `chapter` (
  `C_ID` int(15) NOT NULL AUTO_INCREMENT,
  `C_NAME` varchar(225) NOT NULL,
  `YEAR` varchar(255) NOT NULL,
  `ACHIEVEMENTS` varchar(255) NOT NULL,
  `OPERATIONS` varchar(255) NOT NULL,
  PRIMARY KEY (`C_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chapter`
--

INSERT INTO `chapter` (`C_ID`, `C_NAME`, `YEAR`, `ACHIEVEMENTS`, `OPERATIONS`) VALUES
(1, 'IEEE', '2012', 'YES', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `P_ID` int(15) NOT NULL AUTO_INCREMENT,
  `P_NAME` varchar(225) NOT NULL,
  `TEAM` varchar(255) NOT NULL,
  `YEAR` varchar(255) NOT NULL,
  `APPLICATION` varchar(255) NOT NULL,
  `GUIDE` varchar(255) NOT NULL,
  PRIMARY KEY (`P_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`P_ID`, `P_NAME`, `TEAM`, `YEAR`, `APPLICATION`, `GUIDE`) VALUES
(1, 'DBMS', '1.4mh19cs125', '2012', 'MULTI PARADIGM', 'HEMANTH SIR'),
(3, 'dbms', '1.4mh19c', '2012', 'OHK', 'h');

-- --------------------------------------------------------

--
-- Table structure for table `stream`
--

DROP TABLE IF EXISTS `stream`;
CREATE TABLE IF NOT EXISTS `stream` (
  `S_ID` int(15) NOT NULL AUTO_INCREMENT,
  `S_NAME` varchar(255) NOT NULL,
  `TIME` time NOT NULL,
  `DATE` date NOT NULL,
  `IMPORTANCE` varchar(255) NOT NULL,
  `PREREQ` varchar(255) NOT NULL,
  PRIMARY KEY (`S_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stream`
--

INSERT INTO `stream` (`S_ID`, `S_NAME`, `TIME`, `DATE`, `IMPORTANCE`, `PREREQ`) VALUES
(1, 'PYTHON', '14:15:00', '2022-01-15', 'FRONT END', 'ppp');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

DROP TABLE IF EXISTS `usertable`;
CREATE TABLE IF NOT EXISTS `usertable` (
  `name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`name`, `password`) VALUES
('mitm', 'mitm2023'),
('mudassir', '786'),
('shafiya', '123');

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

DROP TABLE IF EXISTS `workshop`;
CREATE TABLE IF NOT EXISTS `workshop` (
  `WS_ID` int(15) NOT NULL AUTO_INCREMENT,
  `WS_NAME` varchar(255) NOT NULL,
  `PROG_LANG` varchar(255) NOT NULL,
  `APPLICATION` varchar(250) NOT NULL,
  `DATE` date NOT NULL,
  `AVAILABLE` varchar(250) NOT NULL,
  `PREREQ` varchar(250) NOT NULL,
  PRIMARY KEY (`WS_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`WS_ID`, `WS_NAME`, `PROG_LANG`, `APPLICATION`, `DATE`, `AVAILABLE`, `PREREQ`) VALUES
(1, 'BASIC OF PYTHON', 'PYTHON ', 'MULTI PARADIGM', '2022-01-30', 'STUDENT', '---NULL---'),
(3, 'DBMS', 'mysql', 'Data base', '2022-01-21', 'STUDENT', '---NULL---');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
