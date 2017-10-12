-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 09, 2017 at 05:39 AM
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
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `carNo` int(5) NOT NULL,
  `brand` varchar(25) NOT NULL,
  `carName` varchar(25) NOT NULL,
  `carModel` varchar(25) NOT NULL,
  `mileage` varchar(25) NOT NULL,
  `type` varchar(25) NOT NULL,
  `year` varchar(4) NOT NULL,
  `mpg` varchar(7) NOT NULL,
  `engine` varchar(10) NOT NULL,
  `color` varchar(15) NOT NULL,
  `Price` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`carNo`, `brand`, `carName`, `carModel`, `mileage`, `type`, `year`, `mpg`, `engine`, `color`, `Price`) VALUES
(1, 'Acura', 'TL', 'Sedan', '50000', 'Used', '2010', '20', 'Gasoline', 'Black', '18000.00'),
(2, 'Audi', 'A6', 'Sedan', '23456', 'Used', '2007', '32', 'Gasoline', 'Silver', '11995.00'),
(3, 'BMW', '550i', 'Wagon', '45500', 'Used', '2013', '17', 'Gasoline', 'Blue', '34995.00'),
(4, 'Buick', 'Encore', 'SUV', '00105', 'New', '2017', '24', 'Gasoline', 'Red', '21995.00'),
(5, 'Cadillac', 'CTS', 'Sedan', '17000', 'Used', '2016', '14', 'Gasoline', 'White', '37995.00'),
(6, 'Chervolet', 'Camaro', 'Coupe', '57000', 'Used', '2015', '18', 'Diesel', 'Black', '16995.00'),
(7, 'Chrysler', 'Crossfire', 'Coupe', '72443', 'Used', '2009', '17', 'Gasoline', 'Silver', '8995.00'),
(8, 'Dodge', 'Caravan', 'Van', '72434', 'Used', '2009', '16', 'Gasoline', 'Green', '4995.00'),
(9, 'Ford', 'Mustang', 'Coupe', '00023', 'New', '2017', '16', 'Gasoline', 'Red', '27995.00'),
(10, 'GMC', 'Arcadia', 'Truck', '44067', 'Used', '2014', '16', 'Ethanol', 'White', '15995.00'),
(11, 'Honda', 'Civic', 'Sedan', '23443', 'Used', '2013', '26', 'Gasoline', 'Blue', '11995.00'),
(12, 'Hyundai', 'Sonata', 'Sedan', '34577', 'Used', '2015', '40', 'Hybrid', 'Grey', '17995.00'),
(13, 'Infiniti', 'Q37S', 'Coupe', '11000', 'Used', '2016', '18', 'Gasoline', 'White', '29995.00'),
(14, 'Jaguar', 'F Type', 'Convertible', '3500', 'Used', '2017', '14', 'Gasoline', 'Specialty', '76995.00'),
(15, 'Jeep', 'Wrangler', 'Truck', '110000', 'Used', '1999', '13', 'Gasoline', 'Green', '7995.00'),
(16, 'Kia', 'Optima', 'Sedan', '50000', 'Used', '2010', '20', 'Gasoline', 'Black', '17995.00'),
(17, 'Land Rover', 'Range Rover', 'SUV', '33000', 'Used', '2016', '12', 'Gasoline', 'Two-tone', '77995.00'),
(18, 'Lexus', 'IS F', 'Sedan', '57340', 'Used', '2014', '12', 'Gasoline', 'Specialty', '32995.00'),
(19, 'Lincoln', 'Continential', 'Sedan', '00256', 'New', '2018', '24', 'Gasoline', 'Gold', '46995.00'),
(20, 'Maserati', 'Quattroporte', 'Sedan', '93000', 'Used', '2010', '10', 'Gasoline', 'Metallic', '19995.00'),
(21, 'Mazda', 'RX 8', 'Coupe', '82000', 'Used', '2011', '13', 'Gasoline', 'Orange', '7995.00'),
(22, 'Mercedes-Benz', 'E350', 'Sedan', '13600', 'Used', '2014', '17', 'Gasoline', 'Gold', '24995.00'),
(23, 'MINI', 'Cooper S', 'Hatchback', '91000', 'Used', '2010', '16', 'Gasoline', 'Two-Tone', '6995.00'),
(24, 'Mitubishi', 'Eclipse', 'Sedan', '67899', 'Used', '2012', '17', 'Gasoline', 'Silver', '11995.00'),
(25, 'Nissan', 'Altima', 'Sedan', '65400', 'Used', '2013', '35', 'Hybrid', 'Black', '18995.00'),
(26, 'Pontiac', 'G8', 'Sedan', '75400', 'Used', '2010', '14', 'Gasoline', 'Grey', '15995.00'),
(27, 'Porsche', 'Boxer S', 'Convertible', '50000', 'Used', '2010', '13', 'Gasoline', 'Red', '16995.00'),
(28, 'Saab', '95 Turbo', 'Sedan', '67066', 'Used', '2011', '19', 'Gasoline', 'Green', '13995.00'),
(29, 'Saturn', 'Skyy', 'Convertible', '53500', 'Used', '2010', '15', 'Gasoline', 'Yellow', '12995.00'),
(30, 'Scion', 'TC', 'Coupe', '77000', 'Used', '2014', '24', 'Gasoline', 'Grey', '14995.00'),
(31, 'Subaru', 'WRX', 'Sedan', '34550', 'Used', '2012', '18', 'Gasoline', 'Metallic', '15995.00'),
(32, 'Toyota', 'Camry', 'Sedan', '96000', 'Used', '2010', '30', 'Hybrid', 'Gold', '14995.00'),
(33, 'Volkswagon', 'Jetta', 'Sedan', '81000', 'Used', '2009', '23', 'Gasoline', 'Beige', '9995.00'),
(34, 'Volvo', 'XC90', 'SUV', '15000', 'Used', '2016', '21', 'Gasoline', 'Silver', '23995.00');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerId` int(11) NOT NULL,
  `fName` text NOT NULL,
  `lName` text NOT NULL,
  `dateOfBirth` date NOT NULL,
  `phoneNumber` varchar(10) NOT NULL,
  `street` varchar(20) NOT NULL,
  `city` varchar(15) NOT NULL,
  `state` varchar(20) NOT NULL,
  `zipCode` varchar(7) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerId`, `fName`, `lName`, `dateOfBirth`, `phoneNumber`, `street`, `city`, `state`, `zipCode`, `email`, `username`, `password`) VALUES
