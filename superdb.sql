
/*
 * raw_user
 */
CREATE TABLE IF NOT EXISTS `raw_user` (
  `ID` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `FIRSTNAME` varchar(30) NOT NULL,
  `LASTNAME` varchar(30) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PASSWORD` varchar(20) DEFAULT NULL,
  `CREATEDATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UPDATEDATE` TIMESTAMP NULL DEFAULT NULL,
  `DELETEDATE` TIMESTAMP NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

truncate `raw_user`;

INSERT INTO `raw_user` (`ID`, `FIRSTNAME`, `LASTNAME`, `EMAIL`, `PASSWORD`, `CREATEDATE`, `UPDATEDATE`, `DELETEDATE`) VALUES
(1, 'Lisa', 'Nagl', 'lisa.nagl@mail.com', 'pwln', '2017-01-12 22:30:04', NULL, NULL),
(2, 'Karl', 'Karlson', 'karl.karlson@mail.com', 'pwkk', '2017-01-12 22:38:47', NULL, NULL),
(3, 'Klara', 'Klar', 'klara.klar@mail.com', 'pwkk', '2017-01-13 23:12:38', NULL, NULL),
(4, 'Rosa', 'Rot', 'rosa.rot@mail.com', 'pwrr', '2017-01-13 23:13:42', NULL, NULL),
(5, 'Johanna', 'Baum', 'johanna.baum@mail.com', 'pwjb', '2019-01-20 19:57:11', NULL, NULL),
(6, 'Max', 'Mustermann', 'max.mustermann@mail.com', 'pwmm', '2019-01-20 19:57:11', NULL, NULL);


/*
 * raw_person
 */
CREATE TABLE IF NOT EXISTS `raw_person` (
  `ID` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `FIRSTNAME` varchar(30) NOT NULL,
  `LASTNAME` varchar(30) NOT NULL,
  `STATUS` varchar(300) NOT NULL,
  `CITY` varchar(30) NOT NULL,
  `BIRTHDAY` date NOT NULL,
  `PHONE` int(11) NOT NULL,
  `GENDER` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

TRUNCATE `raw_person`;

INSERT INTO `raw_person` (`ID`, `FIRSTNAME`, `LASTNAME`, `STATUS`, `CITY`, `BIRTHDAY`, `PHONE`, `GENDER`) VALUES
(1, 'Lisa', 'Nagl', 'bla bla blub', 'Teisnach', '1996-11-03', 123456789, 'w'),
(2, 'Karl', 'Karlson', 'Halloooo!', 'Deggendorf', '1970-05-09', 135689246, 'm'),
(3, 'Klara', 'Klar', 'Alles klar?', 'Erding', '1983-04-15', 975318632, 'w'),
(4, 'Rosa', 'Rot', 'hab die rosa Brille auf :D', 'München', '1992-10-10', 553819432, 'w'),
(5, 'Maria', 'Musterfrau', 'let it snow', 'Berlin', '1998-06-18', 876123567, 'w'),
(6, 'Hermann', 'Mann', ':-)', 'Augsburg', '1965-03-16', 986222563, 'm'),
(7, 'Julia', 'Bauer', '<3', 'Salzburg', '1996-12-17', 667443222, 'w'),
(8, 'Julian', 'Bauer', ':D :D :D', 'Salzburg', '1996-12-17', 777998533, 'm');
