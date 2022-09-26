-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 12. Aug 2022 um 13:30
-- Server-Version: 10.4.20-MariaDB
-- PHP-Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `immobilien`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `angebote`
--

CREATE TABLE `angebote` (
  `ort` varchar(25) NOT NULL,
  `kaufpreis` double NOT NULL,
  `id` int(11) UNSIGNED NOT NULL,
  `zimmeranzahl` int(11) NOT NULL,
  `wohnflaeche` int(11) NOT NULL,
  `grundstueck` int(11) NOT NULL,
  `dateiname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `angebote`
--

INSERT INTO `angebote` (`ort`, `kaufpreis`, `id`, `zimmeranzahl`, `wohnflaeche`, `grundstueck`, `dateiname`) VALUES
('Reinickendorf', 560000, 2, 6, 140, 400, 'haus2.jpg'),
('Tegel', 700000, 3, 5, 170, 1200, 'haus3.jpg'),
('Alt-Treptow', 420000, 4, 4, 90, 250, 'haus4.jpg'),
('Zehlendorf', 80000, 5, 3, 100, 450, 'haus5.jpg'),
('Friedrichshain', 1200000, 6, 5, 180, 1500, 'haus6.jpg'),
('Gatow', 1100000, 7, 4, 120, 750, 'haus7.jpg');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `angebote`
--
ALTER TABLE `angebote`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `angebote`
--
ALTER TABLE `angebote`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
