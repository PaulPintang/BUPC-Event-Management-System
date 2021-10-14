-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 14, 2021 at 02:13 AM
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
(1, 'test', 'dasdsadsad', 'dsadasd', '2021-10-08', '2021-10-08', 'asdas', 'asdasd', 'Not Required', 'asdasd', 'eddessa', 'jusswaaa'),
(2, 'jhkhk', 'dsadasdsa', 'dsasa', '2021-10-09', '2021-10-09', 'ad', 'dasd', 'Not Required', 'dsad', 'eddessa', 'eddessa'),
(3, 'cdfdf', 'asdsaddsadasdsda', 'dasdas', '2021-10-09', '2021-10-09', 'asd', 'asdasd', 'Required', 'dasd', 'eddessa', 'jusswaaa'),
(4, 'Today', 'fsdfs', 'fdsfsf', '2021-10-13', '2021-10-13', 'fsdf', 'dfsdf', 'Required', 'sdfsd', 'tricia', 'tricia'),
(5, 'fsdfds', 'fsdf', 'sdfsdf', '2021-10-14', '2021-10-14', 'fsdfs', 'fdsfsdf', 'Required', 'fdfsdf', 'tricia', NULL),
(6, 'dasdas', 'dasdasd', 'dasdasd', '2021-10-16', '2021-10-16', 'dsad', 'asdasda', 'Required', 'asdas', 'tricia', 'tricia'),
(7, 'fsdf', 'sdfdsf', 'fsdfd', '2021-10-19', '2021-10-19', 'fsdfds', 'sdfsd', 'Not Required', 'fdsfds', 'tricia', NULL),
(8, 'dasdfsdf', 'asdasdas', 'adsadas', '2021-10-29', '2021-10-29', 'dfsdf', 'adsadas', 'Required', 'dfsdf', 'tricia', NULL),
(9, 'dfsdfds', 'fdsfdsf', 'dfsdf', '2021-11-11', '2021-11-11', 'dsfsd', 'dsfdsf', 'Not Required', 'afdfdf', 'tricia', NULL);

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
(1, 'jusswaaa', 'Mon Oct 11, 2021', '11:12: AM', '11:13 AM'),
(2, 'jusswaaa', 'Tue Oct 12, 2021', '09:11: AM', '09:12 AM'),
(3, 'jusswaaa', 'Tue Oct 12, 2021', '08:46: PM', '08:54 PM'),
(4, 'jusswaaa', 'Wed Oct 13, 2021', '07:36: PM', '07:51 PM'),
(5, 'tricia', 'Wed Oct 13, 2021', '08:03: PM', NULL),
(6, 'tricia', 'Thu Oct 14, 2021', '07:59: AM', NULL);

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
  `setEmails` int(255) NOT NULL,
  `postid` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentsAcc`
--

INSERT INTO `studentsAcc` (`id`, `name`, `course`, `studentId`, `buEmail`, `setEmails`, `postid`, `userid`) VALUES
(3, 'Paul', 'BSIS-4A', '2000', 'pauljustineprena.pintang@bicol-u.edu.ph', 1, NULL, NULL),
(4, 'joshua', 'BSIS-4A', '2000', 'puldyastin@gmail.com', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `picture`, `role`, `status`) VALUES
(1, 'Joshua Booban', 'jusswaaa', '1234', '1633443226-', 'President', 'Offline'),
(2, 'Ma. Roseanne Pandaan', 'roseanne', '1234', '1633364673-', 'Vice President', 'Offline'),
(3, 'Eddessa Joy Legson', 'eddessa', '1234', '1632971941-', 'Secretary', 'Offline'),
(5, 'Tricia Kaye Moya', 'tricia', '1234', '1632972015-', 'Representative', 'Online');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
