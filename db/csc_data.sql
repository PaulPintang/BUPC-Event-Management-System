-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 18, 2021 at 07:07 AM
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
-- Database: `csc_data`
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
  `addby` varchar(255) DEFAULT NULL,
  `editby` varchar(255) DEFAULT NULL,
  `fbpost` varchar(255) DEFAULT NULL,
  `form` varchar(255) NOT NULL,
  `eval` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `eName`, `eDescription`, `eLocation`, `startdate`, `enddate`, `endtime`, `eObjectives`, `rules`, `startime`, `addby`, `editby`, `fbpost`, `form`, `eval`) VALUES
(7, 'Mr. And Ms. Bicol University 2019 (Talent Competition)', 'The search for Mr. & Ms. Bicol University 2019 is an annual activity sponsored by the University College Student Council in cooperation with the different colleges of Bicol University.', 'Ayala Mall Legazpi', '2019-09-09', '2019-09-09', '5:00pm', 'This activity aims to:\r\na. Showcase the talents of the Candidates\r\nb. To select exceptional talents among the candidates\r\nc. To boostthe self-esteem and confidence of the candidates\r\nd. Boost-up students sportmanship', 'Required', '1:00pm', '', NULL, 'https://web.facebook.com/bupc.csc.one/posts/2361302490786225', '', ''),
(9, 'BUPC Junior Councilor Hunt', 'The junior councilor hunt had taken place in Bicol University Polangui Campus', 'BUPC CSC Office', '2019-07-29', '2019-08-06', '5:00pm', 'a. To hunt for aspiring Junior Councilor\r\nb. to know aspiring', 'Required', '8:00am', '', 'treas', 'https://web.facebook.com/bupc.csc.one/posts/2325232624393212', '', ''),
(10, '1st General Assembly', 'For Any student organization to conduct this kind of activity to help the members raise their questions and predicament on various and important concerns.', 'BUPC Gymnasium', '2019-08-14', '2019-08-14', '04:00pm', 'a. Gather all student and talk about the student related activities\r\nb. Present the Accomplishment and financial report of the college student council for the last academic year', 'Required', '08:00am', 'treas', 'treas', 'https://web.facebook.com/bupc.csc.one/posts/2336907866559021', '', ''),
(11, 'Christmas Cheers  competition and Christmas lightning  ceremony', 'The Christmas cheers competition and Christmas lightning is being celebrated every year to have a time where students can have time more with their classmate and have fun', 'Front of Salcedas Building', '2021-11-19', '2021-11-19', '08:00pm', 'a. To give students free time\r\nb. To advance celebrate the upcoming Christmas day and\r\nc. To ensure that every student will celebrate', 'Required', '4:00pm', 'treas', NULL, 'https://web.facebook.com/bupc.csc.one/posts/2159052471011229', '', ''),
(15, 'Victory Ball', 'The activity aims to recognize and give honor to the athletes and participants to the different events of the BU@50 Celebration.', 'BUPC Gymnasium', '2019-10-11', '2019-10-11', '10:00pm', 'To recognize and give honor to the athletes and participants to the different events of the BU@50 Celebration and develop the students sense of socialization and to allow the students and faculty a splendid time to unwind for a while.', 'Required', '4:00pm', 'treas', 'treas', 'https://www.facebook.com/bupc.csc.one/posts/2381009498815524', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `sYear` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `report` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sem` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploadDate` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `sYear`, `report`, `sem`, `uploadDate`) VALUES
(2, '2018-2019', 'BUPC-CSC AR 2018-2019.pdf', 'All semester', 'Sat Oct 30, 2021'),
(3, '2019-2020', 'BUPC-CSC AR 2019-2020.pdf', 'All semester', 'Sat Oct 30, 2021');

-- --------------------------------------------------------

--
-- Table structure for table `financialReport`
--

