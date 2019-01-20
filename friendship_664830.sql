-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 20. Jan 2019 um 22:44
-- Server-Version: 10.1.36-MariaDB
-- PHP-Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `friendship_664830`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `raw_person`
--

CREATE TABLE `raw_person` (
  `ID` int(11) NOT NULL,
  `FIRSTNAME` varchar(30) NOT NULL,
  `LASTNAME` varchar(30) NOT NULL,
  `STATUS` varchar(300) NOT NULL,
  `CITY` varchar(30) NOT NULL,
  `BIRTHDAY` date NOT NULL,
  `PHONE` int(11) NOT NULL,
  `GENDER` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `raw_person`
--

INSERT INTO `raw_person` (`ID`, `FIRSTNAME`, `LASTNAME`, `STATUS`, `CITY`, `BIRTHDAY`, `PHONE`, `GENDER`) VALUES
(1, 'Lisa', 'Nagl', 'bla bla blub', 'Teisnach', '1996-11-03', 123456789, 'w'),
(2, 'Karl', 'Karlson', 'Halloooo!', 'Deggendorf', '1970-05-09', 135689246, 'm'),
(3, 'Klara', 'Klar', 'Alles klar?', 'Erding', '1983-04-15', 975318632, 'w'),
(4, 'Rosa', 'Rot', 'hab die rosa Brille auf :D', 'München', '1992-10-10', 553819432, 'w'),
(5, 'Maria', 'Musterfrau', 'let it snow', 'Berlin', '1998-06-18', 876123567, 'w'),
(6, 'Hermann', 'Mann', ':-)', 'Augsburg', '1965-03-16', 986222563, 'm'),
(7, 'Julia', 'Bauer', '<3', 'Salzburg', '1996-12-17', 667443222, 'w'),
(8, 'Julian', 'Bauer', ':D :D :D', 'Salzburg', '1996-12-17', 777998533, 'm');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `raw_user`
--

CREATE TABLE `raw_user` (
  `ID` int(11) NOT NULL,
  `FIRSTNAME` varchar(30) NOT NULL,
  `LASTNAME` varchar(30) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  `CREATEDATE` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UPDATEDATE` datetime DEFAULT NULL,
  `DELETEDATE` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `raw_user`
--

INSERT INTO `raw_user` (`ID`, `FIRSTNAME`, `LASTNAME`, `EMAIL`, `PASSWORD`, `CREATEDATE`, `UPDATEDATE`, `DELETEDATE`) VALUES
(1, 'Lisa', 'Nagl', 'lisa.nagl@mail.com', 'pwln', '2017-01-12 22:30:04', NULL, NULL),
(2, 'Karl', 'Karlson', 'karl.karlson@mail.com', 'pwkk', '2017-01-12 22:38:47', NULL, NULL),
(3, 'Klara', 'Klar', 'klara.klar@mail.com', 'pwkk', '2017-01-13 23:12:38', NULL, NULL),
(4, 'Rosa', 'Rot', 'rosa.rot@mail.com', 'pwrr', '2017-01-13 23:13:42', NULL, NULL),
(5, 'Johanna', 'Baum', 'johanna.baum@mail.com', 'pwjb', '2019-01-20 20:47:29', NULL, NULL),
(6, 'Max', 'Mustermann', 'max.mustermann@mail.com', 'pwmm', '2019-01-20 20:47:29', NULL, NULL);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `raw_person`
--
ALTER TABLE `raw_person`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indizes für die Tabelle `raw_user`
--
ALTER TABLE `raw_user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD UNIQUE KEY `ID_2` (`ID`),
  ADD UNIQUE KEY `ID_3` (`ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `raw_person`
--
ALTER TABLE `raw_person`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
