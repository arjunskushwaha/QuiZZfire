-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2017 at 07:19 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iitbh_quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `Question Number` int(11) NOT NULL,
  `thequestions` varchar(500) NOT NULL,
  `Answer` varchar(500) NOT NULL,
  `img_addr` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`Question Number`, `thequestions`, `Answer`, `img_addr`) VALUES
(1, 'Q1) What gas causes Uranus&#39; blue-green colour?', 'A1) Methane', NULL),
(2, 'Q2) Largest organ in the human body ?', 'A2) Skin', NULL),
(3, 'Q3) What prefix is added if a number is multiplied by 10 raised to the 15th power?', 'A3) Peta', NULL),
(4, 'Q4) Where is the highest peak in the solar system?', 'A4) Mars', NULL),
(5, 'Q5) What are up, down, charm, strange, top and bottom?', 'A5) Quarks', NULL),
(6, '**Q6) Anmol, Sourabh, Ujjwal, Pintu, Neelmani are five speakers who have to speak on QuiZZFire\r\nday, not necessarily in the same order. Ujjwal is neither the first nor the last speaker. There are\r\nthree speakers after Pintu and three speakers ahead of Neelmani. If Anmol speaks after Sourabh,\r\nthen who is the last speaker to speak?\r\nA. Pintu\r\nB. Neelmani\r\nC. Anmol\r\nD. Sourabh\r\nE. Cannot be determined.', '**A6) Anmol', NULL),
(7, 'Q7) Name the ocean zone which has rapid temperature drops. They block sonars.', 'A7) Thermocline', NULL),
(8, 'Q8) First manmade object to move faster than sound?', 'A8) A Whip', NULL),
(9, 'Q9) Ringelmann scale measures apparent density of ____ ?', 'A9) Smoke', NULL),
(10, 'Q10) The first time the letter “A” appears when you start spelling out the natural numbers is at\r\nthe natural number ____ ?', 'A10) Thousand', NULL),
(11, 'Q11) A man is wearing black. Black shoes, socks, trousers, jumper, gloves, and balaclava. He is\r\nwalking down a dark street with all the street lamps off. A black car is coming toward him with its\r\nlights off too, but somehow manages to stop in time. How did the driver see the man?', 'A11) It was daytime', NULL),
(12, 'Q12) A student’s science project was making a rain gauge to measure the amount of rain for one\r\nweek. It rained each day that week, starting on Monday, and each day the amount of rain in the\r\ngauge doubled. By the following Sunday, the rain gauge was completely filled. On which day was\r\nthe rain gauge half-filled?', 'A12) Saturday', NULL),
(13, 'Q13) A number of children are standing in a circle. They are evenly spaced and the 6th child is\r\ndirectly opposite the 16th child. How many children are there altogether?', 'A13) 20', NULL),
(14, '**Q14) Maximum number of triangles that can be made using 6 rods each of equal length (Rods\r\nshould touch each other only at the end points).', '**A14) 6 (Regular triangular pyramid)', NULL),
(15, 'Q15) What mathematical day is celebrated every year on March 14 ?', 'A15) Pi Day', NULL),
(16, 'Q16) A doctor prescribes you 5 capsules and tells you to take one every 30 minutes. How long will\r\nit take you to finish the capsules if you follow the doctor’s orders?', 'A16) 2 hours', NULL),
(17, 'Q17) You look into a mirror and see a digital clock, and it seems to read 02:01. What is the actual\r\ntime ?', 'A17) 10:50', NULL),
(18, '**Q18) Few friends throw Javelin. Arjun throws his 5 yards, Vijit throws his 4.5 yards, Aprataksh\r\nthrows his 5 yards, and Shubham throws his 6.5 yards. How many feet did they throw\r\n“ALTOGETHER”?', '**A18) 63', NULL),
(19, 'Q19) Choose the most relatable Venn-Diagram for the following :\r\nCitizen, Educated, Men', 'A19) C', './img/Q19.png'),
(20, 'Q20)', 'A20) A', './img/Q20.png'),
(21, 'Q21) Number of times in a day, the arms of a clock gets collinear ?', 'A21) 44', NULL),
(22, 'Q22) Find the odd one out:\r\nPandora, Ganymede, Pan, Rhea.', 'A22) Ganymede', NULL),
(23, 'Q23) Which country’s constitution gives the right to a man to marry his widow’s sister ?', 'A23) None. (The man is dead XD)', NULL),
(24, '**Q24) Find the odd one out :', '**A24) C', './img/Q24.png'),
(25, 'Q25) Densest material on Earth ?', 'A25) Osmium', NULL),
(26, '**Q26) Odd One Out ?', '**A26) C', './img/Q26.png'),
(27, 'Q27) Planet with the shortest year ?', 'A27) Mercury', NULL),
(28, 'Q28) The red house is on the white street, and the blue house is on the red street. Where is the\r\nwhite house?', 'A28) Washington DC', NULL),
(29, 'Q29) The password for a lock is 4 times of the total number of squares in chessboard. What is the\r\npassword ?', 'A29) 816', NULL),
(30, '**Q30) Find the odd one out:\r\nSTAR, FLOW, TEN, TIDE, SUN.', '**A30) SUN', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`Question Number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `Question Number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
