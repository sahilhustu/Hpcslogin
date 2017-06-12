-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2017 at 01:34 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `validation`
--

-- --------------------------------------------------------

--
-- Table structure for table `checking`
--

CREATE TABLE `checking` (
  `Username` varchar(12) DEFAULT NULL,
  `Password` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This table stores the valid Usernames and Passwords ';

--
-- Dumping data for table `checking`
--

INSERT INTO `checking` (`Username`, `Password`) VALUES
('root@localho', '*E148B9A3B44'),
(NULL, NULL),
('root@localho', '*3F65A8198FA'),
('sahilhustu', 'sahilhustu'),
('hpcs', 'hpcs');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('sahilhustu', 'sahilhustu'),
('hpcs', 'hpcs');

-- --------------------------------------------------------

--
-- Table structure for table `newdb`
--

CREATE TABLE `newdb` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `phoneno` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newdb`
--

INSERT INTO `newdb` (`username`, `password`, `emailid`, `phoneno`) VALUES
('sahilhustu', 'sahilhustu', 'sahilhustu007@gmail.com', 8920787393),
('hpcs', 'hpcs', 'hpcs@gmail.com', 8888888888),
('gagansharma', 'gagansharma', 'gagansharma@gmail.com', 7838008989),
('', '', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
