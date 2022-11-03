-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 03, 2022 at 03:18 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendancedatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `classtests`
--

DROP TABLE IF EXISTS `classtests`;
CREATE TABLE IF NOT EXISTS `classtests` (
  `testID` int(11) NOT NULL AUTO_INCREMENT,
  `courseID` int(11) NOT NULL,
  `testTitle` varchar(64) NOT NULL,
  `Question1` varchar(200) NOT NULL,
  `Question2` varchar(200) NOT NULL,
  `Question3` varchar(200) NOT NULL,
  `Question4` varchar(200) NOT NULL,
  `Question5` varchar(200) NOT NULL,
  PRIMARY KEY (`testID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classtests`
--

INSERT INTO `classtests` (`testID`, `courseID`, `testTitle`, `Question1`, `Question2`, `Question3`, `Question4`, `Question5`) VALUES
(1, 1, 'SAD Quiz', 'What does the acronym SCRUM stand for?', 'What is a class diagram?', 'What is Pi to 4 decimal places?', 'What does a SWAT analysis help you analyse?', 'What is the meaning of the number 42?'),
(3, 3, 'Securing Networks Quiz', 'What is a packet', 'What is a MITM attack', 'What does DDoS stand for', 'What is Packet Loss', 'What is wireshark?'),
(5, 1, 'SAD Test 2', 'Why does SAD exist', 'What applications does a gantt chart have', 'Why does the number 42 mean so much', 'Are you okay', 'When dealing with mass groups what is the best management method');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `courseID` int(11) NOT NULL AUTO_INCREMENT,
  `courseName` varchar(64) NOT NULL,
  `courseDescription` varchar(1000) NOT NULL,
  PRIMARY KEY (`courseID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courseID`, `courseName`, `courseDescription`) VALUES
(1, 'Systems Analysis', 'This course focuses on the technical documentation required for system design and work'),
(3, 'Securing Networks', 'This class teaches students how to secure networks from online attacks.'),
(5, 'IT Project 1', 'This project is designed to help students gain a better grasp of real life project development and management skills');

-- --------------------------------------------------------

--
-- Table structure for table `personid`
--

DROP TABLE IF EXISTS `personid`;
CREATE TABLE IF NOT EXISTS `personid` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `firstName` varchar(64) NOT NULL,
  `lastName` varchar(64) NOT NULL,
  `gender` varchar(64) NOT NULL,
  `age` int(11) NOT NULL,
  `DOB` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `classID` int(11) NOT NULL,
  `daysMissed` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personid`
--

INSERT INTO `personid` (`ID`, `type`, `password`, `firstName`, `lastName`, `gender`, `age`, `DOB`, `email`, `classID`, `daysMissed`) VALUES
(3, 'teacher', 'apples', 'Matthew', 'Castles', 'Male', 21, '08/11/2000', 'matthewcastles@hotmail.com', 1, 0),
(4, 'student', 'potato', 'Garry', 'Bloggs', 'Male', 14, '08/11/2008', 'garrybloggs@gmail.com', 1, 7),
(6, 'student', 'peaches', 'Mary', 'Poppins', 'Female', 21, '07/06/2001', 'mary.poppins@gmail.com', 0, 0),
(8, 'student', 'star', 'Bilsby', 'Starlove', 'Male', 20, '01/01/2002', 'bilsy@gmail.com', 1, 6),
(9, 'student', 'jim', 'Jimmy', 'Neutron', 'M', 22, '08/11/2000', 'jimmy@gmail.com', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `quizresponses`
--

DROP TABLE IF EXISTS `quizresponses`;
CREATE TABLE IF NOT EXISTS `quizresponses` (
  `quizReference` int(11) NOT NULL AUTO_INCREMENT,
  `studentID` int(11) NOT NULL,
  `quizID` int(11) NOT NULL,
  `Answer1` varchar(2000) NOT NULL,
  `Answer2` varchar(2000) NOT NULL,
  `Answer3` varchar(2000) NOT NULL,
  `Answer4` varchar(2000) NOT NULL,
  `Answer5` varchar(2000) NOT NULL,
  PRIMARY KEY (`quizReference`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quizresponses`
--

INSERT INTO `quizresponses` (`quizReference`, `studentID`, `quizID`, `Answer1`, `Answer2`, `Answer3`, `Answer4`, `Answer5`) VALUES
(5, 8, 1, 'sfheh35ywrhsdf', 'sfhdfgjsdgjsd', 'dfgghsdfhsdgjd', 'ghdshdsgfj', 'dfhdsghf'),
(6, 9, 3, '', '', '', '', ''),
(4, 3, 1, '46dngsjkd sjdn g', 'adgnadjigndajgna', 'gadgadhad', 'afafasf', 'hwrhshasdf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
