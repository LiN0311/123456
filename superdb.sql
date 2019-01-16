-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 13. Jan 2017 um 23:39
-- Server-Version: 5.6.25
-- PHP-Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `superdb`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `raw_user`
--

CREATE TABLE `raw_user` (
  `ID` int(11) NOT NULL,
  `FIRSTNAME` varchar(30) NOT NULL,
  `LASTNAME` varchar(30) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PASSWORD` varchar(20) DEFAULT NULL,
  `CREATEDATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UPDATEDATE` timestamp NULL DEFAULT NULL,
  `DELETEDATE` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tabellenstruktur für Tabelle `raw_user`
--

CREATE TABLE `raw_person` (
  `ID` int(11) NOT NULL,
  `FIRSTNAME` varchar(30) NOT NULL,
  `LASTNAME` varchar(30) NOT NULL,
  `STATUS` varchar(300) NOT NULL,
  `CITY` varchar(30) NOT NULL,
  `BIRTHDAY` date NOT NULL,
  `PHONE` int(11) NOT NULL,
  `GENDER` varchar(1) NOT NULL,

) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- data for table `raw_user`
--

INSERT INTO `raw_user` (`ID`, `FIRSTNAME`, `LASTNAME`, `EMAIL`, `PASSWORD`, `CREATEDATE`, `UPDATEDATE`, `DELETEDATE`) VALUES
(1, 'Lisa', 'Nagl', 'lisa.nagl@mail.de', 'pw' '2018-12-28 17:20:26', NULL, NULL),
(2, 'Karl', 'Karlson', 'karl.karlson@mail.de', 'pw' '2018-12-28 17:21:52', NULL, NULL),
(3, 'Klara', 'Klar', 'klara.klar@mail.de', 'pw' '2018-12-28 17:21:52', NULL, NULL),
(4, 'Rosa', 'Rot', 'rosa.rot@mail.de', 'pw' '2018-12-28 17:29:30', NULL, NULL),



--
-- data for table `raw_person`
--

INSERT INTO `raw_person` (`ID`, `FIRSTNAME`, `LASTNAME`, `STATUS`, `CITY`, `BIRTHDAY`, `PHONE`, `GENDER`) VALUES
(1, 'Lisa', 'Nagl', 'bla bla blub', 'Teisnach', '1996-11-03', '123456789', 'w'),
(2, 'Karl', 'Karlson', 'Halloooo!', 'Deggendorf', '1970-05-09', '135689246', 'm'),
(3, 'Klara', 'Klar', 'Alles klar?', 'Erding', '1983-04-15', '135689246', 'w'),
(4, 'Rosa', 'Rot', 'hab die rosa Brille auf :D', '1992-10-10', '553819432', 'w'),


--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `raw_user`
--
ALTER TABLE `raw_user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `raw_user`
--
ALTER TABLE `raw_user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
