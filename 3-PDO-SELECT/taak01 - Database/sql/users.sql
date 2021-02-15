-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 28 mrt 2020 om 20:04
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
-- Tabelstructuur voor tabel `users`
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
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `role`) VALUES
(1, 'Mohamed', 'Hadid', 'mohamed@toolsforever.nl', 'welcome01', 1),
(2, 'Bart', 'Koning', 'bart@toolsforever.nl', 'welcome01', 3),
(3, 'Lucas', 'Van Meren', 'lucas@toolsforever.nl', 'welcome01', 3),
(4, 'Anne', 'Bramenstruik', 'anne@toolsforever.nl', 'welcome01', 2);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
