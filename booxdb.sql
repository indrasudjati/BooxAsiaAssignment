-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2016 at 09:51 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `booxdb`
--
CREATE DATABASE `booxdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `booxdb`;

-- --------------------------------------------------------

--
-- Table structure for table `tabeladmin`
--

CREATE TABLE IF NOT EXISTS `tabeladmin` (
  `admin_id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tabeladmin`
--

INSERT INTO `tabeladmin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `name`, `email`) VALUES
(1, 'Indra', 'abc123', 'Indra Sudjati', 'indrasudjati@yahoo.co.id'),
(2, 'Victor', 'abc456', 'Victor Sudjati', '9squareable@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `userscomplaint`
--

CREATE TABLE IF NOT EXISTS `userscomplaint` (
  `complaint_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `complaint` varchar(100) NOT NULL,
  `status` enum('UNCHECKED','CHECKED') NOT NULL DEFAULT 'UNCHECKED',
  PRIMARY KEY (`complaint_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `userscomplaint`
--

INSERT INTO `userscomplaint` (`complaint_id`, `username`, `complaint`, `status`) VALUES
(2, 'Indra', 'Test', 'CHECKED'),
(3, 'Victor', 'Testing 2', 'CHECKED');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
