-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 09, 2014 at 03:15 PM
-- Server version: 5.6.14-log
-- PHP Version: 5.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `0912962339_lan`
--
CREATE DATABASE IF NOT EXISTS `0912962339_lan` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `0912962339_lan`;

-- --------------------------------------------------------

--
-- Table structure for table `guardian`
--

CREATE TABLE IF NOT EXISTS `guardian` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `First_Name` varchar(42) NOT NULL,
  `Last_Name` varchar(42) NOT NULL,
  `Phonenumber` varchar(7) NOT NULL,
  `Email` varchar(42) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pizza_crust`
--

CREATE TABLE IF NOT EXISTS `pizza_crust` (
  `ID` tinyint(4) NOT NULL,
  `Crust_Type` varchar(42) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pizza_orders`
--

CREATE TABLE IF NOT EXISTS `pizza_orders` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(42) DEFAULT NULL,
  `Topping1` varchar(42) NOT NULL,
  `Topping2` varchar(42) DEFAULT NULL,
  `ID_Topping` int(11) NOT NULL,
  `Crust` tinyint(4) NOT NULL,
  `ID_User` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_User` (`ID_User`),
  KEY `ID_Topping` (`ID_Topping`),
  KEY `Crust` (`Crust`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pizza_topping`
--

CREATE TABLE IF NOT EXISTS `pizza_topping` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Topping_Name` varchar(42) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `First_Name` varchar(42) NOT NULL,
  `Last_Name` varchar(42) NOT NULL,
  `Username` varchar(42) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Socialsecurity` varchar(10) NOT NULL,
  `Phonenumber` varchar(7) NOT NULL,
  `Email` varchar(42) NOT NULL,
  `ID_guardian` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_guardian` (`ID_guardian`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pizza_orders`
--
ALTER TABLE `pizza_orders`
  ADD CONSTRAINT `pizza_orders_ibfk_3` FOREIGN KEY (`Crust`) REFERENCES `pizza_crust` (`ID`),
  ADD CONSTRAINT `pizza_orders_ibfk_1` FOREIGN KEY (`ID_User`) REFERENCES `users` (`ID`),
  ADD CONSTRAINT `pizza_orders_ibfk_2` FOREIGN KEY (`ID_Topping`) REFERENCES `pizza_topping` (`ID`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`ID_guardian`) REFERENCES `guardian` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
