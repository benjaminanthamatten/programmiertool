-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 25. Jan 2018 um 13:13
-- Server-Version: 10.1.13-MariaDB
-- PHP-Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `programmiertool`
--
CREATE DATABASE IF NOT EXISTS `programmiertool` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `programmiertool`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `basisdaten`
--

CREATE TABLE `basisdaten` (
  `basis_ID` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `background` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `basisdaten`
--

INSERT INTO `basisdaten` (`basis_ID`, `title`, `background`) VALUES
(1, 'Title', '#1ce8e8');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `basisdaten`
--
ALTER TABLE `basisdaten`
  ADD PRIMARY KEY (`basis_ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `basisdaten`
--
ALTER TABLE `basisdaten`
  MODIFY `basis_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
