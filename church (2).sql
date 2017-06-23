-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2017 at 07:52 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `church`
--

-- --------------------------------------------------------

--
-- Table structure for table `apr`
--

CREATE TABLE `apr` (
  `ID` int(6) NOT NULL,
  `offering` int(255) NOT NULL,
  `tithes` int(255) NOT NULL,
  `missions` int(255) NOT NULL,
  `totalinc` int(255) NOT NULL,
  `male` int(255) NOT NULL,
  `female` int(255) NOT NULL,
  `messagetopic` varchar(400) NOT NULL,
  `visit` int(255) NOT NULL,
  `children` int(255) NOT NULL,
  `totalmembers` int(255) NOT NULL,
  `spastor` varchar(400) NOT NULL,
  `year` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `present` tinyint(1) NOT NULL,
  `late` tinyint(1) NOT NULL,
  `others` varchar(100) NOT NULL,
  `memberId` int(11) NOT NULL,
  `memberIdDate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `aug`
--

CREATE TABLE `aug` (
  `ID` int(6) NOT NULL,
  `offering` int(255) NOT NULL,
  `tithes` int(255) NOT NULL,
  `missions` int(255) NOT NULL,
  `totalinc` int(255) NOT NULL,
  `male` int(255) NOT NULL,
  `female` int(255) NOT NULL,
  `messagetopic` varchar(400) NOT NULL,
  `visit` int(255) NOT NULL,
  `children` int(255) NOT NULL,
  `totalmembers` int(255) NOT NULL,
  `spastor` varchar(400) NOT NULL,
  `year` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `churchinfo`
--

CREATE TABLE `churchinfo` (
  `churchname` varchar(400) NOT NULL,
  `password` varchar(400) NOT NULL,
  `district` varchar(400) NOT NULL,
  `pastor` varchar(400) NOT NULL,
  `support` int(255) NOT NULL,
  `number` int(255) NOT NULL,
  `centralpercent` int(255) NOT NULL,
  `areapercent` int(255) NOT NULL,
  `churchpercent` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `churchinfo`
--

INSERT INTO `churchinfo` (`churchname`, `password`, `district`, `pastor`, `support`, `number`, `centralpercent`, `areapercent`, `churchpercent`) VALUES
('cowfence', 'bf0047ab603bcf4c954296e4ef9b27f6c01906dd', 'LIMBE', 'Pastor Manga Simon', 66000, 699985298, 14, 45, 55);

-- --------------------------------------------------------

--
-- Table structure for table `dec`
--

CREATE TABLE `dec` (
  `ID` int(6) NOT NULL,
  `offering` int(255) NOT NULL,
  `tithes` int(255) NOT NULL,
  `missions` int(255) NOT NULL,
  `totalinc` int(255) NOT NULL,
  `male` int(255) NOT NULL,
  `female` int(255) NOT NULL,
  `messagetopic` varchar(400) NOT NULL,
  `visit` int(255) NOT NULL,
  `children` int(255) NOT NULL,
  `totalmembers` int(255) NOT NULL,
  `spastor` varchar(400) NOT NULL,
  `year` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `expenditures`
--

CREATE TABLE `expenditures` (
  `ID` int(25) NOT NULL,
  `mon` varchar(400) NOT NULL,
  `year` int(255) NOT NULL,
  `others` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `expenditures`
--

INSERT INTO `expenditures` (`ID`, `mon`, `year`, `others`) VALUES
(1, 'may', 17, 0),
(2, '', 0, 0),
(3, 'jun', 17, 0),
(4, 'jun', 50, 0);

-- --------------------------------------------------------

--
-- Table structure for table `feb`
--

CREATE TABLE `feb` (
  `ID` int(6) NOT NULL,
  `offering` int(255) NOT NULL,
  `tithes` int(255) NOT NULL,
  `missions` int(255) NOT NULL,
  `totalinc` int(255) NOT NULL,
  `male` int(255) NOT NULL,
  `female` int(255) NOT NULL,
  `messagetopic` varchar(400) NOT NULL,
  `visit` int(255) NOT NULL,
  `children` int(255) NOT NULL,
  `totalmembers` int(255) NOT NULL,
  `spastor` varchar(400) NOT NULL,
  `year` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE `group` (
  `groupId` int(255) NOT NULL,
  `memberId` int(11) NOT NULL,
  `leadername` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`groupId`, `memberId`, `leadername`) VALUES
(1, 1003, 'Bokossah Lewis'),
(2, 1001, 'Mangi Elijah '),
(3, 1009, 'Negesa Bright'),
(4, 1005, 'Ako-Egbe Carlet'),
(5, 1010, 'Aka Smith'),
(6, 1011, 'Bertilla Kisevi');

-- --------------------------------------------------------

--
-- Table structure for table `jan`
--

CREATE TABLE `jan` (
  `ID` int(6) NOT NULL,
  `offering` int(255) NOT NULL,
  `tithes` int(255) NOT NULL,
  `missions` int(255) NOT NULL,
  `totalinc` int(255) NOT NULL,
  `male` int(255) NOT NULL,
  `female` int(255) NOT NULL,
  `visit` int(255) NOT NULL,
  `children` int(255) NOT NULL,
  `totalmembers` int(255) NOT NULL,
  `messagetopic` varchar(400) NOT NULL,
  `spastor` varchar(400) NOT NULL,
  `year` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jul`
--

CREATE TABLE `jul` (
  `ID` int(6) NOT NULL,
  `offering` int(255) NOT NULL,
  `tithes` int(255) NOT NULL,
  `missions` int(255) NOT NULL,
  `totalinc` int(255) NOT NULL,
  `male` int(255) NOT NULL,
  `female` int(255) NOT NULL,
  `messagetopic` varchar(400) NOT NULL,
  `visit` int(255) NOT NULL,
  `children` int(255) NOT NULL,
  `totalmembers` int(255) NOT NULL,
  `spastor` varchar(400) NOT NULL,
  `year` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jun`
--

CREATE TABLE `jun` (
  `ID` int(6) NOT NULL,
  `offering` int(255) NOT NULL,
  `tithes` int(255) NOT NULL,
  `missions` int(255) NOT NULL,
  `totalinc` int(255) NOT NULL,
  `male` int(255) NOT NULL,
  `female` int(255) NOT NULL,
  `messagetopic` varchar(400) NOT NULL,
  `visit` int(255) NOT NULL,
  `children` int(255) NOT NULL,
  `totalmembers` int(255) NOT NULL,
  `spastor` varchar(400) NOT NULL,
  `year` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jun`
--

INSERT INTO `jun` (`ID`, `offering`, `tithes`, `missions`, `totalinc`, `male`, `female`, `messagetopic`, `visit`, `children`, `totalmembers`, `spastor`, `year`) VALUES
(1, 6000, 500000, 0, 506000, 50, 50, 'anointig', 2, 100, 202, 'ps manga', 17),
(2, 652500, 450600, 0, 1103100, 180, 152, 'Love of God', 2, 350, 684, 'Ps Manga Simon', 17),
(3, 650, 450, 0, 1100, 3, 5, 'love of God', 0, 1, 9, 'Sis Glory', 17);

-- --------------------------------------------------------

--
-- Table structure for table `mar`
--

CREATE TABLE `mar` (
  `ID` int(6) NOT NULL,
  `offering` int(255) NOT NULL,
  `tithes` int(255) NOT NULL,
  `missions` int(255) NOT NULL,
  `totalinc` int(255) NOT NULL,
  `male` int(255) NOT NULL,
  `female` int(255) NOT NULL,
  `messagetopic` varchar(400) NOT NULL,
  `visit` int(255) NOT NULL,
  `children` int(255) NOT NULL,
  `totalmembers` int(255) NOT NULL,
  `spastor` varchar(400) NOT NULL,
  `year` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `may`
--

CREATE TABLE `may` (
  `ID` int(6) NOT NULL,
  `offering` int(255) NOT NULL,
  `tithes` int(255) NOT NULL,
  `missions` int(255) NOT NULL,
  `totalinc` int(255) NOT NULL,
  `male` int(255) NOT NULL,
  `female` int(255) NOT NULL,
  `messagetopic` varchar(400) NOT NULL,
  `visit` int(255) NOT NULL,
  `children` int(255) NOT NULL,
  `totalmembers` int(255) NOT NULL,
  `spastor` varchar(400) NOT NULL,
  `year` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `may`
--

INSERT INTO `may` (`ID`, `offering`, `tithes`, `missions`, `totalinc`, `male`, `female`, `messagetopic`, `visit`, `children`, `totalmembers`, `spastor`, `year`) VALUES
(1, 18525, 34625, 0, 53150, 42, 55, 'ANOINTED ONE', 3, 77, 177, 'Ps Nana', 17),
(2, 16075, 102600, 0, 118675, 643, 453, 'THE POWER IN THE WORD', 1, 78, 1175, 'PA NGAM BODLOVE', 17),
(3, 65000, 178500, 0, 243500, 150, 190, 'Glory', 7, 180, 527, 'Ps Caleb', 17),
(4, 165000, 185000, 0, 350000, 185, 190, 'Giving', 15, 190, 580, 'Mangi George', 17);

-- --------------------------------------------------------

--
-- Table structure for table `memberinfo`
--

CREATE TABLE `memberinfo` (
  `name` varchar(150) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `resident` varchar(100) NOT NULL,
  `leadership_position` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `groupId` int(11) NOT NULL,
  `memberId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `memberinfo`
--

INSERT INTO `memberinfo` (`name`, `phonenumber`, `resident`, `leadership_position`, `gender`, `email`, `groupId`, `memberId`) VALUES
('Mangi Elijah ', '672084140', 'Mallingo', 'Deacon', 'male', 'nmc@yahoo.com', 2, 1001),
('Mangi Elisha', '672307598', 'Molyko Back Nextel', '', 'male', 'mangielisha6@gmail.com', 0, 1002),
('Bokossah Lewis', '69853254', 'Malingo', 'Choir Leader', 'male', 'itorlewis@gmail.com', 1, 1003),
('Ako-Egbe Kelly', '681394290', 'Church-street Limbe', '', 'female', 'kelly96@gmail.com', 0, 1004),
('Ako-Egbe Carlet', '651269979', 'Buea Molyko', 'Elder', 'male', 'akoegbecarlet@gmail.com', 4, 1005),
('Tachyon Alvine', '698523299', 'Great Soppo Buea', '', 'female', '', 0, 1006),
('Fonepie Leslie', '678563241', 'Bakweri town buea', '', 'male', 'fpyleslie23@yahoo.com', 0, 1007),
('Imbi laura', '651086871', 'Malingo', 'Youth Leader', 'female', 'imbilaura@gmail.com', 0, 1008),
('Negesa Bright', '670338892', 'Bongo Square buea', 'Deaconness', 'female', 'negesabright@gmail.com', 3, 1009),
('Aka Smith', '651028467', 'Bomaka Buea', '', 'male', 'akoshimith@gmail.com', 5, 1010),
('Bertilla Kisevi', '656897458', 'Bambili Bamenda', '', 'female', 'kiseviberty35@hotmail.com', 6, 1011),
('Takor Bryan', '699985298', 'Sosoliso Malingo Buea', 'Pastor', 'male', 'takonabi45@yahoo.com', 0, 1012);

-- --------------------------------------------------------

--
-- Table structure for table `mission`
--

CREATE TABLE `mission` (
  `id` int(25) NOT NULL,
  `mission` int(255) NOT NULL,
  `areaeva` int(255) NOT NULL,
  `edu` int(255) NOT NULL,
  `mon` varchar(400) NOT NULL,
  `year` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mission`
--

INSERT INTO `mission` (`id`, `mission`, `areaeva`, `edu`, `mon`, `year`) VALUES
(1, 0, 20000, 3000, 'may', 17),
(2, 0, 0, 0, '', 0),
(3, 0, 0, 0, 'jun', 17),
(4, 0, 0, 0, 'jun', 50);

-- --------------------------------------------------------

--
-- Table structure for table `nov`
--

CREATE TABLE `nov` (
  `ID` int(6) NOT NULL,
  `offering` int(255) NOT NULL,
  `tithes` int(255) NOT NULL,
  `missions` int(255) NOT NULL,
  `totalinc` int(255) NOT NULL,
  `male` int(255) NOT NULL,
  `messagetopic` varchar(400) NOT NULL,
  `female` int(255) NOT NULL,
  `visit` int(255) NOT NULL,
  `children` int(255) NOT NULL,
  `totalmembers` int(255) NOT NULL,
  `spastor` varchar(400) NOT NULL,
  `year` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `oct`
--

CREATE TABLE `oct` (
  `ID` int(6) NOT NULL,
  `offering` int(255) NOT NULL,
  `tithes` int(255) NOT NULL,
  `missions` int(255) NOT NULL,
  `totalinc` int(255) NOT NULL,
  `male` int(255) NOT NULL,
  `female` int(255) NOT NULL,
  `messagetopic` varchar(400) NOT NULL,
  `visit` int(255) NOT NULL,
  `children` int(255) NOT NULL,
  `totalmembers` int(255) NOT NULL,
  `spastor` varchar(400) NOT NULL,
  `year` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `otherincome`
--

CREATE TABLE `otherincome` (
  `id` int(25) NOT NULL,
  `pension` int(255) NOT NULL,
  `childrenthirty` int(255) NOT NULL,
  `districtfund` int(255) NOT NULL,
  `districtevang` int(255) NOT NULL,
  `childrenfifteen` int(255) NOT NULL,
  `childrentwenty` int(255) NOT NULL,
  `others` int(255) NOT NULL,
  `mon` varchar(400) NOT NULL,
  `year` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `otherincome`
--

INSERT INTO `otherincome` (`id`, `pension`, `childrenthirty`, `districtfund`, `districtevang`, `childrenfifteen`, `childrentwenty`, `others`, `mon`, `year`) VALUES
(1, 1, 0, 20000, 6000, 0, 0, 0, 'may', 17),
(2, 0, 0, 0, 0, 0, 0, 0, '', 0),
(3, 0, 0, 20000, 6000, 0, 0, 0, 'jun', 17),
(4, 0, 0, 0, 0, 0, 0, 0, 'jun', 50);

-- --------------------------------------------------------

--
-- Table structure for table `sep`
--

CREATE TABLE `sep` (
  `ID` int(6) NOT NULL,
  `offering` int(255) NOT NULL,
  `tithes` int(255) NOT NULL,
  `missions` int(255) NOT NULL,
  `totalinc` int(255) NOT NULL,
  `male` int(255) NOT NULL,
  `female` int(255) NOT NULL,
  `messagetopic` varchar(400) NOT NULL,
  `visit` int(255) NOT NULL,
  `children` int(255) NOT NULL,
  `totalmembers` int(255) NOT NULL,
  `spastor` varchar(400) NOT NULL,
  `year` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `memiddate` varchar(50) NOT NULL,
  `name` varchar(400) NOT NULL,
  `memid` int(255) NOT NULL,
  `date` int(255) NOT NULL,
  `present` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`memiddate`, `name`, `memid`, `date`, `present`) VALUES
('10002017', 'elijah', 1000, 2017, 0),
('10012017', 'elijah', 1001, 2017, 0),
('10022017', 'elijah', 1002, 2017, 0),
('10032017', 'elijah', 1003, 2017, 0),
('10042017', 'elijah', 1004, 2017, 0),
('10052017', 'elijah', 1005, 2017, 0),
('10062017', 'elijah', 1006, 2017, 0),
('10072017', 'elijah', 1007, 2017, 0),
('10082017', 'elijah', 1008, 2017, 0),
('10092017', 'elijah', 1009, 2017, 0),
('10102017', 'elijah', 1010, 2017, 0),
('10112017', 'elijah', 1011, 2017, 0),
('10122017', 'elijah', 1012, 2017, 0),
('10132017', 'elijah', 1013, 2017, 0),
('10142017', 'elijah', 1014, 2017, 0),
('10152017', 'elijah', 1015, 2017, 0),
('10162017', 'elijah', 1016, 2017, 0),
('10172017', 'elijah', 1017, 2017, 0),
('10182017', 'elijah', 1018, 2017, 0),
('10192017', 'elijah', 1019, 2017, 0),
('10202017', 'elijah', 1020, 2017, 0),
('10212017', 'elijah', 1021, 2017, 0),
('10222017', 'elijah', 1022, 2017, 0),
('10232017', 'elijah', 1023, 2017, 0),
('10242017', 'elijah', 1024, 2017, 0),
('10252017', 'elijah', 1025, 2017, 0),
('10262017', 'elijah', 1026, 2017, 0),
('10272017', 'elijah', 1027, 2017, 0),
('10282017', 'elijah', 1028, 2017, 0),
('10292017', 'elijah', 1029, 2017, 0),
('10302017', 'elijah', 1030, 2017, 0),
('10312017', 'elijah', 1031, 2017, 0),
('10322017', 'elijah', 1032, 2017, 0),
('10332017', 'elijah', 1033, 2017, 0),
('10342017', 'elijah', 1034, 2017, 0),
('10352017', 'elijah', 1035, 2017, 0),
('10362017', 'elijah', 1036, 2017, 0),
('10372017', 'elijah', 1037, 2017, 0),
('10382017', 'elijah', 1038, 2017, 0),
('10392017', 'elijah', 1039, 2017, 0),
('10402017', 'elijah', 1040, 2017, 0),
('10412017', 'elijah', 1041, 2017, 0),
('10422017', 'elijah', 1042, 2017, 0),
('10432017', 'elijah', 1043, 2017, 0),
('10442017', 'elijah', 1044, 2017, 0),
('10452017', 'elijah', 1045, 2017, 0),
('10462017', 'elijah', 1046, 2017, 0),
('10472017', 'elijah', 1047, 2017, 0),
('10482017', 'elijah', 1048, 2017, 0),
('10492017', 'elijah', 1049, 2017, 0),
('10502017', 'elijah', 1050, 2017, 0),
('10512017', 'elijah', 1051, 2017, 0),
('10522017', 'elijah', 1052, 2017, 0),
('10532017', 'elijah', 1053, 2017, 0),
('10542017', 'elijah', 1054, 2017, 0),
('10552017', 'elijah', 1055, 2017, 0),
('10562017', 'elijah', 1056, 2017, 0),
('10572017', 'elijah', 1057, 2017, 0),
('10582017', 'elijah', 1058, 2017, 0),
('10592017', 'elijah', 1059, 2017, 0),
('10602017', 'elijah', 1060, 2017, 0),
('10612017', 'elijah', 1061, 2017, 0),
('10622017', 'elijah', 1062, 2017, 0),
('10632017', 'elijah', 1063, 2017, 0),
('10642017', 'elijah', 1064, 2017, 0),
('10652017', 'elijah', 1065, 2017, 0),
('10662017', 'elijah', 1066, 2017, 0),
('10672017', 'elijah', 1067, 2017, 0),
('10682017', 'elijah', 1068, 2017, 0),
('10692017', 'elijah', 1069, 2017, 0),
('10702017', 'elijah', 1070, 2017, 0),
('10712017', 'elijah', 1071, 2017, 0),
('10722017', 'elijah', 1072, 2017, 0),
('10732017', 'elijah', 1073, 2017, 0),
('10742017', 'elijah', 1074, 2017, 0),
('10752017', 'elijah', 1075, 2017, 0),
('10762017', 'elijah', 1076, 2017, 0),
('10772017', 'elijah', 1077, 2017, 0),
('10782017', 'elijah', 1078, 2017, 0),
('10792017', 'elijah', 1079, 2017, 0),
('10802017', 'elijah', 1080, 2017, 0),
('10812017', 'elijah', 1081, 2017, 0),
('10822017', 'elijah', 1082, 2017, 0),
('10832017', 'elijah', 1083, 2017, 0),
('10842017', 'elijah', 1084, 2017, 0),
('10852017', 'elijah', 1085, 2017, 0),
('10862017', 'elijah', 1086, 2017, 0),
('10872017', 'elijah', 1087, 2017, 0),
('10882017', 'elijah', 1088, 2017, 0),
('10892017', 'elijah', 1089, 2017, 0),
('10902017', 'elijah', 1090, 2017, 0),
('10912017', 'elijah', 1091, 2017, 0),
('10922017', 'elijah', 1092, 2017, 0),
('10932017', 'elijah', 1093, 2017, 0),
('10942017', 'elijah', 1094, 2017, 0),
('10952017', 'elijah', 1095, 2017, 0),
('10962017', 'elijah', 1096, 2017, 0),
('10972017', 'elijah', 1097, 2017, 0),
('10982017', 'elijah', 1098, 2017, 0),
('10992017', 'elijah', 1099, 2017, 0),
('11002017', 'elijah', 1100, 2017, 0),
('11012017', 'elijah', 1101, 2017, 0),
('11022017', 'elijah', 1102, 2017, 0),
('11032017', 'elijah', 1103, 2017, 0),
('11042017', 'elijah', 1104, 2017, 0),
('11052017', 'elijah', 1105, 2017, 0),
('11062017', 'elijah', 1106, 2017, 0),
('11072017', 'elijah', 1107, 2017, 0),
('11082017', 'elijah', 1108, 2017, 0),
('11092017', 'elijah', 1109, 2017, 0),
('11102017', 'elijah', 1110, 2017, 0),
('11112017', 'elijah', 1111, 2017, 0),
('11122017', 'elijah', 1112, 2017, 0),
('11132017', 'elijah', 1113, 2017, 0),
('11142017', 'elijah', 1114, 2017, 0),
('11152017', 'elijah', 1115, 2017, 0),
('11162017', 'elijah', 1116, 2017, 0),
('11172017', 'elijah', 1117, 2017, 0),
('11182017', 'elijah', 1118, 2017, 0),
('11192017', 'elijah', 1119, 2017, 0),
('11202017', 'elijah', 1120, 2017, 0),
('11212017', 'elijah', 1121, 2017, 0),
('11222017', 'elijah', 1122, 2017, 0),
('11232017', 'elijah', 1123, 2017, 0),
('11242017', 'elijah', 1124, 2017, 0),
('11252017', 'elijah', 1125, 2017, 0),
('11262017', 'elijah', 1126, 2017, 0),
('11272017', 'elijah', 1127, 2017, 0),
('11282017', 'elijah', 1128, 2017, 0),
('11292017', 'elijah', 1129, 2017, 0),
('11302017', 'elijah', 1130, 2017, 0),
('11312017', 'elijah', 1131, 2017, 0),
('11322017', 'elijah', 1132, 2017, 0),
('11332017', 'elijah', 1133, 2017, 0),
('11342017', 'elijah', 1134, 2017, 0),
('11352017', 'elijah', 1135, 2017, 0),
('11362017', 'elijah', 1136, 2017, 0),
('11372017', 'elijah', 1137, 2017, 0),
('11382017', 'elijah', 1138, 2017, 0),
('11392017', 'elijah', 1139, 2017, 0),
('11402017', 'elijah', 1140, 2017, 0),
('11412017', 'elijah', 1141, 2017, 0),
('11422017', 'elijah', 1142, 2017, 0),
('11432017', 'elijah', 1143, 2017, 0),
('11442017', 'elijah', 1144, 2017, 0),
('11452017', 'elijah', 1145, 2017, 0),
('11462017', 'elijah', 1146, 2017, 0),
('11472017', 'elijah', 1147, 2017, 0),
('11482017', 'elijah', 1148, 2017, 0),
('11492017', 'elijah', 1149, 2017, 0),
('11502017', 'elijah', 1150, 2017, 0),
('11512017', 'elijah', 1151, 2017, 0),
('11522017', 'elijah', 1152, 2017, 0),
('11532017', 'elijah', 1153, 2017, 0),
('11542017', 'elijah', 1154, 2017, 0),
('11552017', 'elijah', 1155, 2017, 0),
('11562017', 'elijah', 1156, 2017, 0),
('11572017', 'elijah', 1157, 2017, 0),
('11582017', 'elijah', 1158, 2017, 0),
('11592017', 'elijah', 1159, 2017, 0),
('11602017', 'elijah', 1160, 2017, 0),
('11612017', 'elijah', 1161, 2017, 0),
('11622017', 'elijah', 1162, 2017, 0),
('11632017', 'elijah', 1163, 2017, 0),
('11642017', 'elijah', 1164, 2017, 0),
('11652017', 'elijah', 1165, 2017, 0),
('11662017', 'elijah', 1166, 2017, 0),
('11672017', 'elijah', 1167, 2017, 0),
('11682017', 'elijah', 1168, 2017, 0),
('11692017', 'elijah', 1169, 2017, 0),
('11702017', 'elijah', 1170, 2017, 0),
('11712017', 'elijah', 1171, 2017, 0),
('11722017', 'elijah', 1172, 2017, 0),
('11732017', 'elijah', 1173, 2017, 0),
('11742017', 'elijah', 1174, 2017, 0),
('11752017', 'elijah', 1175, 2017, 0),
('11762017', 'elijah', 1176, 2017, 0),
('11772017', 'elijah', 1177, 2017, 0),
('11782017', 'elijah', 1178, 2017, 0),
('11792017', 'elijah', 1179, 2017, 0),
('11802017', 'elijah', 1180, 2017, 0),
('11812017', 'elijah', 1181, 2017, 0),
('11822017', 'elijah', 1182, 2017, 0),
('11832017', 'elijah', 1183, 2017, 0),
('11842017', 'elijah', 1184, 2017, 0),
('11852017', 'elijah', 1185, 2017, 0),
('11862017', 'elijah', 1186, 2017, 0),
('11872017', 'elijah', 1187, 2017, 0),
('11882017', 'elijah', 1188, 2017, 0),
('11892017', 'elijah', 1189, 2017, 0),
('11902017', 'elijah', 1190, 2017, 0),
('11912017', 'elijah', 1191, 2017, 0),
('11922017', 'elijah', 1192, 2017, 0),
('11932017', 'elijah', 1193, 2017, 0),
('11942017', 'elijah', 1194, 2017, 0),
('11952017', 'elijah', 1195, 2017, 0),
('11962017', 'elijah', 1196, 2017, 0),
('11972017', 'elijah', 1197, 2017, 0),
('11982017', 'elijah', 1198, 2017, 0),
('11992017', 'elijah', 1199, 2017, 0),
('12002017', 'elijah', 1200, 2017, 0),
('12012017', 'elijah', 1201, 2017, 0),
('12022017', 'elijah', 1202, 2017, 0),
('12032017', 'elijah', 1203, 2017, 0),
('12042017', 'elijah', 1204, 2017, 0),
('12052017', 'elijah', 1205, 2017, 0),
('12062017', 'elijah', 1206, 2017, 0),
('12072017', 'elijah', 1207, 2017, 0),
('12082017', 'elijah', 1208, 2017, 0),
('12092017', 'elijah', 1209, 2017, 0),
('12102017', 'elijah', 1210, 2017, 0),
('12112017', 'elijah', 1211, 2017, 0),
('12122017', 'elijah', 1212, 2017, 0),
('12132017', 'elijah', 1213, 2017, 0),
('12142017', 'elijah', 1214, 2017, 0),
('12152017', 'elijah', 1215, 2017, 0),
('12162017', 'elijah', 1216, 2017, 0),
('12172017', 'elijah', 1217, 2017, 0),
('12182017', 'elijah', 1218, 2017, 0),
('12192017', 'elijah', 1219, 2017, 0),
('12202017', 'elijah', 1220, 2017, 0),
('12212017', 'elijah', 1221, 2017, 0),
('12222017', 'elijah', 1222, 2017, 0),
('12232017', 'elijah', 1223, 2017, 0),
('12242017', 'elijah', 1224, 2017, 0),
('12252017', 'elijah', 1225, 2017, 0),
('12262017', 'elijah', 1226, 2017, 0),
('12272017', 'elijah', 1227, 2017, 0),
('12282017', 'elijah', 1228, 2017, 0),
('12292017', 'elijah', 1229, 2017, 0),
('12302017', 'elijah', 1230, 2017, 0),
('12312017', 'elijah', 1231, 2017, 0),
('12322017', 'elijah', 1232, 2017, 0),
('12332017', 'elijah', 1233, 2017, 0),
('12342017', 'elijah', 1234, 2017, 0),
('12352017', 'elijah', 1235, 2017, 0),
('12362017', 'elijah', 1236, 2017, 0),
('12372017', 'elijah', 1237, 2017, 0),
('12382017', 'elijah', 1238, 2017, 0),
('12392017', 'elijah', 1239, 2017, 0),
('12402017', 'elijah', 1240, 2017, 0),
('12412017', 'elijah', 1241, 2017, 0),
('12422017', 'elijah', 1242, 2017, 0),
('12432017', 'elijah', 1243, 2017, 0),
('12442017', 'elijah', 1244, 2017, 0),
('12452017', 'elijah', 1245, 2017, 0),
('12462017', 'elijah', 1246, 2017, 0),
('12472017', 'elijah', 1247, 2017, 0),
('12482017', 'elijah', 1248, 2017, 0),
('12492017', 'elijah', 1249, 2017, 0),
('12502017', 'elijah', 1250, 2017, 0),
('12512017', 'elijah', 1251, 2017, 0),
('12522017', 'elijah', 1252, 2017, 0),
('12532017', 'elijah', 1253, 2017, 0),
('12542017', 'elijah', 1254, 2017, 0),
('12552017', 'elijah', 1255, 2017, 0),
('12562017', 'elijah', 1256, 2017, 0),
('12572017', 'elijah', 1257, 2017, 0),
('12582017', 'elijah', 1258, 2017, 0),
('12592017', 'elijah', 1259, 2017, 0),
('12602017', 'elijah', 1260, 2017, 0),
('12612017', 'elijah', 1261, 2017, 0),
('12622017', 'elijah', 1262, 2017, 0),
('12632017', 'elijah', 1263, 2017, 0),
('12642017', 'elijah', 1264, 2017, 0),
('12652017', 'elijah', 1265, 2017, 0),
('12662017', 'elijah', 1266, 2017, 0),
('12672017', 'elijah', 1267, 2017, 0),
('12682017', 'elijah', 1268, 2017, 0),
('12692017', 'elijah', 1269, 2017, 0),
('12702017', 'elijah', 1270, 2017, 0),
('12712017', 'elijah', 1271, 2017, 0),
('12722017', 'elijah', 1272, 2017, 0),
('12732017', 'elijah', 1273, 2017, 0),
('12742017', 'elijah', 1274, 2017, 0),
('12752017', 'elijah', 1275, 2017, 0),
('12762017', 'elijah', 1276, 2017, 0),
('12772017', 'elijah', 1277, 2017, 0),
('12782017', 'elijah', 1278, 2017, 0),
('12792017', 'elijah', 1279, 2017, 0),
('12802017', 'elijah', 1280, 2017, 0),
('12812017', 'elijah', 1281, 2017, 0),
('12822017', 'elijah', 1282, 2017, 0),
('12832017', 'elijah', 1283, 2017, 0),
('12842017', 'elijah', 1284, 2017, 0),
('12852017', 'elijah', 1285, 2017, 0),
('12862017', 'elijah', 1286, 2017, 0),
('12872017', 'elijah', 1287, 2017, 0),
('12882017', 'elijah', 1288, 2017, 0),
('12892017', 'elijah', 1289, 2017, 0),
('12902017', 'elijah', 1290, 2017, 0),
('12912017', 'elijah', 1291, 2017, 0),
('12922017', 'elijah', 1292, 2017, 0),
('12932017', 'elijah', 1293, 2017, 0),
('12942017', 'elijah', 1294, 2017, 0),
('12952017', 'elijah', 1295, 2017, 0),
('12962017', 'elijah', 1296, 2017, 0),
('12972017', 'elijah', 1297, 2017, 0),
('12982017', 'elijah', 1298, 2017, 0),
('12992017', 'elijah', 1299, 2017, 0),
('13002017', 'elijah', 1300, 2017, 0),
('13012017', 'elijah', 1301, 2017, 0),
('13022017', 'elijah', 1302, 2017, 0),
('13032017', 'elijah', 1303, 2017, 0),
('13042017', 'elijah', 1304, 2017, 0),
('13052017', 'elijah', 1305, 2017, 0),
('13062017', 'elijah', 1306, 2017, 0),
('13072017', 'elijah', 1307, 2017, 0),
('13082017', 'elijah', 1308, 2017, 0),
('13092017', 'elijah', 1309, 2017, 0),
('13102017', 'elijah', 1310, 2017, 0),
('13112017', 'elijah', 1311, 2017, 0),
('13122017', 'elijah', 1312, 2017, 0),
('13132017', 'elijah', 1313, 2017, 0),
('13142017', 'elijah', 1314, 2017, 0),
('13152017', 'elijah', 1315, 2017, 0),
('13162017', 'elijah', 1316, 2017, 0),
('13172017', 'elijah', 1317, 2017, 0),
('13182017', 'elijah', 1318, 2017, 0),
('13192017', 'elijah', 1319, 2017, 0),
('13202017', 'elijah', 1320, 2017, 0),
('13212017', 'elijah', 1321, 2017, 0),
('13222017', 'elijah', 1322, 2017, 0),
('13232017', 'elijah', 1323, 2017, 0),
('13242017', 'elijah', 1324, 2017, 0),
('13252017', 'elijah', 1325, 2017, 0),
('13262017', 'elijah', 1326, 2017, 0),
('13272017', 'elijah', 1327, 2017, 0),
('13282017', 'elijah', 1328, 2017, 0),
('13292017', 'elijah', 1329, 2017, 0),
('13302017', 'elijah', 1330, 2017, 0),
('13312017', 'elijah', 1331, 2017, 0),
('13322017', 'elijah', 1332, 2017, 0),
('13332017', 'elijah', 1333, 2017, 0),
('13342017', 'elijah', 1334, 2017, 0),
('13352017', 'elijah', 1335, 2017, 0),
('13362017', 'elijah', 1336, 2017, 0),
('13372017', 'elijah', 1337, 2017, 0),
('13382017', 'elijah', 1338, 2017, 0),
('13392017', 'elijah', 1339, 2017, 0),
('13402017', 'elijah', 1340, 2017, 0),
('13412017', 'elijah', 1341, 2017, 0),
('13422017', 'elijah', 1342, 2017, 0),
('13432017', 'elijah', 1343, 2017, 0),
('13442017', 'elijah', 1344, 2017, 0),
('13452017', 'elijah', 1345, 2017, 0),
('13462017', 'elijah', 1346, 2017, 0),
('13472017', 'elijah', 1347, 2017, 0),
('13482017', 'elijah', 1348, 2017, 0),
('13492017', 'elijah', 1349, 2017, 0),
('13502017', 'elijah', 1350, 2017, 0),
('13512017', 'elijah', 1351, 2017, 0),
('13522017', 'elijah', 1352, 2017, 0),
('13532017', 'elijah', 1353, 2017, 0),
('13542017', 'elijah', 1354, 2017, 0),
('13552017', 'elijah', 1355, 2017, 0),
('13562017', 'elijah', 1356, 2017, 0),
('13572017', 'elijah', 1357, 2017, 0),
('13582017', 'elijah', 1358, 2017, 0),
('13592017', 'elijah', 1359, 2017, 0),
('13602017', 'elijah', 1360, 2017, 0),
('13612017', 'elijah', 1361, 2017, 0),
('13622017', 'elijah', 1362, 2017, 0),
('13632017', 'elijah', 1363, 2017, 0),
('13642017', 'elijah', 1364, 2017, 0),
('13652017', 'elijah', 1365, 2017, 0),
('13662017', 'elijah', 1366, 2017, 0),
('13672017', 'elijah', 1367, 2017, 0),
('13682017', 'elijah', 1368, 2017, 0),
('13692017', 'elijah', 1369, 2017, 0),
('13702017', 'elijah', 1370, 2017, 0),
('13712017', 'elijah', 1371, 2017, 0),
('13722017', 'elijah', 1372, 2017, 0),
('13732017', 'elijah', 1373, 2017, 0),
('13742017', 'elijah', 1374, 2017, 0),
('13752017', 'elijah', 1375, 2017, 0),
('13762017', 'elijah', 1376, 2017, 0),
('13772017', 'elijah', 1377, 2017, 0),
('13782017', 'elijah', 1378, 2017, 0),
('13792017', 'elijah', 1379, 2017, 0),
('13802017', 'elijah', 1380, 2017, 0),
('13812017', 'elijah', 1381, 2017, 0),
('13822017', 'elijah', 1382, 2017, 0),
('13832017', 'elijah', 1383, 2017, 0),
('13842017', 'elijah', 1384, 2017, 0),
('13852017', 'elijah', 1385, 2017, 0),
('13862017', 'elijah', 1386, 2017, 0),
('13872017', 'elijah', 1387, 2017, 0),
('13882017', 'elijah', 1388, 2017, 0),
('13892017', 'elijah', 1389, 2017, 0),
('13902017', 'elijah', 1390, 2017, 0),
('13912017', 'elijah', 1391, 2017, 0),
('13922017', 'elijah', 1392, 2017, 0),
('13932017', 'elijah', 1393, 2017, 0),
('13942017', 'elijah', 1394, 2017, 0),
('13952017', 'elijah', 1395, 2017, 0),
('13962017', 'elijah', 1396, 2017, 0),
('13972017', 'elijah', 1397, 2017, 0),
('13982017', 'elijah', 1398, 2017, 0),
('13992017', 'elijah', 1399, 2017, 0),
('14002017', 'elijah', 1400, 2017, 0),
('14012017', 'elijah', 1401, 2017, 0),
('14022017', 'elijah', 1402, 2017, 0),
('14032017', 'elijah', 1403, 2017, 0),
('14042017', 'elijah', 1404, 2017, 0),
('14052017', 'elijah', 1405, 2017, 0),
('14062017', 'elijah', 1406, 2017, 0),
('14072017', 'elijah', 1407, 2017, 0),
('14082017', 'elijah', 1408, 2017, 0),
('14092017', 'elijah', 1409, 2017, 0),
('14102017', 'elijah', 1410, 2017, 0),
('14112017', 'elijah', 1411, 2017, 0),
('14122017', 'elijah', 1412, 2017, 0),
('14132017', 'elijah', 1413, 2017, 0),
('14142017', 'elijah', 1414, 2017, 0),
('14152017', 'elijah', 1415, 2017, 0),
('14162017', 'elijah', 1416, 2017, 0),
('14172017', 'elijah', 1417, 2017, 0),
('14182017', 'elijah', 1418, 2017, 0),
('14192017', 'elijah', 1419, 2017, 0),
('14202017', 'elijah', 1420, 2017, 0),
('14212017', 'elijah', 1421, 2017, 0),
('14222017', 'elijah', 1422, 2017, 0),
('14232017', 'elijah', 1423, 2017, 0),
('14242017', 'elijah', 1424, 2017, 0),
('14252017', 'elijah', 1425, 2017, 0),
('14262017', 'elijah', 1426, 2017, 0),
('14272017', 'elijah', 1427, 2017, 0),
('14282017', 'elijah', 1428, 2017, 0),
('14292017', 'elijah', 1429, 2017, 0),
('14302017', 'elijah', 1430, 2017, 0),
('14312017', 'elijah', 1431, 2017, 0),
('14322017', 'elijah', 1432, 2017, 0),
('14332017', 'elijah', 1433, 2017, 0),
('14342017', 'elijah', 1434, 2017, 0),
('14352017', 'elijah', 1435, 2017, 0),
('14362017', 'elijah', 1436, 2017, 0),
('14372017', 'elijah', 1437, 2017, 0),
('14382017', 'elijah', 1438, 2017, 0),
('14392017', 'elijah', 1439, 2017, 0),
('14402017', 'elijah', 1440, 2017, 0),
('14412017', 'elijah', 1441, 2017, 0),
('14422017', 'elijah', 1442, 2017, 0),
('14432017', 'elijah', 1443, 2017, 0),
('14442017', 'elijah', 1444, 2017, 0),
('14452017', 'elijah', 1445, 2017, 0),
('14462017', 'elijah', 1446, 2017, 0),
('14472017', 'elijah', 1447, 2017, 0),
('14482017', 'elijah', 1448, 2017, 0),
('14492017', 'elijah', 1449, 2017, 0),
('14502017', 'elijah', 1450, 2017, 0),
('14512017', 'elijah', 1451, 2017, 0),
('14522017', 'elijah', 1452, 2017, 0),
('14532017', 'elijah', 1453, 2017, 0),
('14542017', 'elijah', 1454, 2017, 0),
('14552017', 'elijah', 1455, 2017, 0),
('14562017', 'elijah', 1456, 2017, 0),
('14572017', 'elijah', 1457, 2017, 0),
('14582017', 'elijah', 1458, 2017, 0),
('14592017', 'elijah', 1459, 2017, 0),
('14602017', 'elijah', 1460, 2017, 0),
('14612017', 'elijah', 1461, 2017, 0),
('14622017', 'elijah', 1462, 2017, 0),
('14632017', 'elijah', 1463, 2017, 0),
('14642017', 'elijah', 1464, 2017, 0),
('14652017', 'elijah', 1465, 2017, 0),
('14662017', 'elijah', 1466, 2017, 0),
('14672017', 'elijah', 1467, 2017, 0),
('14682017', 'elijah', 1468, 2017, 0),
('14692017', 'elijah', 1469, 2017, 0),
('14702017', 'elijah', 1470, 2017, 0),
('14712017', 'elijah', 1471, 2017, 0),
('14722017', 'elijah', 1472, 2017, 0),
('14732017', 'elijah', 1473, 2017, 0),
('14742017', 'elijah', 1474, 2017, 0),
('14752017', 'elijah', 1475, 2017, 0),
('14762017', 'elijah', 1476, 2017, 0),
('14772017', 'elijah', 1477, 2017, 0),
('14782017', 'elijah', 1478, 2017, 0),
('14792017', 'elijah', 1479, 2017, 0),
('14802017', 'elijah', 1480, 2017, 0),
('14812017', 'elijah', 1481, 2017, 0),
('14822017', 'elijah', 1482, 2017, 0),
('14832017', 'elijah', 1483, 2017, 0),
('14842017', 'elijah', 1484, 2017, 0),
('14852017', 'elijah', 1485, 2017, 0),
('14862017', 'elijah', 1486, 2017, 0),
('14872017', 'elijah', 1487, 2017, 0),
('14882017', 'elijah', 1488, 2017, 0),
('14892017', 'elijah', 1489, 2017, 0),
('14902017', 'elijah', 1490, 2017, 0),
('14912017', 'elijah', 1491, 2017, 0),
('14922017', 'elijah', 1492, 2017, 0),
('14932017', 'elijah', 1493, 2017, 0),
('14942017', 'elijah', 1494, 2017, 0),
('14952017', 'elijah', 1495, 2017, 0),
('14962017', 'elijah', 1496, 2017, 0),
('14972017', 'elijah', 1497, 2017, 0),
('14982017', 'elijah', 1498, 2017, 0),
('14992017', 'elijah', 1499, 2017, 0),
('15002017', 'elijah', 1500, 2017, 0),
('15012017', 'elijah', 1501, 2017, 0),
('15022017', 'elijah', 1502, 2017, 0),
('15032017', 'elijah', 1503, 2017, 0),
('15042017', 'elijah', 1504, 2017, 0),
('15052017', 'elijah', 1505, 2017, 0),
('15062017', 'elijah', 1506, 2017, 0),
('15072017', 'elijah', 1507, 2017, 0),
('15082017', 'elijah', 1508, 2017, 0),
('15092017', 'elijah', 1509, 2017, 0),
('15102017', 'elijah', 1510, 2017, 0),
('15112017', 'elijah', 1511, 2017, 0),
('15122017', 'elijah', 1512, 2017, 0),
('15132017', 'elijah', 1513, 2017, 0),
('15142017', 'elijah', 1514, 2017, 0),
('15152017', 'elijah', 1515, 2017, 0),
('15162017', 'elijah', 1516, 2017, 0),
('15172017', 'elijah', 1517, 2017, 0),
('15182017', 'elijah', 1518, 2017, 0),
('15192017', 'elijah', 1519, 2017, 0),
('15202017', 'elijah', 1520, 2017, 0),
('15212017', 'elijah', 1521, 2017, 0),
('15222017', 'elijah', 1522, 2017, 0),
('15232017', 'elijah', 1523, 2017, 0),
('15242017', 'elijah', 1524, 2017, 0),
('15252017', 'elijah', 1525, 2017, 0),
('15262017', 'elijah', 1526, 2017, 0),
('15272017', 'elijah', 1527, 2017, 0),
('15282017', 'elijah', 1528, 2017, 0),
('15292017', 'elijah', 1529, 2017, 0),
('15302017', 'elijah', 1530, 2017, 0),
('15312017', 'elijah', 1531, 2017, 0),
('15322017', 'elijah', 1532, 2017, 0),
('15332017', 'elijah', 1533, 2017, 0),
('15342017', 'elijah', 1534, 2017, 0),
('15352017', 'elijah', 1535, 2017, 0),
('15362017', 'elijah', 1536, 2017, 0),
('15372017', 'elijah', 1537, 2017, 0),
('15382017', 'elijah', 1538, 2017, 0),
('15392017', 'elijah', 1539, 2017, 0),
('15402017', 'elijah', 1540, 2017, 0),
('15412017', 'elijah', 1541, 2017, 0),
('15422017', 'elijah', 1542, 2017, 0),
('15432017', 'elijah', 1543, 2017, 0),
('15442017', 'elijah', 1544, 2017, 0),
('15452017', 'elijah', 1545, 2017, 0),
('15462017', 'elijah', 1546, 2017, 0),
('15472017', 'elijah', 1547, 2017, 0),
('15482017', 'elijah', 1548, 2017, 0),
('15492017', 'elijah', 1549, 2017, 0),
('15502017', 'elijah', 1550, 2017, 0),
('15512017', 'elijah', 1551, 2017, 0),
('15522017', 'elijah', 1552, 2017, 0),
('15532017', 'elijah', 1553, 2017, 0),
('15542017', 'elijah', 1554, 2017, 0),
('15552017', 'elijah', 1555, 2017, 0),
('15562017', 'elijah', 1556, 2017, 0),
('15572017', 'elijah', 1557, 2017, 0),
('15582017', 'elijah', 1558, 2017, 0),
('15592017', 'elijah', 1559, 2017, 0),
('15602017', 'elijah', 1560, 2017, 0),
('15612017', 'elijah', 1561, 2017, 0),
('15622017', 'elijah', 1562, 2017, 0),
('15632017', 'elijah', 1563, 2017, 0),
('15642017', 'elijah', 1564, 2017, 0),
('15652017', 'elijah', 1565, 2017, 0),
('15662017', 'elijah', 1566, 2017, 0),
('15672017', 'elijah', 1567, 2017, 0),
('15682017', 'elijah', 1568, 2017, 0),
('15692017', 'elijah', 1569, 2017, 0),
('15702017', 'elijah', 1570, 2017, 0),
('15712017', 'elijah', 1571, 2017, 0),
('15722017', 'elijah', 1572, 2017, 0),
('15732017', 'elijah', 1573, 2017, 0),
('15742017', 'elijah', 1574, 2017, 0),
('15752017', 'elijah', 1575, 2017, 0),
('15762017', 'elijah', 1576, 2017, 0),
('15772017', 'elijah', 1577, 2017, 0),
('15782017', 'elijah', 1578, 2017, 0),
('15792017', 'elijah', 1579, 2017, 0),
('15802017', 'elijah', 1580, 2017, 0),
('15812017', 'elijah', 1581, 2017, 0),
('15822017', 'elijah', 1582, 2017, 0),
('15832017', 'elijah', 1583, 2017, 0),
('15842017', 'elijah', 1584, 2017, 0),
('15852017', 'elijah', 1585, 2017, 0),
('15862017', 'elijah', 1586, 2017, 0),
('15872017', 'elijah', 1587, 2017, 0),
('15882017', 'elijah', 1588, 2017, 0),
('15892017', 'elijah', 1589, 2017, 0),
('15902017', 'elijah', 1590, 2017, 0),
('15912017', 'elijah', 1591, 2017, 0),
('15922017', 'elijah', 1592, 2017, 0),
('15932017', 'elijah', 1593, 2017, 0),
('15942017', 'elijah', 1594, 2017, 0),
('15952017', 'elijah', 1595, 2017, 0),
('15962017', 'elijah', 1596, 2017, 0),
('15972017', 'elijah', 1597, 2017, 0),
('15982017', 'elijah', 1598, 2017, 0),
('15992017', 'elijah', 1599, 2017, 0),
('16002017', 'elijah', 1600, 2017, 0),
('16012017', 'elijah', 1601, 2017, 0),
('16022017', 'elijah', 1602, 2017, 0),
('16032017', 'elijah', 1603, 2017, 0),
('16042017', 'elijah', 1604, 2017, 0),
('16052017', 'elijah', 1605, 2017, 0),
('16062017', 'elijah', 1606, 2017, 0),
('16072017', 'elijah', 1607, 2017, 0),
('16082017', 'elijah', 1608, 2017, 0),
('16092017', 'elijah', 1609, 2017, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apr`
--
ALTER TABLE `apr`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`memberIdDate`);

--
-- Indexes for table `aug`
--
ALTER TABLE `aug`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `churchinfo`
--
ALTER TABLE `churchinfo`
  ADD PRIMARY KEY (`churchname`);

--
-- Indexes for table `dec`
--
ALTER TABLE `dec`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `expenditures`
--
ALTER TABLE `expenditures`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `feb`
--
ALTER TABLE `feb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`groupId`),
  ADD UNIQUE KEY `memberId` (`memberId`);

--
-- Indexes for table `jan`
--
ALTER TABLE `jan`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `jul`
--
ALTER TABLE `jul`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `jun`
--
ALTER TABLE `jun`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `mar`
--
ALTER TABLE `mar`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `may`
--
ALTER TABLE `may`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `memberinfo`
--
ALTER TABLE `memberinfo`
  ADD PRIMARY KEY (`memberId`);

--
-- Indexes for table `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nov`
--
ALTER TABLE `nov`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `oct`
--
ALTER TABLE `oct`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `otherincome`
--
ALTER TABLE `otherincome`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sep`
--
ALTER TABLE `sep`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`memiddate`,`memid`,`date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apr`
--
ALTER TABLE `apr`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `aug`
--
ALTER TABLE `aug`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dec`
--
ALTER TABLE `dec`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `expenditures`
--
ALTER TABLE `expenditures`
  MODIFY `ID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `feb`
--
ALTER TABLE `feb`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `group`
--
ALTER TABLE `group`
  MODIFY `groupId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `jan`
--
ALTER TABLE `jan`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jul`
--
ALTER TABLE `jul`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jun`
--
ALTER TABLE `jun`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mar`
--
ALTER TABLE `mar`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `may`
--
ALTER TABLE `may`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mission`
--
ALTER TABLE `mission`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `nov`
--
ALTER TABLE `nov`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `oct`
--
ALTER TABLE `oct`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `otherincome`
--
ALTER TABLE `otherincome`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sep`
--
ALTER TABLE `sep`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
