-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2021 at 07:01 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `college_id`
--

CREATE TABLE `college_id` (
  `usn` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `sem_sec` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `mobile` bigint(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Blood_group` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_id`
--

INSERT INTO `college_id` (`usn`, `name`, `dob`, `sem_sec`, `department`, `mobile`, `email`, `Blood_group`, `address`) VALUES
('1000', 'kiran', '2000-12-12', '5 b', 'CSE', 9591192871, 'kiran@gmail.com', 'o+', 'mysore'),
('11111111', 'hfhfhfh', '2020-12-24', 'hf', 'CSE', 0, '', '', 'hfhfhety'),
('2212', 'ddada', '2020-12-23', '4r', '', 13134234, 'asasas@asa.com', '', 'rwr24'),
('22122121', 'kiran', '2020-12-24', '5b', 'CSE', 0, '', '', 'fdvdvx'),
('4mh18cs047', 'kiran v', '2000-12-12', '5X', 'CSE', 9591192871, 'kiran@gmail.com', 'o+', 'mysore'),
('4mh18cs048', 'KIRANPRASAD R', '2020-12-10', '4th  B', 'CSE', 9164489959, '4mh18cs048@gmail.com', 'B+', 'MYSORE'),
('5555', 'dada', '2020-12-24', 'dad', 'CSE', 0, '', '', 'dada');

-- --------------------------------------------------------

--
-- Table structure for table `non_teaching`
--

CREATE TABLE `non_teaching` (
  `staff_id` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `department` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school_id`
--

CREATE TABLE `school_id` (
  `adm_no` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `class` varchar(20) NOT NULL,
  `sec` text NOT NULL,
  `rollno` int(10) NOT NULL,
  `mobile` int(25) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_id`
--

INSERT INTO `school_id` (`adm_no`, `name`, `father_name`, `dob`, `class`, `sec`, `rollno`, `mobile`, `address`) VALUES
(101, 'abhi', 'ramesh', '2020-12-15', '5th', 'a', 1, 122345646, 'mandya'),
(121, 'kiran', 'vishwanth', '2000-12-12', '10', 'a', 1212121, 1112212, 'mysore'),
(142, 'KIRANPRASAD R', 'ramesh', '2021-01-27', '3rd std', 'A', 1, 2147483647, 'MYSORE'),
(1211, 'madan', 'ramu', '2020-12-24', '9th', 'on', 55, 988456465, 'maddur');

-- --------------------------------------------------------

--
-- Table structure for table `teaching_staff`
--

CREATE TABLE `teaching_staff` (
  `staff_id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `department` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teaching_staff`
--

INSERT INTO `teaching_staff` (`staff_id`, `name`, `dob`, `department`, `address`) VALUES
(0, 'kiran', '0000-00-00', 'CSE', 'mandya'),
(10, 'deepa', '2020-12-16', 'CSE', 'Mysore'),
(15, 'aa', '2020-12-23', 'EC', 'mandya'),
(16, 'sushma', '2020-11-30', 'EC', 'maddur'),
(17, 'madhu', '2004-02-11', 'M.TEC', 'hassan'),
(112, 'dad', '0000-00-00', 'Account', ''),
(1243, 'manjar', '2021-01-21', 'CSE', 'MYSORE'),
(11111, 'KIRANPRASAD R', '2021-01-16', 'CSE', 'MYSORE'),
(12433, 'KIRANPRASAD R', '2021-01-01', 'CSE', 'MYSORE'),
(45452, 'KIRANPRASAD R', '2021-01-01', 'CSE', 'MYSORE'),
(225252, '', '0000-00-00', 'CSE', ''),
(1243566, 'manjars', '2021-01-21', 'CSE', 'MYSORE'),
(12433554, 'KIRANPRASAD R', '2021-01-01', 'CSE', 'MYSORE');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(8, 'kiranprasad', 'kiran@gmail.com', '1234'),
(9, 'admin', '4mh18cs048@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(10, 'student', 'kiranprasad8897@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college_id`
--
ALTER TABLE `college_id`
  ADD PRIMARY KEY (`usn`);

--
-- Indexes for table `non_teaching`
--
ALTER TABLE `non_teaching`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `school_id`
--
ALTER TABLE `school_id`
  ADD PRIMARY KEY (`adm_no`,`rollno`,`mobile`);

--
-- Indexes for table `teaching_staff`
--
ALTER TABLE `teaching_staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
