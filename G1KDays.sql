-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 21, 2017 at 10:06 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `G1KDays`
--

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `districtId` int(11) NOT NULL,
  `districtName` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`districtId`, `districtName`) VALUES
(1, 'Jumla'),
(2, 'Parsa'),
(3, 'Kapilbastu'),
(4, 'Bajura'),
(5, 'Panchthar');

-- --------------------------------------------------------

--
-- Table structure for table `event1`
--

CREATE TABLE `event1` (
  `Id` int(11) NOT NULL,
  `supervisorId` int(11) DEFAULT NULL,
  `supervisorPos` varchar(45) DEFAULT NULL,
  `date` datetime NOT NULL,
  `chairperson` varchar(45) NOT NULL,
  `maleNumber` int(11) NOT NULL,
  `femaleNumber` int(11) NOT NULL,
  `officeRepresented` varchar(90) NOT NULL,
  `agenda` varchar(300) NOT NULL,
  `decision` varchar(300) NOT NULL,
  `eventId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `event2`
--

CREATE TABLE `event2` (
  `Id` int(11) NOT NULL,
  `eventId` int(11) DEFAULT NULL,
  `supervisorId` int(11) NOT NULL,
  `supervisorPos` varchar(45) NOT NULL,
  `date` datetime NOT NULL,
  `startDate` datetime NOT NULL,
  `endDate` datetime NOT NULL,
  `maleNumber` int(11) NOT NULL,
  `femaleNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `event2participants`
--

CREATE TABLE `event2participants` (
  `Id` int(11) NOT NULL,
  `participantId` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `addres` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `event3`
--

CREATE TABLE `event3` (
  `Id` int(11) NOT NULL,
  `eventId` int(11) DEFAULT NULL,
  `supervisorId` int(11) NOT NULL,
  `supervisorPos` varchar(45) NOT NULL,
  `date` datetime DEFAULT NULL,
  `chaiperson` varchar(45) DEFAULT NULL,
  `maleNumber` varchar(45) DEFAULT NULL,
  `femaleNumber` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `event3topic`
--

CREATE TABLE `event3topic` (
  `topicId` int(11) NOT NULL,
  `Id` int(11) NOT NULL,
  `topic` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `event4`
--

CREATE TABLE `event4` (
  `Id` int(11) NOT NULL,
  `eventId` int(11) DEFAULT NULL,
  `supervisorId` int(11) NOT NULL,
  `supervisorPos` varchar(45) NOT NULL,
  `date` datetime NOT NULL,
  `chairPerson` varchar(45) NOT NULL,
  `maleNumber` int(11) DEFAULT NULL,
  `femaleNumber` int(11) DEFAULT NULL,
  `offices` varchar(100) NOT NULL,
  `agenda` varchar(300) NOT NULL,
  `decision` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `event5`
--

CREATE TABLE `event5` (
  `Id` int(11) NOT NULL,
  `eventId` int(11) DEFAULT NULL,
  `date` datetime NOT NULL,
  `supervisorId` int(11) NOT NULL,
  `supervisorPos` varchar(45) NOT NULL,
  `startDate` datetime DEFAULT NULL,
  `endDate` datetime DEFAULT NULL,
  `maleNumber` int(11) DEFAULT NULL,
  `femaleNumber` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `event5participants`
--

CREATE TABLE `event5participants` (
  `Id` int(11) NOT NULL,
  `participantId` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `event6`
--

CREATE TABLE `event6` (
  `Id` int(11) NOT NULL,
  `eventId` int(11) DEFAULT NULL,
  `supervisorId` int(11) NOT NULL,
  `supervisorPos` varchar(45) NOT NULL,
  `date` datetime NOT NULL,
  `startingDate` datetime NOT NULL,
  `endDate` datetime NOT NULL,
  `totalParticipants` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `event6participants`
--

CREATE TABLE `event6participants` (
  `id` int(11) NOT NULL,
  `participantId` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event7a`
--

CREATE TABLE `event7a` (
  `Id` int(11) NOT NULL,
  `eventId` int(11) DEFAULT NULL,
  `supervisorId` int(11) DEFAULT NULL,
  `supervisorPos` varchar(45) NOT NULL,
  `GName` varchar(256) NOT NULL,
  `Date` date NOT NULL,
  `FCHVName` varchar(256) NOT NULL,
  `ContactNumber` int(11) NOT NULL,
  `WardNumber` int(11) NOT NULL,
  `Village` varchar(256) NOT NULL,
  `MaleParticipants` int(11) NOT NULL,
  `FemaleParticipants` int(11) NOT NULL,
  `Topics` varchar(256) NOT NULL,
  `Questions` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event7b`
--

CREATE TABLE `event7b` (
  `Id` int(11) NOT NULL,
  `eventId` int(11) DEFAULT NULL,
  `supervisorId` int(11) DEFAULT NULL,
  `supervisorPos` varchar(45) NOT NULL,
  `GroupName` varchar(256) NOT NULL,
  `Date` date NOT NULL,
  `SocialMobilizerNumber` int(11) NOT NULL,
  `ContactNumber` int(11) NOT NULL,
  `WardNumber` int(11) NOT NULL,
  `Village` varchar(256) NOT NULL,
  `MaleParticipants` int(11) NOT NULL,
  `FemaleParticipants` int(11) NOT NULL,
  `Topics` varchar(256) NOT NULL,
  `Questions` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event7c`
--

CREATE TABLE `event7c` (
  `Id` int(11) NOT NULL,
  `eventId` int(11) DEFAULT NULL,
  `supervisorId` int(11) DEFAULT NULL,
  `GroupName` varchar(256) NOT NULL,
  `Date` date NOT NULL,
  `SocialMobilizerName` varchar(256) NOT NULL,
  `ContactNumber` int(11) NOT NULL,
  `WardNumber` int(11) NOT NULL,
  `Village` varchar(256) NOT NULL,
  `MaleParticipants` int(11) NOT NULL,
  `FemaleParticipants` int(11) NOT NULL,
  `Topics` varchar(256) NOT NULL,
  `Questions` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event7d`
--

CREATE TABLE `event7d` (
  `Id` int(11) NOT NULL,
  `eventId` int(11) DEFAULT NULL,
  `supervisorId` int(11) DEFAULT NULL,
  `supervisorPos` varchar(45) DEFAULT NULL,
  `GroupName` varchar(256) NOT NULL,
  `Date` date NOT NULL,
  `ChairPersonName` varchar(256) NOT NULL,
  `ContactNumber` int(11) NOT NULL,
  `WardNumber` int(11) NOT NULL,
  `Village` varchar(256) NOT NULL,
  `MaleParticipants` int(11) NOT NULL,
  `FemaleParticipants` int(11) NOT NULL,
  `Topics` varchar(256) NOT NULL,
  `Questions` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event7e`
--

CREATE TABLE `event7e` (
  `Id` int(11) NOT NULL,
  `eventId` int(11) DEFAULT NULL,
  `supervisorId` int(11) DEFAULT NULL,
  `supervisorPos` varchar(45) DEFAULT NULL,
  `GroupName` varchar(256) NOT NULL,
  `Date` date NOT NULL,
  `ChairPersonName` varchar(256) NOT NULL,
  `ContactNumber` int(11) NOT NULL,
  `WardNumber` int(11) NOT NULL,
  `Village` varchar(256) NOT NULL,
  `MaleParticipants` int(11) NOT NULL,
  `FemaleParticipants` int(11) NOT NULL,
  `Topics` varchar(256) NOT NULL,
  `Questions` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event7f`
--

CREATE TABLE `event7f` (
  `Id` int(11) NOT NULL,
  `eventId` int(11) DEFAULT NULL,
  `supervisorId` int(11) DEFAULT NULL,
  `supervisorPos` varchar(45) DEFAULT NULL,
  `GroupName` varchar(256) NOT NULL,
  `Date` date NOT NULL,
  `ChairPersonName` varchar(256) NOT NULL,
  `ContactNumber` int(11) NOT NULL,
  `WardNumber` int(11) NOT NULL,
  `Village` varchar(256) NOT NULL,
  `MaleParticipants` int(11) NOT NULL,
  `FemaleParticipants` int(11) NOT NULL,
  `Topics` varchar(256) NOT NULL,
  `Questions` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event7g`
--

CREATE TABLE `event7g` (
  `Id` int(11) NOT NULL,
  `eventId` int(11) DEFAULT NULL,
  `supervisorId` int(11) DEFAULT NULL,
  `supervisorPos` varchar(45) DEFAULT NULL,
  `FacilityName` varchar(256) NOT NULL,
  `Date` date NOT NULL,
  `InchargeName` varchar(256) NOT NULL,
  `ContactNumber` int(11) NOT NULL,
  `WardNumber` int(11) NOT NULL,
  `Village` varchar(256) NOT NULL,
  `MaleParticipants` int(11) NOT NULL,
  `FemaleParticipants` int(11) NOT NULL,
  `Topics` varchar(256) NOT NULL,
  `Decisions` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event7h`
--

CREATE TABLE `event7h` (
  `Id` int(11) NOT NULL,
  `eventId` int(11) DEFAULT NULL,
  `supervisorId` int(11) DEFAULT NULL,
  `GroupName` varchar(256) NOT NULL,
  `Date` date NOT NULL,
  `ChairPersonName` varchar(256) NOT NULL,
  `ContactNumber` int(11) NOT NULL,
  `WardNumber` int(11) NOT NULL,
  `Village` varchar(256) NOT NULL,
  `MaleParticipants` int(11) NOT NULL,
  `FemaleParticipants` int(11) NOT NULL,
  `Topics` varchar(256) NOT NULL,
  `Decisions` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event8`
--

CREATE TABLE `event8` (
  `Id` int(11) NOT NULL,
  `eventId` int(11) DEFAULT NULL,
  `supervisorId` int(11) NOT NULL,
  `supervisorPos` varchar(45) NOT NULL,
  `place` varchar(60) NOT NULL,
  `date` datetime DEFAULT NULL,
  `club` varchar(45) DEFAULT NULL,
  `wardNumber` varchar(45) DEFAULT NULL,
  `tole` varchar(45) DEFAULT NULL,
  `maleNumber` varchar(45) DEFAULT NULL,
  `femaleNumber` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `event8topic`
--

CREATE TABLE `event8topic` (
  `id` int(11) NOT NULL,
  `topicId` int(11) NOT NULL,
  `topic` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event9`
--

CREATE TABLE `event9` (
  `Id` int(11) NOT NULL,
  `eventId` int(11) DEFAULT NULL,
  `supervisorId` int(11) NOT NULL,
  `supervisorPos` varchar(45) NOT NULL,
  `date` datetime NOT NULL,
  `wardNumber` int(11) NOT NULL,
  `village` varchar(45) NOT NULL,
  `presented` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `event9Person`
--

CREATE TABLE `event9Person` (
  `id` int(11) NOT NULL,
  `personId` int(11) NOT NULL,
  `personName` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event9topic`
--

CREATE TABLE `event9topic` (
  `id` int(11) NOT NULL,
  `topicId` int(11) NOT NULL,
  `topic` varchar(90) NOT NULL,
  `advice` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event10`
--

CREATE TABLE `event10` (
  `Id` int(11) NOT NULL,
  `eventId` int(11) DEFAULT NULL,
  `event10Name` varchar(10) NOT NULL,
  `supervisorId` int(11) NOT NULL,
  `supervisorPos` varchar(45) NOT NULL,
  `date` datetime DEFAULT NULL,
  `wardNumber` int(11) DEFAULT NULL,
  `village` varchar(45) DEFAULT NULL,
  `maleNumber` int(11) DEFAULT NULL,
  `femaleNumber` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `event10topic`
--

CREATE TABLE `event10topic` (
  `id` int(11) NOT NULL,
  `topicId` int(11) NOT NULL,
  `topic` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event11`
--

CREATE TABLE `event11` (
  `Id` int(11) NOT NULL,
  `eventId` int(11) DEFAULT NULL,
  `supervisorId` int(11) NOT NULL,
  `supervisorPos` varchar(45) NOT NULL,
  `date` datetime NOT NULL,
  `place` varchar(45) DEFAULT NULL,
  `topic` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `event12`
--

CREATE TABLE `event12` (
  `Id` int(11) NOT NULL,
  `eventId` int(11) DEFAULT NULL,
  `supervisorId` int(11) NOT NULL,
  `supervisorPos` varchar(45) NOT NULL,
  `flyer1` int(11) DEFAULT NULL,
  `flyer2` int(11) DEFAULT NULL,
  `flyer3` int(11) DEFAULT NULL,
  `flyer4` int(11) DEFAULT NULL,
  `flyer5` int(11) DEFAULT NULL,
  `babyBibs` int(11) DEFAULT NULL,
  `towel` int(11) DEFAULT NULL,
  `poster3D` int(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventId` int(11) NOT NULL,
  `eventName` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mother`
--

CREATE TABLE `mother` (
  `motherId` int(11) NOT NULL DEFAULT '0',
  `motherName` varchar(45) NOT NULL,
  `motherAge` varchar(45) NOT NULL,
  `motherContact` varchar(45) NOT NULL,
  `supervisorId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `phase1`
--

CREATE TABLE `phase1` (
  `motherId` int(11) NOT NULL,
  `phaseAnswer1` varchar(45) DEFAULT NULL,
  `phaseAnswer2` varchar(45) DEFAULT NULL,
  `phaseAnswer3` varchar(45) DEFAULT NULL,
  `phaseAnswer4` varchar(45) DEFAULT NULL,
  `phaseAnswer5` varchar(45) DEFAULT NULL,
  `phaseAnswer6` varchar(45) DEFAULT NULL,
  `phaseAnswer7` varchar(45) DEFAULT NULL,
  `phaseAnswer8` varchar(45) DEFAULT NULL,
  `phaseAnswer9` varchar(45) DEFAULT NULL,
  `phaseAnswer10` varchar(45) DEFAULT NULL,
  `phaseAnswer11` varchar(45) DEFAULT NULL,
  `phaseAnswer12` varchar(45) DEFAULT NULL,
  `phaseAnswer13` varchar(45) DEFAULT NULL,
  `phaseAnswer14` varchar(45) DEFAULT NULL,
  `phaseAnswer15` varchar(45) DEFAULT NULL,
  `phaseAnswer16` varchar(45) DEFAULT NULL,
  `phaseAnswer17` varchar(45) DEFAULT NULL,
  `phaseAnswer18` varchar(45) DEFAULT NULL,
  `phaseAnswer19` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `phase2`
--

CREATE TABLE `phase2` (
  `motherId` int(11) NOT NULL,
  `phaseAnswer1` varchar(45) NOT NULL,
  `phaseAnswer2` varchar(45) NOT NULL,
  `phaseAnswer3` varchar(45) NOT NULL,
  `phaseAnswer4` varchar(45) NOT NULL,
  `phaseAnswer5` varchar(45) NOT NULL,
  `phaseAnswer6` varchar(45) NOT NULL,
  `phaseAnswer7` varchar(45) NOT NULL,
  `phaseAnswer8` varchar(45) NOT NULL,
  `phaseAnswer9` varchar(45) NOT NULL,
  `phaseAnswer10` varchar(45) NOT NULL,
  `phaseAnswer11` varchar(45) NOT NULL,
  `phaseAnswer12` varchar(45) NOT NULL,
  `phaseAnswer13` varchar(45) NOT NULL,
  `phaseAnswer14` varchar(45) NOT NULL,
  `phaseAnswer15` varchar(45) NOT NULL,
  `phaseAnswer16` varchar(45) NOT NULL,
  `phaseAnswer17` varchar(45) NOT NULL,
  `phaseAnswer18` varchar(45) NOT NULL,
  `phaseAnswer19` varchar(45) NOT NULL,
  `phaseAnswer20` varchar(45) NOT NULL,
  `phaseAnswer21` varchar(45) NOT NULL,
  `phaseAnswer22` varchar(45) NOT NULL,
  `phaseAnswer23` varchar(45) NOT NULL,
  `phaseAnswer24` varchar(45) NOT NULL,
  `phaseAnswer25` varchar(45) NOT NULL,
  `phaseAnswer26` varchar(45) NOT NULL,
  `phaseAnswer27` varchar(45) NOT NULL,
  `phaseAnswer28` varchar(45) NOT NULL,
  `phaseAnswer29` varchar(45) NOT NULL,
  `phaseAnswer30` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `phase3`
--

CREATE TABLE `phase3` (
  `motherId` int(11) NOT NULL,
  `phaseAnswer1` varchar(45) NOT NULL,
  `phaseAnswer2` varchar(45) NOT NULL,
  `phaseAnswer3` varchar(45) NOT NULL,
  `phaseAnswer4` varchar(45) NOT NULL,
  `phaseAnswer5` varchar(45) NOT NULL,
  `phaseAnswer6` varchar(45) NOT NULL,
  `phaseAnswer7` varchar(45) NOT NULL,
  `phaseAnswer8` varchar(45) NOT NULL,
  `phaseAnswer9` varchar(45) NOT NULL,
  `phaseAnswer10` varchar(45) NOT NULL,
  `phaseAnswer11` varchar(45) NOT NULL,
  `phaseAnswer12` varchar(45) NOT NULL,
  `phaseAnswer13` varchar(45) NOT NULL,
  `phaseAnswer14` varchar(45) NOT NULL,
  `phaseAnswer15` varchar(45) NOT NULL,
  `phaseAnswer16` varchar(45) NOT NULL,
  `phaseAnswer17` varchar(45) NOT NULL,
  `phaseAnswer18` varchar(45) NOT NULL,
  `phaseAnswer19` varchar(45) NOT NULL,
  `phaseAnswer20` varchar(45) NOT NULL,
  `phaseAnswer21` varchar(45) NOT NULL,
  `phaseAnswer22` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `phase4`
--

CREATE TABLE `phase4` (
  `motherId` int(11) NOT NULL,
  `phaseAnswer1` varchar(45) NOT NULL,
  `phaseAnswer2` varchar(45) NOT NULL,
  `phaseAnswer3` varchar(45) NOT NULL,
  `phaseAnswer4` varchar(45) NOT NULL,
  `phaseAnswer5` varchar(45) NOT NULL,
  `phaseAnswer6` varchar(45) NOT NULL,
  `phaseAnswer7` varchar(45) NOT NULL,
  `phaseAnswer8` varchar(45) NOT NULL,
  `phaseAnswer9` varchar(45) NOT NULL,
  `phaseAnswer10` varchar(45) NOT NULL,
  `phaseAnswer11` varchar(45) NOT NULL,
  `phaseAnswer12` varchar(45) NOT NULL,
  `phaseAnswer13` varchar(45) NOT NULL,
  `phaseAnswer14` varchar(45) NOT NULL,
  `phaseAnswer15` varchar(45) NOT NULL,
  `phaseAnswer16` varchar(45) NOT NULL,
  `phaseAnswer17` varchar(45) NOT NULL,
  `phaseAnswer18` varchar(45) NOT NULL,
  `phaseAnswer19` varchar(45) NOT NULL,
  `phaseAnswer20` varchar(45) NOT NULL,
  `phaseAnswer21` varchar(45) NOT NULL,
  `phaseAnswer22` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `supervisorId` int(11) NOT NULL,
  `eventId` int(11) NOT NULL,
  `supervisorName` varchar(60) NOT NULL,
  `supervisorPhone` bigint(10) NOT NULL,
  `usernameText` varchar(45) NOT NULL,
  `passwordText` varchar(45) NOT NULL,
  `districtId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supervisor`
--

INSERT INTO `supervisor` (`supervisorId`, `eventId`, `supervisorName`, `supervisorPhone`, `usernameText`, `passwordText`, `districtId`) VALUES
(1, 0, 'Indira Timilsina', 9849000000, 'JUM_INDIRA', 'JUM_INDIRA', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vdc`
--

CREATE TABLE `vdc` (
  `vdcId` int(11) NOT NULL,
  `vdcName` varchar(45) NOT NULL,
  `vdcHealthPost` varchar(45) NOT NULL,
  `districtId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`districtId`);

--
-- Indexes for table `event1`
--
ALTER TABLE `event1`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `supervisorId_idx` (`supervisorId`),
  ADD KEY `eventId_idx` (`eventId`);

--
-- Indexes for table `event2`
--
ALTER TABLE `event2`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `supId_idx` (`supervisorId`),
  ADD KEY `eventId_idx` (`eventId`);

--
-- Indexes for table `event2participants`
--
ALTER TABLE `event2participants`
  ADD PRIMARY KEY (`participantId`),
  ADD KEY `Id` (`Id`);

--
-- Indexes for table `event3`
--
ALTER TABLE `event3`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `supervisorId` (`supervisorId`),
  ADD KEY `eventId_idx` (`eventId`);

--
-- Indexes for table `event3topic`
--
ALTER TABLE `event3topic`
  ADD PRIMARY KEY (`topicId`),
  ADD KEY `Id` (`Id`);

--
-- Indexes for table `event4`
--
ALTER TABLE `event4`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `supervisorId` (`supervisorId`),
  ADD KEY `eventId` (`eventId`);

--
-- Indexes for table `event5`
--
ALTER TABLE `event5`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `supervisorId` (`supervisorId`),
  ADD KEY `eventId` (`eventId`);

--
-- Indexes for table `event5participants`
--
ALTER TABLE `event5participants`
  ADD PRIMARY KEY (`participantId`),
  ADD KEY `Id` (`Id`);

--
-- Indexes for table `event6`
--
ALTER TABLE `event6`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `supervisorId` (`supervisorId`),
  ADD KEY `eventId` (`eventId`);

--
-- Indexes for table `event6participants`
--
ALTER TABLE `event6participants`
  ADD PRIMARY KEY (`participantId`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `event7a`
--
ALTER TABLE `event7a`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `eventId` (`eventId`),
  ADD KEY `supervisorId` (`supervisorId`);

--
-- Indexes for table `event7b`
--
ALTER TABLE `event7b`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `eventId` (`eventId`),
  ADD KEY `supervisorId` (`supervisorId`);

--
-- Indexes for table `event7c`
--
ALTER TABLE `event7c`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `eventId` (`eventId`),
  ADD KEY `supervisorId` (`supervisorId`);

--
-- Indexes for table `event7d`
--
ALTER TABLE `event7d`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `eventId` (`eventId`),
  ADD KEY `supervisorId` (`supervisorId`);

--
-- Indexes for table `event7e`
--
ALTER TABLE `event7e`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `eventId` (`eventId`),
  ADD KEY `supervisorId` (`supervisorId`);

--
-- Indexes for table `event7f`
--
ALTER TABLE `event7f`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `eventId` (`eventId`),
  ADD KEY `supervisorId` (`supervisorId`);

--
-- Indexes for table `event7g`
--
ALTER TABLE `event7g`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `eventId` (`eventId`),
  ADD KEY `supervisorId` (`supervisorId`);

--
-- Indexes for table `event7h`
--
ALTER TABLE `event7h`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `eventId` (`eventId`),
  ADD KEY `supervisorId` (`supervisorId`);

--
-- Indexes for table `event8`
--
ALTER TABLE `event8`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `supervisorId` (`supervisorId`),
  ADD KEY `eventId` (`eventId`);

--
-- Indexes for table `event8topic`
--
ALTER TABLE `event8topic`
  ADD PRIMARY KEY (`topicId`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `event9`
--
ALTER TABLE `event9`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `supervisorId` (`supervisorId`),
  ADD KEY `eventId_idx` (`eventId`);

--
-- Indexes for table `event9Person`
--
ALTER TABLE `event9Person`
  ADD PRIMARY KEY (`personId`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `event9topic`
--
ALTER TABLE `event9topic`
  ADD PRIMARY KEY (`topicId`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `event10`
--
ALTER TABLE `event10`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `supervisorId` (`supervisorId`),
  ADD KEY `eventId` (`eventId`);

--
-- Indexes for table `event10topic`
--
ALTER TABLE `event10topic`
  ADD PRIMARY KEY (`topicId`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `event11`
--
ALTER TABLE `event11`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `supervisorId` (`supervisorId`),
  ADD KEY `eventId` (`eventId`);

--
-- Indexes for table `event12`
--
ALTER TABLE `event12`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `supervisorId` (`supervisorId`),
  ADD KEY `eventId` (`eventId`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventId`);

--
-- Indexes for table `mother`
--
ALTER TABLE `mother`
  ADD PRIMARY KEY (`motherId`),
  ADD KEY `supId_idx` (`supervisorId`);

--
-- Indexes for table `phase1`
--
ALTER TABLE `phase1`
  ADD KEY `motherId_idx` (`motherId`);

--
-- Indexes for table `phase2`
--
ALTER TABLE `phase2`
  ADD KEY `motherId_idx` (`motherId`);

--
-- Indexes for table `phase3`
--
ALTER TABLE `phase3`
  ADD KEY `mId_idx` (`motherId`);

--
-- Indexes for table `phase4`
--
ALTER TABLE `phase4`
  ADD KEY `motherId_idx` (`motherId`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`supervisorId`),
  ADD KEY `districtId_idx` (`districtId`);

--
-- Indexes for table `vdc`
--
ALTER TABLE `vdc`
  ADD PRIMARY KEY (`vdcId`),
  ADD KEY `districtId_idx` (`districtId`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event1`
--
ALTER TABLE `event1`
  ADD CONSTRAINT `eventId` FOREIGN KEY (`eventId`) REFERENCES `events` (`eventId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `supervisorId` FOREIGN KEY (`supervisorId`) REFERENCES `supervisor` (`supervisorId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `event2`
--
ALTER TABLE `event2`
  ADD CONSTRAINT `eventIds` FOREIGN KEY (`eventId`) REFERENCES `events` (`eventId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `supe` FOREIGN KEY (`supervisorId`) REFERENCES `supervisor` (`supervisorId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `event2participants`
--
ALTER TABLE `event2participants`
  ADD CONSTRAINT `event2participants_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `event2` (`Id`);

--
-- Constraints for table `event3`
--
ALTER TABLE `event3`
  ADD CONSTRAINT `event3_ibfk_1` FOREIGN KEY (`supervisorId`) REFERENCES `supervisor` (`supervisorId`),
  ADD CONSTRAINT `event3_ibfk_2` FOREIGN KEY (`eventId`) REFERENCES `events` (`eventId`);

--
-- Constraints for table `event3topic`
--
ALTER TABLE `event3topic`
  ADD CONSTRAINT `event3topic_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `event3` (`Id`);

--
-- Constraints for table `event4`
--
ALTER TABLE `event4`
  ADD CONSTRAINT `event4_ibfk_1` FOREIGN KEY (`supervisorId`) REFERENCES `supervisor` (`supervisorId`),
  ADD CONSTRAINT `event4_ibfk_2` FOREIGN KEY (`eventId`) REFERENCES `events` (`eventId`);

--
-- Constraints for table `event5`
--
ALTER TABLE `event5`
  ADD CONSTRAINT `event5_ibfk_1` FOREIGN KEY (`supervisorId`) REFERENCES `supervisor` (`supervisorId`),
  ADD CONSTRAINT `event5_ibfk_2` FOREIGN KEY (`eventId`) REFERENCES `events` (`eventId`);

--
-- Constraints for table `event5participants`
--
ALTER TABLE `event5participants`
  ADD CONSTRAINT `event5participants_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `event5` (`Id`);

--
-- Constraints for table `event6`
--
ALTER TABLE `event6`
  ADD CONSTRAINT `event6_ibfk_1` FOREIGN KEY (`supervisorId`) REFERENCES `supervisor` (`supervisorId`),
  ADD CONSTRAINT `event6_ibfk_2` FOREIGN KEY (`eventId`) REFERENCES `events` (`eventId`);

--
-- Constraints for table `event6participants`
--
ALTER TABLE `event6participants`
  ADD CONSTRAINT `event6participants_ibfk_1` FOREIGN KEY (`id`) REFERENCES `event6` (`Id`);

--
-- Constraints for table `event7a`
--
ALTER TABLE `event7a`
  ADD CONSTRAINT `event7a_ibfk_1` FOREIGN KEY (`eventId`) REFERENCES `events` (`eventId`),
  ADD CONSTRAINT `event7a_ibfk_2` FOREIGN KEY (`supervisorId`) REFERENCES `supervisor` (`supervisorId`);

--
-- Constraints for table `event7b`
--
ALTER TABLE `event7b`
  ADD CONSTRAINT `event7b_ibfk_1` FOREIGN KEY (`eventId`) REFERENCES `events` (`eventId`),
  ADD CONSTRAINT `event7b_ibfk_2` FOREIGN KEY (`supervisorId`) REFERENCES `supervisor` (`supervisorId`);

--
-- Constraints for table `event7c`
--
ALTER TABLE `event7c`
  ADD CONSTRAINT `event7c_ibfk_1` FOREIGN KEY (`eventId`) REFERENCES `events` (`eventId`),
  ADD CONSTRAINT `event7c_ibfk_2` FOREIGN KEY (`supervisorId`) REFERENCES `supervisor` (`supervisorId`);

--
-- Constraints for table `event7d`
--
ALTER TABLE `event7d`
  ADD CONSTRAINT `event7d_ibfk_1` FOREIGN KEY (`eventId`) REFERENCES `events` (`eventId`),
  ADD CONSTRAINT `event7d_ibfk_2` FOREIGN KEY (`supervisorId`) REFERENCES `supervisor` (`supervisorId`);

--
-- Constraints for table `event7e`
--
ALTER TABLE `event7e`
  ADD CONSTRAINT `event7e_ibfk_1` FOREIGN KEY (`eventId`) REFERENCES `events` (`eventId`),
  ADD CONSTRAINT `event7e_ibfk_2` FOREIGN KEY (`supervisorId`) REFERENCES `supervisor` (`supervisorId`);

--
-- Constraints for table `event7f`
--
ALTER TABLE `event7f`
  ADD CONSTRAINT `event7f_ibfk_1` FOREIGN KEY (`eventId`) REFERENCES `events` (`eventId`),
  ADD CONSTRAINT `event7f_ibfk_2` FOREIGN KEY (`supervisorId`) REFERENCES `supervisor` (`supervisorId`);

--
-- Constraints for table `event7g`
--
ALTER TABLE `event7g`
  ADD CONSTRAINT `event7g_ibfk_1` FOREIGN KEY (`eventId`) REFERENCES `events` (`eventId`),
  ADD CONSTRAINT `event7g_ibfk_2` FOREIGN KEY (`supervisorId`) REFERENCES `supervisor` (`supervisorId`);

--
-- Constraints for table `event7h`
--
ALTER TABLE `event7h`
  ADD CONSTRAINT `event7h_ibfk_1` FOREIGN KEY (`eventId`) REFERENCES `events` (`eventId`),
  ADD CONSTRAINT `event7h_ibfk_2` FOREIGN KEY (`supervisorId`) REFERENCES `supervisor` (`supervisorId`);

--
-- Constraints for table `event8`
--
ALTER TABLE `event8`
  ADD CONSTRAINT `event8_ibfk_1` FOREIGN KEY (`supervisorId`) REFERENCES `supervisor` (`supervisorId`),
  ADD CONSTRAINT `event8_ibfk_2` FOREIGN KEY (`eventId`) REFERENCES `events` (`eventId`);

--
-- Constraints for table `event8topic`
--
ALTER TABLE `event8topic`
  ADD CONSTRAINT `event8topic_ibfk_1` FOREIGN KEY (`id`) REFERENCES `event8` (`Id`);

--
-- Constraints for table `event9`
--
ALTER TABLE `event9`
  ADD CONSTRAINT `event9_ibfk_1` FOREIGN KEY (`supervisorId`) REFERENCES `supervisor` (`supervisorId`),
  ADD CONSTRAINT `event9_ibfk_2` FOREIGN KEY (`eventId`) REFERENCES `events` (`eventId`);

--
-- Constraints for table `event9Person`
--
ALTER TABLE `event9Person`
  ADD CONSTRAINT `event9person_ibfk_1` FOREIGN KEY (`id`) REFERENCES `event9` (`Id`);

--
-- Constraints for table `event9topic`
--
ALTER TABLE `event9topic`
  ADD CONSTRAINT `event9topic_ibfk_1` FOREIGN KEY (`id`) REFERENCES `event9` (`Id`);

--
-- Constraints for table `event10`
--
ALTER TABLE `event10`
  ADD CONSTRAINT `event10_ibfk_1` FOREIGN KEY (`supervisorId`) REFERENCES `supervisor` (`supervisorId`),
  ADD CONSTRAINT `event10_ibfk_2` FOREIGN KEY (`eventId`) REFERENCES `events` (`eventId`);

--
-- Constraints for table `event10topic`
--
ALTER TABLE `event10topic`
  ADD CONSTRAINT `event10topic_ibfk_1` FOREIGN KEY (`id`) REFERENCES `event10` (`Id`);

--
-- Constraints for table `event11`
--
ALTER TABLE `event11`
  ADD CONSTRAINT `event11_ibfk_1` FOREIGN KEY (`supervisorId`) REFERENCES `supervisor` (`supervisorId`),
  ADD CONSTRAINT `event11_ibfk_2` FOREIGN KEY (`eventId`) REFERENCES `events` (`eventId`);

--
-- Constraints for table `event12`
--
ALTER TABLE `event12`
  ADD CONSTRAINT `event12_ibfk_1` FOREIGN KEY (`supervisorId`) REFERENCES `supervisor` (`supervisorId`),
  ADD CONSTRAINT `event12_ibfk_2` FOREIGN KEY (`eventId`) REFERENCES `events` (`eventId`);

--
-- Constraints for table `mother`
--
ALTER TABLE `mother`
  ADD CONSTRAINT `supId` FOREIGN KEY (`supervisorId`) REFERENCES `supervisor` (`supervisorId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `phase1`
--
ALTER TABLE `phase1`
  ADD CONSTRAINT `motherId` FOREIGN KEY (`motherId`) REFERENCES `mother` (`motherId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `phase2`
--
ALTER TABLE `phase2`
  ADD CONSTRAINT `mId` FOREIGN KEY (`motherId`) REFERENCES `mother` (`motherId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `phase3`
--
ALTER TABLE `phase3`
  ADD CONSTRAINT `moId` FOREIGN KEY (`motherId`) REFERENCES `mother` (`motherId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `phase4`
--
ALTER TABLE `phase4`
  ADD CONSTRAINT `a` FOREIGN KEY (`motherId`) REFERENCES `mother` (`motherId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD CONSTRAINT `supervisor_ibfk_1` FOREIGN KEY (`districtId`) REFERENCES `district` (`districtId`);

--
-- Constraints for table `vdc`
--
ALTER TABLE `vdc`
  ADD CONSTRAINT `districtId` FOREIGN KEY (`districtId`) REFERENCES `district` (`districtId`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
