-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 12, 2018 at 05:15 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminstration`
--

CREATE TABLE IF NOT EXISTS `adminstration` (
  `AID` int(11) NOT NULL AUTO_INCREMENT,
  `ANAME` varchar(150) NOT NULL,
  `APASS` varchar(11) NOT NULL,
  PRIMARY KEY (`AID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `adminstration`
--

INSERT INTO `adminstration` (`AID`, `ANAME`, `APASS`) VALUES
(1, 'admin', 'priya1');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `CID` int(11) NOT NULL AUTO_INCREMENT,
  `CNAME` varchar(150) NOT NULL,
  PRIMARY KEY (`CID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CID`, `CNAME`) VALUES
(3, 'nature and park');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(150) NOT NULL,
  `COMMENT` text NOT NULL,
  `LOGS` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `comments`
--


-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE IF NOT EXISTS `package` (
  `PID` int(11) NOT NULL AUTO_INCREMENT,
  `MaxP` int(11) NOT NULL,
  `price` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL,
  `CNAME` varchar(100) NOT NULL,
  `TNAME` varchar(150) NOT NULL,
  PRIMARY KEY (`PID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`PID`, `MaxP`, `price`, `date`, `description`, `CNAME`, `TNAME`) VALUES
(1, 100, 'customize', '2018-11-15', 'hgfdsg', 'nature and park', 'parks');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(20) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PASSWORD` int(20) NOT NULL,
  `QUESTION` text NOT NULL,
  `ANSWER` varchar(50) NOT NULL,
  `ADDRESS` varchar(100) NOT NULL,
  `IMAGE` varchar(500) NOT NULL,
  `PHONE` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `NAME`, `USERNAME`, `EMAIL`, `PASSWORD`, `QUESTION`, `ANSWER`, `ADDRESS`, `IMAGE`, `PHONE`) VALUES
(1, 'priya', 'priya', 'pia.kumari@gmail.com', 1234, 'What is your Fav Pen?', 'freg', 'Behind laxmi medical\r\nMurarka Compound,Chowk\r\nPatna city', 'img/1.jpg', 2147483647),
(2, 'work', 'admin', 'pia.kumari950@gmail.vkuh', 0, 'What is your Pet?', 'du', '', '', 0),
(4, 'SOUMYA', 'SOUMYA', 'SOUMYA@YAHOO.COM', 1234, 'LUYTRED', 'KJHGFTDS', 'TTGH', '', 9876543);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `SID` int(11) NOT NULL AUTO_INCREMENT,
  `Sname` varchar(100) NOT NULL,
  `Sprice` int(11) NOT NULL,
  PRIMARY KEY (`SID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`SID`, `Sname`, `Sprice`) VALUES
(1, 'food', 0),
(2, 'staff', 0);

-- --------------------------------------------------------

--
-- Table structure for table `theme`
--

CREATE TABLE IF NOT EXISTS `theme` (
  `TID` int(11) NOT NULL AUTO_INCREMENT,
  `TNAME` varchar(150) NOT NULL,
  PRIMARY KEY (`TID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `theme`
--

INSERT INTO `theme` (`TID`, `TNAME`) VALUES
(5, 'parks');
