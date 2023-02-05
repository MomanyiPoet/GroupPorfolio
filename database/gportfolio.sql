-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 05, 2023 at 02:03 AM
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
-- Database: `gportfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminusers`
--

CREATE TABLE `adminusers` (
  `id` int(11) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminusers`
--

INSERT INTO `adminusers` (`id`, `user_id`, `email`, `username`, `password_hash`, `date`) VALUES
(1, 137888, 'nyabuts@gmail.com', 'admin5', '$2y$10$hoahfuvcgZ1ULY.p2lgDN.sIH4cdMH6BK5bMyiGI838MXL4Jw6TT2', '2022-11-08 11:50:55'),
(5, 2380, 'nyabutibm@gmail.com', 'admin6', '$2y$10$orN9gvbcRVd7Ak4cmRGvReAoL.GXGLlYBde0Zm7F6JXWpJR.L8Pmu', '2022-11-08 17:19:22'),
(11, 1423, 'luvinskimo@gmail.com', 'admin7', '$2y$10$3RS8zxUyywwL6Y5cRzqWSeBGxPRE4m03w4GcMuahdwwbk3vJAgunW', '2022-11-12 09:25:28');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_url`) VALUES
(6, 'IMG-63dee1628d0667.76147377.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblportfolio`
--

CREATE TABLE `tblportfolio` (
  `ID` int(10) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `skills` varchar(250) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblportfolio`
--

INSERT INTO `tblportfolio` (`ID`, `lastName`, `firstName`, `title`, `skills`, `Image`, `CreationDate`) VALUES
(4, 'Momanyi', 'Brian', 'Front End Developer', 'Software Engineer', 'IMG-63dee3e74a6871.46651857.jpg', '2023-02-04 23:01:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminusers`
--
ALTER TABLE `adminusers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `date` (`date`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblportfolio`
--
ALTER TABLE `tblportfolio`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminusers`
--
ALTER TABLE `adminusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblportfolio`
--
ALTER TABLE `tblportfolio`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
