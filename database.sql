-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 28, 2018 at 12:39 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ngo`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `activengoevents`
-- (See below for the actual view)
--
CREATE TABLE `activengoevents` (
`EID` int(11)
,`E_TITLE` varchar(100)
,`E_DESCRIPTION` varchar(2000)
,`location` varchar(100)
,`REQ_REGISTERED-REGISTERED` bigint(12)
);

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `AID` int(11) NOT NULL,
  `ANAME` varchar(50) DEFAULT NULL,
  `A_EMAIL` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`AID`, `ANAME`, `A_EMAIL`) VALUES
(1, 'Nicholas', 'lacus.Mauris@auctornon.edu'),
(5, 'Scott', 'feugiat.tellus@tellus.ca');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `DNID` int(11) NOT NULL,
  `DAMOUNT` int(11) DEFAULT NULL,
  `COLLECTED_AMT` int(11) NOT NULL,
  `NID` int(11) DEFAULT NULL,
  `D_TITLE` varchar(100) DEFAULT NULL,
  `D_DESCRIPTION` varchar(500) NOT NULL,
  `D_IMAGE` blob NOT NULL,
  `STATUS_D` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`DNID`, `DAMOUNT`, `COLLECTED_AMT`, `NID`, `D_TITLE`, `D_DESCRIPTION`, `D_IMAGE`, `STATUS_D`) VALUES
(1, 1000, 695, 2, 'Educate poor', 'Help pay for the books, stationery and the tuition fees of those who can not afford it.\r\n', '', '1'),
(2, 2000, 2000, 2, 'Help students', 'Help students by paying for their college/school fees, books and their travel expenses.', '', '0'),
(3, 3000, 864, 3, 'Ban plastic', 'Create awareness and motivate the citizens to stop using plastic in their day to day lives.', '', '1'),
(4, 1700, 147, 1, 'Help the Orphans', 'Help the orphans get all the basic facilities and amenities that you grew up with.', '', '1'),
(5, 3000, 3010, 4, 'Women Empowerment', 'Empower women and give them an opportunity to live fuller, happier and independent lives.', '', '1'),
(6, 3000, 3100, 3, 'Save Trees', 'Save trees is a slogan used to motivate people to save trees and plant more trees in the surrounding areas by spreading the importance of trees among people and reduce deforestation.', '', '1'),
(7, 3500, 3000, 2, 'Protect the Wildlife', 'Wildlife conservation is the practice of protecting wild plant and animal species and their habitat.', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `donationtransaction`
--

CREATE TABLE `donationtransaction` (
  `DTID` int(11) NOT NULL,
  `DNID` int(11) DEFAULT NULL,
  `DID` int(11) DEFAULT NULL,
  `amount` int(121) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donationtransaction`
--

INSERT INTO `donationtransaction` (`DTID`, `DNID`, `DID`, `amount`) VALUES
(1, 1, 2, 0),
(2, 2, 4, 0),
(3, 3, 9, 0),
(4, 1, 4, 0),
(5, 2, 9, 0),
(6, 3, 2, 0),
(15, 1, 1, 1),
(66, 5, 1, 1010),
(67, 1, 1, 300),
(71, 7, 1, 510),
(72, 2, 2, 2000),
(73, 1, 1, 300),
(74, 3, 1, 300),
(75, 1, 1, 300),
(76, 4, 1, 30),
(77, 4, 1, 3),
(78, 4, 1, 111),
(79, 4, 1, 1),
(80, 4, 1, 2);

--
-- Triggers `donationtransaction`
--
DELIMITER $$
CREATE TRIGGER `NewDonation` BEFORE INSERT ON `donationtransaction` FOR EACH ROW BEGIN
UPDATE donations set COLLECTED_AMT=(COLLECTED_AMT+NEW.amount) where (DNID=NEW.DNID) and (STATUS_D='1');
UPDATE donations set STATUS_D='0' where (COLLECTED_AMT>=DAMOUNT) and (DNID=NEW.DNID);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `DID` int(11) NOT NULL,
  `DNAME` varchar(50) DEFAULT NULL,
  `D_EMAIL` varchar(100) DEFAULT NULL,
  `DPHNUMBER` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`DID`, `DNAME`, `D_EMAIL`, `DPHNUMBER`) VALUES
