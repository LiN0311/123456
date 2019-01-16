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

INSERT INTO `raw_user` (`FIRSTNAME`, `LASTNAME`, `EMAIL`, `PASSWORD`) VALUES
('Lisa', 'Nagl', 'lisa.nagl@mail.de', 'pw'),
('Karl', 'Karlson', 'karl.karlson@mail.de', 'pw'),
('Klara', 'Klar', 'klara.klar@mail.de', 'pw'),
('Rosa', 'Rot', 'rosa.rot@mail.de', 'pw');

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

INSERT INTO `raw_person` (`FIRSTNAME`, `LASTNAME`, `STATUS`, `CITY`, `BIRTHDAY`, `PHONE`, `GENDER`) VALUES
('Lisa', 'Nagl', 'bla bla blub', 'Teisnach', '1996-11-03', '123456789', 'w'),
('Karl', 'Karlson', 'Halloooo!', 'Deggendorf', '1970-05-09', '135689246', 'm'),
('Klara', 'Klar', 'Alles klar?', 'Erding', '1983-04-15', '135689246', 'w'),
('Rosa', 'Rot', 'hab die rosa Brille auf :D', 'Erding', '1992-10-10', '553819432', 'w');
