-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2019 at 09:37 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `d_name` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `d_name`, `contact`) VALUES
(1, 'Rabbi', '0544987'),
(2, 'SNP', '01258'),
(3, 'Anupom pom', '023556'),
(4, 'hafiz', '1471225'),
(5, 'mahbub', '14477558'),
(6, 'tasnim', '1475555'),
(7, 'mofiz', '14445669'),
(8, 'kuddus', '1112233'),
(9, 'abul', '11455666'),
(10, 'hayat', '55889966');

-- --------------------------------------------------------

--
-- Table structure for table `pat`
--

CREATE TABLE `pat` (
  `id` int(11) NOT NULL,
  `PatName` varchar(50) NOT NULL,
  `bill` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pat`
--

INSERT INTO `pat` (`id`, `PatName`, `bill`) VALUES
(1, 'blood', 'paid'),
(2, 'urine', 'unpaid'),
(3, 'urine', 'unpaid'),
(4, 'blood', 'paid'),
(5, 'blood', 'paid'),
(6, 'blood', 'paid'),
(7, 'blood', 'paid'),
(8, 'stool', 'unpaid'),
(9, 'stool', 'paid'),
(10, 'urine', 'unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `pt`
--

CREATE TABLE `pt` (
  `id` int(11) NOT NULL,
  `PName` varchar(65) NOT NULL,
  `disease` varchar(50) NOT NULL,
  `contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pt`
--

INSERT INTO `pt` (`id`, `PName`, `disease`, `contact`) VALUES
(1, 'Monim', 'Cold', '01684224435'),
(3, 'zarin', 'Aids', '025463'),
(4, 'zinia', 'fever', '114455'),
(6, 'Akhi', 'fever', '01715925172');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pat`
--
ALTER TABLE `pat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pt`
--
ALTER TABLE `pt`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