CREATE TABLE `financialReport` (
  `id` int(11) NOT NULL,
  `report` varchar(255) NOT NULL,
  `sem` varchar(255) NOT NULL,
  `sYear` varchar(255) NOT NULL,
  `uploadDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `financialReport`
--

INSERT INTO `financialReport` (`id`, `report`, `sem`, `sYear`, `uploadDate`) VALUES
(2, '', 'sadasd', 'asdasd', 'Wed Nov 17, 2021');

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
(1, 'Adviser', 'Wed Nov 17, 2021', '04:38: PM', '04:52 PM'),
(2, 'Adviser', 'Wed Nov 17, 2021', '05:25: PM', NULL);

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
  `course` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `officers`
--

INSERT INTO `officers` (`id`, `name`, `picture`, `buEmail`, `position`, `yearLevel`, `fb`, `course`, `username`, `password`) VALUES
(1, 'Joshua Miranda Boban', 'President.jpg', 'boban@gmail.com', 'President', '4th Year', 'boban juswaa', 'BSEd Math', 'dfdsf', 'dsfsdf'),
(2, 'Ma. Roseanne Pandaan', 'vp.jpeg', 'pandaan@gmail.com', 'Vice President', '4th year', 'pandaan uwu', 'BSED-English', '', ''),
(3, 'Eddessa Joy Legson', 'Sec.jpg', '', 'Secretary', '4th Year', 'dsad', '', '', ''),
(4, 'Bernadette Riofro Satuito', 'Trea.jpg', '', 'Treasurer', '4th Year', '', '', '', ''),
(5, 'Josephine Marie A. Almuenia', 'Aud.jpg', '', 'Auditor', '4th year', '', '', '', ''),
(6, 'John Boy Arellano Pante', 'bm.jpg', 'dasda', 'Business Manager', '4th year', 'adsda', 'BSIS-4B', '', ''),
(7, 'Hannah Paula', 'Pio.jpg', 'dasdas', 'P.I.O', 'adsd', 'asdas', 'dsad', '', ''),
(8, 'Tricia Kaye T. Moya', 'Rep1.jpg', 'dasdsad', 'Representative', 'sadas', 'dasda', 'asdas', '', ''),
(9, 'Stephanie  L. Tolosa', 'Rep2.jpg', 'dasda', 'Representative', 'asdas', 'dasdas', 'dsada', '', ''),
(10, 'Ramius C. Aquiler', 'Rep3.jpg', 'dasd', 'Representative', 'dsad', 'dsad', 'sadsad', '', ''),
(11, 'Vince G. Pagdagdagan', 'Rep4.jpg', 'sdaasd', 'Representative', 'dasd', 'dsada', 'dasd', '', ''),
(12, 'Jodelyn P. Mendoza', 'rep5.jpg', 'dsadas', 'Representative', 'dsad', 'asd', 'dasd', '', ''),
(13, 'Riena Marie Nimo', 'Rep6.jpg', 'dasd', 'Representative', 'sdadas', 'dasd', 'dsa', '', ''),
(14, 'Stephanie J. Allorde', 'rep7.jpg', '', 'Representative', 'sadd', 'dsad', 'das', '', ''),
(15, 'Dave L. Sulit', 'Rep8.jpg', 'dasd', 'Representative', 'dsad', 'dsad', 'das', '', ''),
(16, 'Ralph Jessie M. Oco', 'Rep9.jpg', 'dsad', 'Representative', 'dsa', 'dsa', 'dsad', '', ''),
(17, 'Cyrill Junne M. Regilme', 'Rep10.jpg', 'sad', 'Representative', 'dsa', 'das', 'dsa', '', ''),
(18, 'Chinchin O. Lim', 'Rep11.jpg', 'dasd', 'Representative', 'das', 'das', 'dsa', '', ''),
(19, 'dsad', NULL, 'sdasd', 'P.I.O', '3rd Year', 'dsad', 'BTLEd Information Communication Technology', 'as', 'dsads');

-- --------------------------------------------------------

--
-- Table structure for table `otherReports`
--

CREATE TABLE `otherReports` (
  `id` int(11) NOT NULL,
  `report` varchar(255) NOT NULL,
  `sem` varchar(255) NOT NULL,
  `sYear` varchar(255) NOT NULL,
  `uploadDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentsacc`
--

CREATE TABLE `studentsacc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `studentId` varchar(255) NOT NULL,
  `buEmail` varchar(255) NOT NULL,
  `setEmails` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentsacc`
--

INSERT INTO `studentsacc` (`id`, `name`, `course`, `studentId`, `buEmail`, `setEmails`) VALUES
(1, 'Dandy Diño', 'BSIS-4A', '2018-PC-100614', 'dandy.dino@bicol-u.edu.ph', 1),
(2, 'Joshua Tolarba', 'Information System', '2018-PC-100824', 'joshuapago.tolarba@bicol-u.edu.ph', 1),
(4, 'Paul Justine Pintang', 'BSIS-4A', '2018-PC-100757', 'pauljustineprena.pintang@bicol-u.edu.ph', 1),
(6, 'Jovi Mae Rempillo', 'BSIS 4A', '2018-PC-100797', 'jovimaeoraye.rempillo@bicol-u.edu.ph', 1);

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
(36, 'Ben Saminiano', 'Adviser', 'adviser', 'Sir Ben Saminiano.jpg', 'Adviser', 'Online');

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
-- Indexes for table `financialReport`
--
ALTER TABLE `financialReport`
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
-- Indexes for table `otherReports`
--
ALTER TABLE `otherReports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentsacc`
--
ALTER TABLE `studentsacc`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `financialReport`
--
ALTER TABLE `financialReport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `officers`
--
ALTER TABLE `officers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `otherReports`
--
ALTER TABLE `otherReports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `studentsacc`
--
ALTER TABLE `studentsacc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
