-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2017 at 05:46 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dnzauto`
--

-- --------------------------------------------------------

--
-- Table structure for table `autosales`
--

CREATE TABLE `autosales` (
  `companyName` varchar(15) NOT NULL,
  `phoneNumber` varchar(10) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `autosales`
--

INSERT INTO `autosales` (`companyName`, `phoneNumber`, `Address`, `email`) VALUES
('DNZ AUTOSALS', '7733121847', '777 Dealer Drive, Chicago, Ill', 'dnzauto@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autosales`
--
ALTER TABLE `autosales`
  ADD PRIMARY KEY (`companyName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
