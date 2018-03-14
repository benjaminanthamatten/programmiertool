-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 25. Jan 2018 um 14:03
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
(1, 'Remax-Oberwallis', '#c0c0c0');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bereiche`
--

CREATE TABLE `bereiche` (
  `bereich_ID` int(11) NOT NULL,
  `box` varchar(200) NOT NULL,
  `anzeigen` varchar(200) NOT NULL,
  `width` varchar(200) NOT NULL,
  `height` varchar(200) NOT NULL,
  `background` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `text` varchar(200) NOT NULL,
  `margin-top` varchar(200) NOT NULL,
  `margin-bottom` varchar(200) NOT NULL,
  `margin-left` varchar(200) NOT NULL,
  `margin-right` varchar(200) NOT NULL,
  `padding-top` varchar(200) NOT NULL,
  `padding-bottom` varchar(200) NOT NULL,
  `padding-left` varchar(200) NOT NULL,
  `padding-right` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `bereiche`
--

INSERT INTO `bereiche` (`bereich_ID`, `box`, `anzeigen`, `width`, `height`, `background`, `title`, `text`, `margin-top`, `margin-bottom`, `margin-left`, `margin-right`, `padding-top`, `padding-bottom`, `padding-left`, `padding-right`) VALUES
(1, 'box-1', 'ja', '100%', '200px', 'white', 'Bereich 1', 'Platzhaltertext....', '5px', '5px', '5px', '5px', '10px', '10px', '20px', '20px'),
(2, 'box-2', 'ja', '100%', '200px', 'white', 'Bereich 2', 'Platzhaltertext....', '5px', '5px', '5px', '5px', '10px', '10px', '20px', '20px'),
(3, 'box-3', 'ja', '100%', '200px', 'white', 'Bereich 3', 'Platzhaltertext....', '5px', '5px', '5px', '5px', '10px', '10px', '20px', '20px'),
(4, 'box-4', 'ja', '100%', '200px', 'white', 'Bereich 4', 'Platzhaltertext....', '5px', '5px', '5px', '5px', '10px', '10px', '20px', '20px'),
(5, 'box-5', 'ja', '100%', '200px', 'white', 'Bereich 5', 'Platzhaltertext....', '5px', '5px', '5px', '5px', '10px', '10px', '20px', '20px'),
(6, 'box-6', 'ja', '100%', '200px', 'white', 'Bereich 6', 'Platzhaltertext....', '5px', '5px', '5px', '5px', '10px', '10px', '20px', '20px'),
(7, 'box-7', 'ja', '100%', '200px', 'white', 'Bereich 7', 'Platzhaltertext....', '5px', '5px', '5px', '5px', '10px', '10px', '20px', '20px'),
(8, 'box-8', 'ja', '100%', '200px', 'white', 'Bereich 8', 'Platzhaltertext....', '5px', '5px', '5px', '5px', '10px', '10px', '20px', '20px'),
(9, 'box-9', 'ja', '100%', '200px', 'white', 'Bereich 9', 'Platzhaltertext....', '5px', '5px', '5px', '5px', '10px', '10px', '20px', '20px'),
(10, 'box-10', 'ja', '100%', '200px', 'white', 'Bereich 10', 'Platzhaltertext....', '5px', '5px', '5px', '5px', '10px', '10px', '20px', '20px');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `basisdaten`
--
ALTER TABLE `basisdaten`
  ADD PRIMARY KEY (`basis_ID`);

--
-- Indizes für die Tabelle `bereiche`
--
ALTER TABLE `bereiche`
  ADD PRIMARY KEY (`bereich_ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `basisdaten`
--
ALTER TABLE `basisdaten`
  MODIFY `basis_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT für Tabelle `bereiche`
--
ALTER TABLE `bereiche`
  MODIFY `bereich_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
