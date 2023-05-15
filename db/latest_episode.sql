-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2023 at 04:03 PM
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
-- Table structure for table `latest_episode`
--

CREATE TABLE `latest_episode` (
  `id` int(11) NOT NULL,
  `episode_name` varchar(120) NOT NULL,
  `episode_image` varchar(120) NOT NULL,
  `episode_duration` varchar(50) NOT NULL,
  `episode_count` int(100) NOT NULL,
  `podcaters_name` varchar(120) NOT NULL,
  `podcaters_image` varchar(120) NOT NULL,
  `podcaters_profession` varchar(120) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `latest_episode`
--

INSERT INTO `latest_episode` (`id`, `episode_name`, `episode_image`, `episode_duration`, `episode_count`, `podcaters_name`, `podcaters_image`, `podcaters_profession`, `description`) VALUES
(6, 'Modern Vintage', 'Modern Vintage.png', '50 Minutes', 15, 'Elsa', 'Elsa.png', 'Influencer', 'Lorem Ipsum dolor sit amet consectetur'),
(7, 'Daily Talk', 'Daily Talk.png', '15 Minutes', 19, 'William', 'William.png', 'Vlogger', 'Lorem Ipsum dolor sit amet consectetur'),
(8, 'Horror Show', 'Horror Show.png', '40 Minutes', 34, 'Asif', 'Asif.png', 'Creator', 'Lorem Ipsum dolor sit amet consectetur'),
(9, 'Eid UL Fitr', 'EidULFitr.png', '50 Minutes', 43, 'Moshiur', 'Moshiur.png', 'RJ', 'Lorem Ipsum dolor sit amet consectetur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `latest_episode`
--
ALTER TABLE `latest_episode`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `latest_episode`
--
ALTER TABLE `latest_episode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
