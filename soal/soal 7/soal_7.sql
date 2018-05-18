-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2018 at 03:53 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soal_7`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(255) NOT NULL,
  `array` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `array`) VALUES
(2, '[[\"DW\",\"DW\",\" \",\" \",\"  \",\"DW\",\" \",\" \",\" \",\" \",\" \",\"DW\"],[\"DW\",\" \",\"DW\",\" \",\"  \",\"DW\",\" \",\" \",\" \",\" \",\" \",\"DW\"],[\"DW\",\" \",\" \",\"DW\",\"  \",\"DW\",\" \",\" \",\"DW\",\" \",\" \",\"DW\"],[\"DW\",\" \",\" \",\"DW\",\"  \",\"DW\",\" \",\"DW\",\"DW\",\"DW\",\" \",\"DW\"],[\"DW\",\" \",\"DW\",\" \",\"  \",\"DW\",\"DW\",\" \",\" \",\" \",\"DW\",\"DW\"],[\"DW\",\"DW\",\" \",\" \",\"  \",\"DW\",\" \",\" \",\" \",\" \",\" \",\"DW\"]]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
