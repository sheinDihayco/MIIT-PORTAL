-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2024 at 04:08 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miit-portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(50) NOT NULL,
  `studentID` varchar(50) NOT NULL,
  `yourEmail` varchar(50) NOT NULL,
  `yourUsername` varchar(50) NOT NULL,
  `yourPassword` varchar(50) NOT NULL,
  `mem_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `studentID`, `yourEmail`, `yourUsername`, `yourPassword`, `mem_type`) VALUES
(1, 'MIIT2021137', 'dihayco020903@gmail.com', 'Sheinalie Dihayco', '$2y$10$AmFeyNo2eIZzE2stUBZs4.rmNsR41LJx9fOMZheBEGr', ''),
(8, '', 'admin123@gmail.com', 'admin2024', '$2y$10$uzyg7LNmAOO2uB5XxKY49OLAM.wyXTiR8bCSUT9LueQ', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `eventTitle` varchar(50) NOT NULL,
  `eventDescription` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `date`, `eventTitle`, `eventDescription`) VALUES
(7, '2024-07-30', 'MIIT-TECH DAY', 'MIIT-TECH Day is a flagship event that celebrates innovation and technology. It gathers students, faculty, and industry leaders to showcase cutting-edge projects, share knowledge, and foster collaboration across various tech disciplines.');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` int(50) NOT NULL,
  `code` varchar(15) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `instructor` varchar(50) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `remarks` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `year` varchar(15) NOT NULL,
  `country` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `acc_type` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `full_name`, `course`, `year`, `country`, `address`, `phone`, `email`, `acc_type`, `image`) VALUES
(1, 'Sheinalie Dihayco', ' BSIT', '3', 'Philippines', 'Purok Sagay, Kalubihan', '09996707038', 'dihayco020903@gmail.com', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `instructor` varchar(50) NOT NULL,
  `date` varchar(15) NOT NULL,
  `time` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `code`, `subject`, `instructor`, `date`, `time`) VALUES
(16, 'cc314', '', 'capstone 1', '', 'mr. bustamante');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
