-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 15, 2020 at 12:03 PM
-- Server version: 10.1.44-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `uts`
--

CREATE TABLE `uts` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uts`
--

INSERT INTO `uts` (`id`, `nama`, `email`, `score`) VALUES
(1, 'dhaniaffa', 'admin@perpus.test', 30),
(2, 'adhimastama', 'dhaniaffa@outlook.com', 70),
(6, 'mahadika', 'mahadika@perpus.test', 50),
(7, 'mahadika', 'mahadika@perpus.test', 30),
(8, 'player1', 'player@gmail.com', 20),
(9, 'player2', 'player2@gmail.com', 110),
(10, 'Player3', 'player3@gmail.com', 130),
(11, 'player4', 'player4@gmail.com', 100),
(12, 'player5', 'player5@gmail.com', 100),
(13, 'player6', 'player6@gmail.com', 10000),
(14, 'player7', 'player7@gmail.com', 200),
(15, 'player8', 'player8@gmail.com', 300),
(16, 'player9', 'player9@gmail.com', 150);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uts`
--
ALTER TABLE `uts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uts`
--
ALTER TABLE `uts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
