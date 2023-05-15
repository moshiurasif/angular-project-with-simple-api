-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2023 at 04:04 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `podtalk`
--

-- --------------------------------------------------------

--
-- Table structure for table `podcaters`
--

CREATE TABLE `podcaters` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `image` varchar(120) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `podcaters`
--

INSERT INTO `podcaters` (`id`, `name`, `image`, `category`) VALUES
(1, 'Taylor', 'Taylor.png', 'modeling'),
(2, 'William', 'William.png', 'creative design'),
(3, 'Chan', 'Chan.png', 'Education'),
(4, 'Candice', 'Candice.png', 'Storytelling');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `podcaters`
--
ALTER TABLE `podcaters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `podcaters`
--
ALTER TABLE `podcaters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
