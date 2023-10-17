-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 23, 2023 at 04:02 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcontact`
--

CREATE TABLE IF NOT EXISTS `addcontact` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `Name` char(20) NOT NULL,
  `Phnumber` varchar(20) NOT NULL,
  `Email` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `addcontact`
--

INSERT INTO `addcontact` (`id`, `Name`, `Phnumber`, `Email`) VALUES
(7, 'adhithya', '94467434334', 'exam@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `chatm`
--

CREATE TABLE IF NOT EXISTS `chatm` (
  `chat_id` int(10) DEFAULT NULL,
  `uid` int(20) NOT NULL,
  `did` int(40) NOT NULL,
  `chat_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatm`
--

INSERT INTO `chatm` (`chat_id`, `uid`, `did`, `chat_date`) VALUES
(NULL, 2, 1, '2023-09-21');

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE IF NOT EXISTS `chats` (
  `chat_id` int(10) NOT NULL,
  `msg` varchar(6000) NOT NULL,
  `typ` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`chat_id`, `msg`, `typ`) VALUES
(0, ' wwwwww', '2'),
(0, ' kkkk', '2'),
(0, ' ', '2'),
(0, ' kkkkkkkk', '2');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `uid` int(10) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `upass` varchar(20) NOT NULL,
  `utype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uid`, `uname`, `upass`, `utype`) VALUES
(1, 'alekshmi72@gmail.com', '123', 'user'),
(2, 'alekshmi72@gmail.com', '123', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Nickname` varchar(20) NOT NULL,
  `Phonenumber` varchar(20) NOT NULL,
  `Account_type` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`uid`, `Name`, `Nickname`, `Phonenumber`, `Account_type`, `email`) VALUES
(1, 'anju', 'lekshmi', '567893555', 'business', 'alekshmi72@gmail.com'),
(2, 'anju', 'lekshmi', '567893555', 'business', 'alekshmi72@gmail.com');
