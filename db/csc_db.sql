-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 14, 2021 at 03:53 AM
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
  `enddate` varchar(255) NOT NULL,
  `endtime` varchar(255) NOT NULL,
  `eObjectives` varchar(255) NOT NULL,
  `rules` varchar(255) NOT NULL,
  `startime` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `addby` varchar(255) NOT NULL,
  `editby` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `eName`, `eDescription`, `eLocation`, `startdate`, `enddate`, `endtime`, `eObjectives`, `rules`, `startime`, `addby`, `editby`) VALUES
(24, 'dsa', 'dsa', 'dsa', '2021-10-28', '2021-10-28', 'asd', 'dsa', 'Required', 'das', 'paul', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `sYear` varchar(255) NOT NULL,
  `sem` varchar(255) NOT NULL,
  `report` varchar(255) NOT NULL,
  `uploadDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `postid` int(11) NOT NULL,
  `action` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `logout` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `username`, `date`, `login`, `logout`) VALUES
(1, 'paul', 'Thu Oct 28, 2021', '06:32: PM', NULL),
(2, 'paul', 'Sun Nov 14, 2021', '10:46: AM', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `officers`
--

CREATE TABLE `officers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `buEmail` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `yearLevel` varchar(255) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `officers`
--

INSERT INTO `officers` (`id`, `name`, `picture`, `buEmail`, `position`, `yearLevel`, `fb`, `course`) VALUES
(1, 'Joshua Miranda Boban', 'President.jpg', 'boban@gmail.com', 'President', '4th year', 'boban juswaa', 'BSED-Math'),
(2, 'Ma. Roseanne Pandaan', 'vp.jpeg', 'pandaan@gmail.com', 'Vice President', '4th year', 'pandaan uwu', 'BSED-English'),
(3, 'Eddessa Joy Legson', 'Sec.jpg', 'sadsa@.com', 'Secretary', '4th Year', 'dsad', 'dasd'),
(4, 'Bernadette Riofro Satuito', 'Trea.jpg', 'asdas', 'Treasurer', '4th Year', 'dsad', 'asda'),
(5, 'Josephine Marie A. Almuenia', 'Aud.jpg', 'dsa', 'Auditor', '4th year', 'dasd', 'asda'),
(6, 'John Boy Arellano Pante', 'bm.jpg', 'dasda', 'Business Manager', '4th year', 'adsda', 'BSIS-4B'),
(7, 'Hannah Paula', 'Pio.jpg', 'dasdas', 'P.I.O', 'adsd', 'asdas', 'dsad'),
(8, 'Tricia Kaye T. Moya', 'Rep1.jpg', 'dasdsad', 'Representative', 'sadas', 'dasda', 'asdas'),
(9, 'Stephanie  L. Tolosa', 'Rep2.jpg', 'dasda', 'Representative', 'asdas', 'dasdas', 'dsada'),
(10, 'Ramius C. Aquiler', 'Rep3.jpg', 'dasd', 'Representative', 'dsad', 'dsad', 'sadsad'),
(11, 'Vince G. Pagdagdagan', 'Rep4.jpg', 'sdaasd', 'Representative', 'dasd', 'dsada', 'dasd'),
(12, 'Jodelyn P. Mendoza', 'rep5.jpg', 'dsadas', 'Representative', 'dsad', 'asd', 'dasd'),
(13, 'Riena Marie Nimo', 'Rep6.jpg', 'dasd', 'Representative', 'sdadas', 'dasd', 'dsa'),
(14, 'Stephanie J. Allorde', 'rep7.jpg', '', 'Representative', 'sadd', 'dsad', 'das'),
(15, 'Dave L. Sulit', 'Rep8.jpg', 'dasd', 'Representative', 'dsad', 'dsad', 'das'),
(16, 'Ralph Jessie M. Oco', 'Rep9.jpg', 'dsad', 'Representative', 'dsa', 'dsa', 'dsad'),
(17, 'Cyrill Junne M. Regilme', 'Rep10.jpg', 'sad', 'Representative', 'dsa', 'das', 'dsa'),
(18, 'Chinchin O. Lim', 'Rep11.jpg', 'dasd', 'Representative', 'das', 'das', 'dsa');

-- --------------------------------------------------------

--
-- Table structure for table `studentsAcc`
--

CREATE TABLE `studentsAcc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `studentId` varchar(255) NOT NULL,
  `buEmail` varchar(255) NOT NULL,
  `setEmails` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentsAcc`
--

INSERT INTO `studentsAcc` (`id`, `name`, `course`, `studentId`, `buEmail`, `setEmails`) VALUES
(3, 'Paul', 'BSIS-4A', '2000', 'pauljustineprena.pintang@bicol-u.edu.ph', 1),
(4, 'joshua', 'BSIS-4A', '2000', 'puldyastin@gmail.com', 1),
(9, 's', 'sa', 's', 'puldyastin@gmail.com', 1),
(10, 's', 's', 's', 'puldyastin@gmail.com', 1),
(11, '', '', '', '', 1),
(12, 'dsfds', 'fsdfs', 'dasdad', 'pul@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `picture`, `role`, `status`) VALUES
(1, 'admin', 'admin', 'admin', NULL, '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officers`
--
ALTER TABLE `officers`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `officers`
--
ALTER TABLE `officers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `studentsAcc`
--
ALTER TABLE `studentsAcc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
