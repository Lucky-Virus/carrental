-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2020 at 04:05 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrental`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `carid` int(10) NOT NULL,
  `regno` varchar(12) NOT NULL,
  `color` varchar(15) NOT NULL,
  `image` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `mileage` float NOT NULL,
  `carname` varchar(20) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `capacity` int(11) NOT NULL,
  `fuel` varchar(10) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`carid`, `regno`, `color`, `image`, `status`, `mileage`, `carname`, `brand`, `capacity`, `fuel`, `price`) VALUES
(23, 'KL-36-H-256', 'Blue', 'gfg.jpg', 'Not Availa', 12, 'Amze', 'Honda', 4, 'Diseal', 800),
(24, 'KL-36-H-256', 'Black', 'cnhfg.jpg', 'Not Availa', 10, 'SWift', 'MAruthi', 4, 'Petrol', 900),
(25, 'KL-36-H-256', 'REd', 'eco.jpg', 'Availabile', 10, 'Eco', 'Ford', 4, 'Petrol', 800),
(26, 'kl-36-bhjfjf', 'bl', 'wagnar.jpg.jpg', 'Not Availa', 12, 'Wagabor', 'maruti', 4, 'Petrol', 1200),
(30, 'KL-15-2014', 'red', 'Swift.jpg', 'Not Availa', 12, 'swift', 'maruthi', 4, 'Petrol', 800),
(31, 'KL-15-2014', 'Blue', 'amaze.jpg', 'Available', 12, 'Amaze', 'honda', 4, 'Diseal', 900),
(32, 'KL-15-2014', 'red', 'datson.jpg', 'Not Availa', 12, 'Waganor', 'maruti', 4, 'Petrol', 800),
(33, 'kl-12-b-1234', 'RED', 'i20.jpg', 'Available', 16, 'i20', 'hundai', 4, 'Petrol', 2000),
(34, 'kl-12-b-1235', 'RED', 'JEEP.jpg', 'Available', 12, 'compas', 'jeep', 6, 'Petrol', 4000),
(35, 'kl-12-b-1239', 'RED', 'fghgh.jpg', 'Not Availa', 19, 'readyGo', 'Datson', 4, 'Petrol', 1200),
(36, 'kl-12-b-1232', 'Black', '5 SEIRES.jpg', 'Available', 24, '5 series', 'BMW', 4, 'Petrol', 10000),
(37, 'kl-12-b-1230', 'RED', 'GT.jpg', 'Available', 10, 'GT', 'MUSTANG', 4, 'Petrol', 10000),
(38, 'kl-12-b-1233', 'gold', 'wagnar.jpg.jpg', 'Available', 16, 'waganor', 'suzuki', 4, 'Petrol', 1200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`carid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `carid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
