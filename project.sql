-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2019 at 03:39 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Password`) VALUES
('Admin1', '12345admin'),
('Admin2', '12345adminB'),
('Admin1', '12345admin'),
('Admin2', '12345adminB'),
('Admin1', '12345admin'),
('Admin2', '12345adminB'),
('Admin1', '12345admin'),
('Admin2', '12345adminB');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(10) NOT NULL,
  `AdminName` varchar(50) NOT NULL,
  `StaffID` varchar(12) NOT NULL,
  `image` varchar(100) NOT NULL,
  `Description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phoneNo` varchar(20) NOT NULL,
  `Cust_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `id` int(11) NOT NULL,
  `dest` varchar(255) NOT NULL,
  `distance` float NOT NULL,
  `price` float NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`id`, `dest`, `distance`, `price`, `points`) VALUES
(1, 'Gambang - Kuantan', 15, 25, 5),
(2, 'Kuantan - Gambang', 15, 25, 5),
(3, 'Gambang - Taman Tas', 17.7, 20.7, 3),
(4, 'Taman Tas - Gambang', 17.7, 20.7, 3),
(5, 'Gambang - Pekan', 55.8, 50.5, 7),
(6, 'Pekan - Gambang', 55.8, 50.5, 7);

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `driverID` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phoneNo` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `ic` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `services` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `driveraccount`
--

CREATE TABLE `driveraccount` (
  `accountID` int(11) NOT NULL,
  `driverID` int(10) NOT NULL,
  `username` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phoneNo` varchar(15) NOT NULL,
  `age` varchar(15) NOT NULL,
  `ic` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `Date` date NOT NULL,
  `services` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `accstatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feebackID` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `rating` varchar(10) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_rental`
--

CREATE TABLE `payment_rental` (
  `payment_rentalID` int(11) NOT NULL,
  `amount` double NOT NULL,
  `paymentDate` date NOT NULL,
  `driverID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `rentalbookingID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_taxi`
--

CREATE TABLE `payment_taxi` (
  `payment_taxiID` int(11) NOT NULL,
  `amount` double NOT NULL,
  `paymentDate` date NOT NULL,
  `driverID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `taxibookingID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rentalbooking`
--

CREATE TABLE `rentalbooking` (
  `rentalbookingID` int(11) NOT NULL,
  `bookingDate` date NOT NULL,
  `bookingTime` time NOT NULL,
  `hour` int(11) NOT NULL,
  `price` float NOT NULL,
  `points` int(11) NOT NULL,
  `driverName` varchar(255) NOT NULL,
  `carModel` varchar(255) NOT NULL,
  `carColour` varchar(255) NOT NULL,
  `platNo` varchar(255) NOT NULL,
  `driverID` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `reportID` int(11) NOT NULL,
  `driverID` int(11) NOT NULL,
  `vehicleID` int(11) NOT NULL,
  `serviceID` int(11) NOT NULL,
  `totalCharges` double NOT NULL,
  `totalEarningDaily` double NOT NULL,
  `totalEarningMonthly` double NOT NULL,
  `totalEarningYearly` double NOT NULL,
  `numDriverBookDaily` int(11) NOT NULL,
  `numVehicleBookDaily` int(11) NOT NULL,
  `numCustomerDaily` int(11) NOT NULL,
  `numServicesDaily` int(11) NOT NULL,
  `numDriverBookMonth` int(11) NOT NULL,
  `numVehicleBookMonth` int(11) NOT NULL,
  `numCustomerMonth` int(11) NOT NULL,
  `numServicesMonth` int(11) NOT NULL,
  `numDriverBookYear` int(11) NOT NULL,
  `numVehicleBookYear` int(11) NOT NULL,
  `numCustomerYear` int(11) NOT NULL,
  `numServicesYear` int(11) NOT NULL,
  `totalIncomeDaily` double NOT NULL,
  `totalIncomeMonth` double NOT NULL,
  `totalIncomeYear` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `taxibooking`
--

CREATE TABLE `taxibooking` (
  `taxibookingID` int(11) NOT NULL,
  `bookingDate` date NOT NULL,
  `bookingTime` time NOT NULL,
  `destination` varchar(255) NOT NULL,
  `distance` float NOT NULL,
  `price` float NOT NULL,
  `points` int(11) NOT NULL,
  `driverName` varchar(255) NOT NULL,
  `carModel` varchar(255) NOT NULL,
  `carColour` varchar(255) NOT NULL,
  `platNo` varchar(10) NOT NULL,
  `driverID` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vehicleID` int(11) NOT NULL,
  `driverID` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `model` varchar(20) NOT NULL,
  `colour` varchar(20) NOT NULL,
  `registrationNo` varchar(20) NOT NULL,
  `license` varchar(100) NOT NULL,
  `noofseater` int(11) NOT NULL,
  `record` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`driverID`);

--
-- Indexes for table `driveraccount`
--
ALTER TABLE `driveraccount`
  ADD PRIMARY KEY (`accountID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feebackID`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`reportID`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vehicleID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `driverID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `driveraccount`
--
ALTER TABLE `driveraccount`
  MODIFY `accountID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feebackID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `reportID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `vehicleID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
