-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 04, 2021 at 12:15 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `eName` varchar(255) NOT NULL,
  `eDescription` varchar(255) NOT NULL,
  `eLocation` varchar(255) NOT NULL,
  `startdate` varchar(255) NOT NULL,
  `startime` varchar(255) NOT NULL,
  `enddate` varchar(255) NOT NULL,
  `endtime` varchar(255) NOT NULL,
  `eObjectives` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `eName`, `eDescription`, `eLocation`, `startdate`, `startime`, `enddate`, `endtime`, `eObjectives`) VALUES
(12, 'Taratakan', 'para sa mga supot', 'BUPC-Gymnasium', 'Mon, October 14 2021', '7:30 am', 'Mon, October 14 2021', '5:30 PM', 'para maubos na ang mga supot'),
(13, 'Online Sabong', 'su may kwarta sana', 'Sa gym', 'lunes', '7:30 am', 'lunes', '5:30 PM', 'tirigbakan manok');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `logout` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `name`, `date`, `login`, `logout`) VALUES
(1, 'jusswaaa', 'Mon Oct 04, 2021', '06:12: PM', '06:12 PM'),
(2, 'roseanne', 'Mon Oct 04, 2021', '06:12: PM', '06:12 PM'),
(3, 'tricia', 'Mon Oct 04, 2021', '06:12: PM', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `studentsAcc`
--

CREATE TABLE `studentsAcc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `studentId` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentsAcc`
--

INSERT INTO `studentsAcc` (`id`, `name`, `course`, `studentId`) VALUES
(3, 'paul', 'BSIS-4A', '2000'),
(4, 'joshua', 'BSIS-4A', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `picture` longblob NOT NULL,
  `role` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `picture`, `role`, `status`) VALUES
(1, 'Joshua Buban', 'jusswaaa', '1234', 0x313633323937313735312d, 'President', 'Offline'),
(2, 'Ma. Roseanne Pandaan', 'roseanne', '1234', 0x313633323937313835312d, 'Vice President', 'Offline'),
(3, 'Eddessa Joy Legson', 'eddessa', '1234', 0x313633323937313934312d, 'Secretary', 'Offline'),
(5, 'Tricia Kaye Moya', 'tricia', '1234', 0x313633323937323031352d, 'Representative', 'Online');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentsAcc`
--
ALTER TABLE `studentsAcc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `studentsAcc`
--
ALTER TABLE `studentsAcc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
