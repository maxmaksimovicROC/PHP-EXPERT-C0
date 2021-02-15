-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 28 mrt 2020 om 21:22
-- Serverversie: 10.4.8-MariaDB
-- PHP-versie: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Tabelstructuur voor tabel `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `address` varchar(191) NOT NULL,
  `city` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `locations`
--

INSERT INTO `locations` (`id`, `name`, `address`, `city`) VALUES
(1, 'Tools4ever Utrecht', 'Neude 1', 'Utrecht'),
(2, 'Tools4ever Groningen', 'Grote markt', 'Groningen'),
(8, 'Toolsforever Alkmaar', 'Kerkplein 1', 'Alkmaar'),
(9, 'Tools4ever Hoorn', 'Rode steen 1', 'Hoorn\r\n'),
(10, 'Tools4ever Haarlem', 'Barteljorisstraat 54', 'Haarlem'),
(11, 'Tools4ever Amsterdam Noord', 'Dam 1', 'Amsterdam'),
(12, 'Tools4ever Amsterdam Zuid', 'Museumplein 23', 'Amsterdam');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
