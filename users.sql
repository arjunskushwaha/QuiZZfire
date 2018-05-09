-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2017 at 09:22 AM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `score` varchar(50) NOT NULL,
  `sessionID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `password`, `score`, `sessionID`) VALUES
(1, 'Group1', 'iitbh1_n863f', '0', ''),
(2, 'Group2', 'iitbh2_c512n', '0', ''),
(3, 'Group3', 'iitbh3_d278y', '0', ''),
(4, 'Group4', 'iitbh4_s336e', '0', ''),
(5, 'Group5', 'iitbh5_u656a', '0', ''),
(6, 'Group6', 'iitbh6_t386t', '0', ''),
(7, 'Group7', 'iitbh7_y287z', '0', ''),
(8, 'Group8', 'iitbh8_e565f', '0', ''),
(9, 'Group9', 'iitbh9_d702b', '0', ''),
(10, 'Group10', 'iitbh10_t624x', '0', ''),
(11, 'Group11', 'iitbh11_v202p', '0', ''),
(12, 'Group12', 'iitbh12_e467m', '0', ''),
(13, 'Group13', 'iitbh13_n480g', '0', ''),
(14, 'Group14', 'iitbh14_r578o', '0', ''),
(15, 'Group15', 'iitbh15_c474y', '0', ''),
(16, 'Group16', 'iitbh16_l191n', '0', ''),
(17, 'Group17', 'iitbh17_a77b', '0', ''),
(18, 'Group18', 'iitbh18_p51m', '0', ''),
(19, 'Group19', 'iitbh19_g846f', '0', ''),
(20, 'Group20', 'iitbh20_s736w', '0', ''),
(21, 'Group21', 'iitbh21_v160g', '0', ''),
(22, 'Group22', 'iitbh22_j397i', '0', ''),
(23, 'Group23', 'iitbh23_v814j', '0', ''),
(24, 'Group24', 'iitbh24_p998k', '0', ''),
(25, 'Group25', 'iitbh25_y810i', '0', ''),
(26, 'Group26', 'iitbh26_l33t', '0', ''),
(27, 'Group27', 'iitbh27_g17o', '0', ''),
(28, 'Group28', 'iitbh28_y847r', '0', ''),
(29, 'Group29', 'iitbh29_w761k', '0', ''),
(30, 'Group30', 'iitbh30_r69p', '0', ''),
(31, 'Group31', 'iitbh31_g349c', '0', ''),
(32, 'Group32', 'iitbh32_u795t', '0', ''),
(33, 'Group33', 'iitbh33_h185k', '0', ''),
(34, 'Group34', 'iitbh34_y390p', '0', ''),
(35, 'Group35', 'iitbh35_s400a', '0', ''),
(36, 'Group36', 'iitbh36_j321m', '0', ''),
(37, 'Group37', 'iitbh37_l322y', '0', ''),
(38, 'Group38', 'iitbh38_t265u', '0', ''),
(39, 'Group39', 'iitbh39_q902u', '0', ''),
(40, 'Group40', 'iitbh40_j593f', '0', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
