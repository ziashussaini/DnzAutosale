-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 09, 2017 at 05:28 AM
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
-- Database: `DNZ`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employeeId` int(11) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phoneNumber` varchar(11) NOT NULL,
  `position` varchar(25) NOT NULL,
  `address` varchar(30) NOT NULL,
  `city` varchar(15) NOT NULL,
  `state` varchar(20) NOT NULL,
  `zipcode` int(11) NOT NULL,
  `salary` decimal(7,2) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employeeId`, `firstName`, `lastName`, `email`, `phoneNumber`, `position`, `address`, `city`, `state`, `zipcode`, `salary`, `password`) VALUES
(12314, 'Steph', 'Curry', 's.curry@dnzautosales.com', '7732020022', ' Loan Officer', '4567 Ferris Rd', 'Niles', 'Illinois', 60714, '72000.00', 'neiu1'),
(23421, 'Anthony', 'Myers', 'a.myers@dnzautosales.com', '3126657644', 'Sales Rep', '768 Tree Manor', 'Glenview', 'Illinois', 60025, '50000.00', ''),
(23525, 'Dwayne', 'Wade', 'd.wade@dnzautosales.com', '3125553333', 'Vehicle Buyer', '7654 Waukegan Rd', 'Wheeling', 'Illinois', 60004, '6500.00', ''),
(45658, 'David', 'Stern', 'd.stern@dnzautosales.com', '7733132444', ' Sales Rep', '9001 Spaulding Ave St', 'Skokie', 'Illinois', 60076, '50000.00', ''),
(54367, 'Derrick', 'Rose', 'd.rose@dnzautosales.com', '8475681234', ' Manager', '4567 Devon Ave', 'Chicago', 'Illinois', 60625, '75000.00', ''),
(54676, 'Kevin', 'Durant', 'k.durant@dnzautosales.com', '9726663333', ' Supervisor', '6756 Kimbal St', 'Lincolnwood', 'Illinois', 60712, '68000.00', ''),
(65767, 'Michael', 'Angelo', 'm.angelo@dnzautosales.com', '2247674562', ' Sales Rep', '765 Golf Rd', 'Naperville', 'Illinois', 60440, '58000.00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employeeId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