(2, 'Bertha', 'Suspendisse.aliquet.sem@mauris.net', '0'),
(4, 'Kim', 'pharetra.felis.eget@cursus.edu', '0'),
(9, 'Grant', 'pede.ultrices@ullamcorperDuis.ca', '0');

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE `ngo` (
  `NID` int(11) NOT NULL,
  `ORGNAME` varchar(100) DEFAULT NULL,
  `OADDRESS` varchar(200) DEFAULT NULL,
  `N_EMAIL` varchar(100) DEFAULT NULL,
  `NPHNUMBER` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngo` (`NID`, `ORGNAME`, `OADDRESS`, `N_EMAIL`, `NPHNUMBER`) VALUES
(1, 'YourNGO', NULL, 'YourNGO@gmail.com', '0'),
(3, 'YourStoryNGO', NULL, 'YourStoryNGO@gmail.com', '0'),
(4, 'WeNGO', NULL, 'WeNGO@gmail.com', '0'),
(5, 'weCHANGE', 'Mulund', 'wechange@abc.com', '9869048889'),
(6, 'Kshamata', 'Thane', 'kshamata@a.com', '9969963912');

--
-- Triggers `ngo`
--
DELIMITER $$
CREATE TRIGGER `DeleteEvents` BEFORE DELETE ON `ngo` FOR EACH ROW BEGIN
DELETE FROM ngoevents WHERE NID=old.NID;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `ngoevents`
--

CREATE TABLE `ngoevents` (
  `EID` int(11) NOT NULL,
  `NID` int(11) DEFAULT NULL,
  `E_TITLE` varchar(100) DEFAULT NULL,
  `E_DESCRIPTION` varchar(2000) NOT NULL,
  `location` varchar(100) NOT NULL,
  `REQ_REGISTERED` int(11) NOT NULL,
  `REGISTERED` int(11) NOT NULL,
  `STATUS_N` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngoevents`
--

INSERT INTO `ngoevents` (`EID`, `NID`, `E_TITLE`, `E_DESCRIPTION`, `location`, `REQ_REGISTERED`, `REGISTERED`, `STATUS_N`) VALUES
(1, 1, 'Educate poor', ' HOME GLOBAL GOALS THE EXPO SPEAKERS 2018 PARTICIP...', 'kurla', 2, 0, '1'),
(2, 2, 'Help students', ' HOME GLOBAL GOALS THE EXPO SPEAKERS 2018 PARTICIP...', 'mulund', 2, 1, '1'),
(3, 3, 'Awareness', ' HOME GLOBAL GOALS THE EXPO SPEAKERS 2018 PARTICIP...', 'chembur', 2, 0, '1'),
(4, 2, 'Donate for food for all', ' HOME GLOBAL GOALS THE EXPO SPEAKERS 2018 PARTICIP...', 'bhandup', 2, 2, '0'),
(5, 2, 'Help Children Study', ' HOME GLOBAL GOALS THE EXPO SPEAKERS 2018 PARTICIP...', 'thane', 2, 1, '1'),
(6, 3, 'Women Empowerment', 'support the women empowerment moment in your area.', 'alibaug', 2, 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `ngoeventspartcpn`
--

CREATE TABLE `ngoeventspartcpn` (
  `EPID` int(11) NOT NULL,
  `EID` int(11) DEFAULT NULL,
  `VID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngoeventspartcpn`
--

INSERT INTO `ngoeventspartcpn` (`EPID`, `EID`, `VID`) VALUES
(2, 2, 6),
(3, 3, 7),
(4, 1, 8),
(5, 2, 10),
(6, 3, 10),
(7, 1, 6),
(8, 2, 7),
(9, 1, 10),
(10, 4, 6),
(11, 4, 7),
(12, 7, 6);

--
-- Triggers `ngoeventspartcpn`
--
DELIMITER $$
CREATE TRIGGER `NewVolunteer` BEFORE INSERT ON `ngoeventspartcpn` FOR EACH ROW BEGIN
UPDATE ngoevents set REGISTERED=(REGISTERED+1) where (EID=NEW.EID) and (STATUS_N='1');
UPDATE ngoevents set STATUS_N='0' where (REQ_REGISTERED<=REGISTERED) and (EID=NEW.EID);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `req_donations`
-- (See below for the actual view)
--
CREATE TABLE `req_donations` (
`DNID` int(11)
,`D_TITLE` varchar(100)
,`D_DESCRIPTION` varchar(500)
,`D_IMAGE` blob
,`DAMOUNT-COLLECTED_AMT` bigint(12)
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UID` int(11) NOT NULL,
  `UNAME` varchar(50) DEFAULT NULL,
  `U_EMAIL` varchar(100) DEFAULT NULL,
  `PASSWORD` varchar(20) NOT NULL DEFAULT '123456',
  `U_TYPE` enum('1','2','3','4') NOT NULL,
  `U_PHONE` varchar(10) NOT NULL,
  `U_FIRST_LOGIN` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UID`, `UNAME`, `U_EMAIL`, `PASSWORD`, `U_TYPE`, `U_PHONE`, `U_FIRST_LOGIN`) VALUES
(1, 'Nicholas', 'lacus.Mauris@auctornon.edu', '123456', '1', '9869038291', 0),
(2, 'Bertha', 'Suspendisse.aliquet.sem@mauris.net', '123456', '3', '7744818656', 0),
(3, 'Thomas', 'ut.mi.Duis@purusactellus.org', '123456', '2', '7021197094', 0),
(4, 'Kim', 'pharetra.felis.eget@cursus.edu', '123456', '3', '9869038291', 0),
(5, 'Scott', 'feugiat.tellus@tellus.ca', '123456', '1', '', 0),
(6, 'Althea', 'mauris.Morbi.non@nequeNullam.edu', '123456', '2', '', 0),
(7, 'Aspen', 'Suspendisse.tristique@turpisegestasFusce.com', '123456', '2', '', 0),
(8, 'Emmanuel', 'ipsum.nunc@sitamet.com', '123456', '2', '', 0),
(9, 'Grant', 'pede.ultrices@ullamcorperDuis.ca', '123456', '3', '', 0),
(10, 'Kenneth', 'egestas.ligula@infaucibus.edu', '123456', '2', '', 0),
(11, 'khushboo', 'khushboo@gmail.com', '1234556', '1', '8275116900', 0),
(12, 'nikhil', 'nikhil@gmail.com', '123456', '1', '9673334456', 0),
(13, 'Mohit', 'mohit@gmail.com', '123456', '1', '9511567897', 0),
(14, 'piyush', 'piyush@gmail.com', '123456', '1', '9673334456', 0),
(15, 'UJALA', 'ujala@gmail.com', '123456', '1', '9511738058', 0),
(16, 'Gayatri', 'gayatri@gmail.com', 'gayatri', '1', '9511738058', 0),
(17, 'akshay', 'akshay@gmail.com', 'akshay', '1', '8080335642', 0),
(18, 'akshay', 'shyam@gmail.com', '1234567', '1', '8080335642', 0),
(19, 'juhi', 'juhi@gmail.com', '123456', '1', '9673334456', 0),
(20, 'gayatri', 'gauaytri@gmailll.com', 'gayu', '1', '9323048363', 0),
(21, 'ujala', 'uju@gmail.com', 'ujala', '1', '9323048363', 0),
(22, 'divya', 'divya@gmail.com', 'divya', '1', '8329090492', 0),
(28, 'UJALA', 'J@JH.COM', '123456', '1', '9323048363', 0),
(29, 'yu', 'yu@yu.com', '123456', '1', '9323048363', 0),
(34, 'aa', 'aa@aa.com', '123456', '3', '9920697529', 0),
(35, 'admin', 'admin@a.com', 'abcdefg', '4', '9920697529', 0);

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `DeleteUser` BEFORE DELETE ON `users` FOR EACH ROW BEGIN
if(old.U_TYPE=1) THEN
	DELETE from donors where DID=old.UID;
ELSEIF(old.U_TYPE=2) THEN
	DELETE from volunteers where VID=old.UID;
ELSEIF(old.U_TYPE=3) THEN
	DELETE from ngo where NID=old.UID;
END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `NewUser` AFTER INSERT ON `users` FOR EACH ROW begin
if(new.U_TYPE=1) then
	insert into donors(DID, DNAME, D_EMAIL, DPHNUMBER) values(new.UID, new.UNAME, new.U_EMAIL, new.U_PHONE);
END IF;

IF(new.U_TYPE=2) then
	insert into volunteers(VID, VNAME, V_EMAIL, VPHNUMBER) values(new.UID, new.UNAME, new.U_EMAIL, new.U_PHONE);
END IF;

IF(new.U_TYPE=3) then
	insert into ngo(NID, ORGNAME, N_EMAIL, NPHNUMBER) values(new.UID, new.UNAME, new.U_EMAIL, new.U_PHONE);
END IF;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE `volunteers` (
  `VID` int(11) NOT NULL,
  `VNAME` varchar(50) DEFAULT NULL,
  `V_EMAIL` varchar(100) DEFAULT NULL,
  `VPHNUMBER` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteers`
--

INSERT INTO `volunteers` (`VID`, `VNAME`, `V_EMAIL`, `VPHNUMBER`) VALUES
(3, 'Thomas', 'ut.mi.Duis@purusactellus.org', '0'),
(6, 'Althea', 'mauris.Morbi.non@nequeNullam.edu', '0'),
(7, 'Aspen', 'Suspendisse.tristique@turpisegestasFusce.com', '0'),
(8, 'Emmanuel', 'ipsum.nunc@sitamet.com', '0'),
(10, 'Kenneth', 'egestas.ligula@infaucibus.edu', '0');

-- --------------------------------------------------------

--
-- Structure for view `activengoevents`
--
DROP TABLE IF EXISTS `activengoevents`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `activengoevents`  AS  select `ngoevents`.`EID` AS `EID`,`ngoevents`.`E_TITLE` AS `E_TITLE`,`ngoevents`.`E_DESCRIPTION` AS `E_DESCRIPTION`,`ngoevents`.`location` AS `location`,(`ngoevents`.`REQ_REGISTERED` - `ngoevents`.`REGISTERED`) AS `REQ_REGISTERED-REGISTERED` from `ngoevents` where (`ngoevents`.`STATUS_N` = '1') ;

-- --------------------------------------------------------

--
-- Structure for view `req_donations`
--
DROP TABLE IF EXISTS `req_donations`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `req_donations`  AS  select `donations`.`DNID` AS `DNID`,`donations`.`D_TITLE` AS `D_TITLE`,`donations`.`D_DESCRIPTION` AS `D_DESCRIPTION`,`donations`.`D_IMAGE` AS `D_IMAGE`,(`donations`.`DAMOUNT` - `donations`.`COLLECTED_AMT`) AS `DAMOUNT-COLLECTED_AMT` from `donations` where (`donations`.`STATUS_D` = '1') ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`AID`),
  ADD UNIQUE KEY `ANAME` (`ANAME`),
  ADD UNIQUE KEY `A_EMAIL` (`A_EMAIL`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`DNID`),
  ADD KEY `NID` (`NID`);

--
-- Indexes for table `donationtransaction`
--
ALTER TABLE `donationtransaction`
  ADD PRIMARY KEY (`DTID`),
  ADD KEY `DNID` (`DNID`),
  ADD KEY `DNID_2` (`DNID`),
  ADD KEY `DID` (`DID`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`DID`),
  ADD UNIQUE KEY `D_EMAIL` (`D_EMAIL`);

--
-- Indexes for table `ngo`
--
ALTER TABLE `ngo`
  ADD PRIMARY KEY (`NID`),
  ADD UNIQUE KEY `N_EMAIL` (`N_EMAIL`);

--
-- Indexes for table `ngoevents`
--
ALTER TABLE `ngoevents`
  ADD PRIMARY KEY (`EID`),
  ADD KEY `NID` (`NID`);

--
-- Indexes for table `ngoeventspartcpn`
--
ALTER TABLE `ngoeventspartcpn`
  ADD PRIMARY KEY (`EPID`),
  ADD KEY `VID` (`VID`),
  ADD KEY `EID` (`EID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UID`),
  ADD UNIQUE KEY `U_EMAIL` (`U_EMAIL`);

--
-- Indexes for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD PRIMARY KEY (`VID`),
  ADD UNIQUE KEY `V_EMAIL` (`V_EMAIL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `AID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `DNID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `donationtransaction`
--
ALTER TABLE `donationtransaction`
  MODIFY `DTID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `DID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ngo`
--
ALTER TABLE `ngo`
  MODIFY `NID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ngoevents`
--
ALTER TABLE `ngoevents`
  MODIFY `EID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ngoeventspartcpn`
--
ALTER TABLE `ngoeventspartcpn`
  MODIFY `EPID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `volunteers`
--
ALTER TABLE `volunteers`
  MODIFY `VID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
