-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2021 at 11:10 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toolsforever`
--

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `address` varchar(191) NOT NULL,
  `city` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `address`, `city`) VALUES
(1, 'Tools4ever Utrecht', 'Neude 1', 'Utrecht'),
(2, 'Tools4ever Groningen', 'Grote markt', 'Groningen'),
(8, 'Toolsforever Alkmaar', 'Kerkplein 1', 'Alkmaar'),
(9, 'Tools4ever Hoorn', 'Rode steen 1', 'Hoorn\r\n'),
(10, 'Tools4ever Haarlem', 'Barteljorisstraat 54', 'Haarlem'),
(11, 'Tools4ever Amsterdam Noord', 'Dam 1', 'Amsterdam'),
(12, 'Tools4ever Amsterdam Zuid', 'Museumplein 23', 'Amsterdam');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(191) NOT NULL,
  `lastname` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(60) NOT NULL,
  `role` int(1) NOT NULL COMMENT '1=Admin;2=Manager; 3=Medewerker'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `role`) VALUES
(1, 'Mohamed', 'Hadid', 'mohamed@toolsforever.nl', 'welcome01', 1),
(2, 'Bart', 'Koning', 'bart@toolsforever.nl', 'welcome01', 3),
(3, 'Lucas', 'Van Meren', 'lucas@toolsforever.nl', 'welcome01', 3),
(4, 'Anne', 'Bramenstruik', 'anne@toolsforever.nl', 'welcome01', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
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
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
