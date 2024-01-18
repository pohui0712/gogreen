-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 18, 2024 at 04:24 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `GoGreen`
--

-- --------------------------------------------------------

--
-- Table structure for table `Program`
--

CREATE TABLE `Program` (
  `programID` int(50) NOT NULL,
  `program_name` varchar(50) NOT NULL,
  `Venue` varchar(100) NOT NULL,
  `Datatime` date NOT NULL,
  `userID` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testingVolunteers`
--

CREATE TABLE `testingVolunteers` (
  `userID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testingVolunteers`
--

INSERT INTO `testingVolunteers` (`userID`, `username`, `email`, `password`) VALUES
(1, 'daniel', 'daniel@gmail.com', 'daniel12345'),
(7, 'ass111', 'ngoh@gmail.com', '19838347485678429'),
(12, 'da11', 'daniel12345@gmail.com', 'dadadad');

-- --------------------------------------------------------

--
-- Table structure for table `VolunteersInfo`
--

CREATE TABLE `VolunteersInfo` (
  `userID` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `IC_number` int(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `contact_number` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Program`
--
ALTER TABLE `Program`
  ADD PRIMARY KEY (`programID`);

--
-- Indexes for table `testingVolunteers`
--
ALTER TABLE `testingVolunteers`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `VolunteersInfo`
--
ALTER TABLE `VolunteersInfo`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Program`
--
ALTER TABLE `Program`
  MODIFY `programID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testingVolunteers`
--
ALTER TABLE `testingVolunteers`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `VolunteersInfo`
--
ALTER TABLE `VolunteersInfo`
  MODIFY `userID` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
