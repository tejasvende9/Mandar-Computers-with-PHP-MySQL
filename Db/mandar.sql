-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2024 at 08:46 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mandar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindetail`
--

CREATE TABLE `admindetail` (
  `aid` int(11) NOT NULL,
  `anm` varchar(100) NOT NULL,
  `aemail` varchar(150) NOT NULL,
  `apass` varchar(50) NOT NULL,
  `amob` varchar(50) NOT NULL,
  `aadr` text NOT NULL,
  `aque` varchar(100) NOT NULL,
  `aans` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admindetail`
--

INSERT INTO `admindetail` (`aid`, `anm`, `aemail`, `apass`, `amob`, `aadr`, `aque`, `aans`) VALUES
(1, 'tejas vende', 'tejas@gmail.com', '123', '9272321290', 'satara', 'What is your School Name', 'nsk');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `cid` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`cid`, `cname`) VALUES
(1, 'dell'),
(2, 'asus');

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `lid` int(11) NOT NULL,
  `lnm` varchar(100) NOT NULL,
  `cid` int(11) NOT NULL,
  `lprice` int(11) NOT NULL,
  `linfo` varchar(100) NOT NULL,
  `lram` varchar(100) NOT NULL,
  `lpro` varchar(100) NOT NULL,
  `lgraph` varchar(100) NOT NULL,
  `los` varchar(100) NOT NULL,
  `lssd` varchar(100) NOT NULL,
  `lhdd` varchar(100) NOT NULL,
  `limg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`lid`, `lnm`, `cid`, `lprice`, `linfo`, `lram`, `lpro`, `lgraph`, `los`, `lssd`, `lhdd`, `limg`) VALUES
(1, 'a550', 2, 45000, 'black', '4gb', 'i5', '2gb', 'windows10', '250gb', '-', 'images/asus.jpg'),
(2, 'a50', 1, 50000, 'silver', '8Gb', 'i5', '2gb', 'windows10', '500gb', '-', 'images/dell.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindetail`
--
ALTER TABLE `admindetail`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`lid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admindetail`
--
ALTER TABLE `admindetail`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