(1000, 'John', 'Doe', '1994-07-08', '7732021754', '24 First St', 'Chicago', 'Illinois', '60625', 'j.doe@gmail.com', '', ''),
(1001, 'Bob', 'Mariano', '1995-03-12', '8475681273', '6577 Keeler', 'Niles', 'Illinois', '60714', 'b.mariano@yahoo.com', '', ''),
(1002, 'Mary', 'Lamb', '1988-12-23', '3124456788', '7899 Fuller Rd', 'Chicago', 'Illinois', '60610', 'm.lamb@gmail.com', '', ''),
(1003, 'Jennifer', 'Lopez', '1995-11-25', '2243058214', '25 Lake St', 'Glenview', 'Illinois', '60026', 'j.lopez@gmail.com', '', ''),
(1004, 'Bobby', 'Ashland', '1988-10-14', '8729098884', '3400 Cumberland', 'Chicago', 'Illinois', '60610', 'b.ashland@hotmail.co', '', ''),
(1005, 'Jake', 'Arieta', '1975-09-14', '7733058525', '7855 Winston', 'Chicago', 'Illinois', '60625', 'j.arrieta@yahoo.com', '', ''),
(1006, 'Chris', 'Bryant', '1978-10-19', '8473346673', '654 Ashton', 'Niles', 'Illinois', '60714', 'c.bryant@yahoo.com', '', ''),
(1007, 'Sameer', 'Siddiqui', '1958-01-14', '3128892112', '250 Wabash', 'Chicago', 'Illinois', '60610', 's.siddiqui@gmail.com', '', ''),
(1008, 'David', 'Smith', '1976-02-15', '2247773455', '2342 Wayward', 'Glenview', 'Illinois', '60026', 'd.smith@hotmail.com', '', ''),
(1009, 'Arthur', 'Reid', '1991-05-20', '8729096644', '6544 Fairview', 'Chicago', 'Illinois', '60610', 'a.reid@gmail.com', '', ''),
(1010, 'Tony', 'Montana', '1983-10-11', '7732122988', '3440 Main', 'Chicago', 'Illinois', '60625', 't.montana@gmail.com', '', ''),
(1011, 'Jill', 'Hill', '1990-01-01', '8471128854', '25 Lane St', 'Niles', 'Illinois', '60714', 'j.hill@gmail.comm', '', ''),
(1012, 'Alice', 'Wonderland', '1996-05-13', '3128723455', '900 Waveland', 'Chicago', 'Illinois', '60610', 'a.wonderland@yahoo.c', '', ''),
(1013, 'Freddy', 'Krueger', '1990-10-30', '2249965549', '444 Slash St', 'Glenview', 'Illinois', '60026', 'f.krueger@gmail.com', '', ''),
(1014, 'Anthony', 'Rizzo', '1970-05-06', '8728853455', '550 Turnpike', 'Chicago', 'Illinois', '60610', 'a.rizzoa@gmail.com', '', '');

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
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`carNo`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerId`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employeeId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `carNo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1035;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
