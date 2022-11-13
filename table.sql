-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2022 at 06:31 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `table`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `mem_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(120) NOT NULL,
  `email` varchar(150) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` varchar(21) DEFAULT NULL,
  `profession` varchar(120) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `location` text DEFAULT NULL,
  `image_url` varchar(250) DEFAULT NULL,
  `website` varchar(150) DEFAULT NULL,
  `about_me` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`mem_id`, `username`, `password`, `email`, `name`, `dob`, `profession`, `gender`, `location`, `image_url`, `website`, `about_me`) VALUES
(1, 'aishu', '7b8e452723c401c7e66480f35685e530', 'aishu@gmail.com', 'aishu', '22/09/2002', 'web developer', 'female', 'India', '1_1665064013_team-member-01.jpg', 'none', 'I made this website'),
(2, 'arnav', '68136504e962066ad7d926605b3e0967', 'arnav@gmail.com', 'Arnav Singh', '14/09/1995', 'Civil Engineer', 'male', 'India', '2_1665072357_men1.jpg', '27', 'I work as a civil engineer at fleur coop.\r\nContact: +91-345678975'),
(3, 'sreeya', '01a3fcb0ecea9debb477e5b15b782f99', 'sreeya@gmail.com', 'Sreeya Anand', '03/09/1998', 'House surgeon', 'female', 'India', '3_1665072703_wo2.jpg', '24', 'I am a House surgeon at Apollo hospital.\r\nContact: +91-35748394'),
(4, 'priyansh', '65536936ccaa32e95129c4b47e9f4ade', 'priyansh@gmail.com', 'Priyansh Kumar', '09/05/1994', 'Software Engineer', 'male', 'India', '4_1665072984_men2.jpg', '28', 'I am a Software Engineer at Amazon.\r\nContact: +91-73293746'),
(5, 'meera', 'd06f68e42c98e9f7f6f89741dee88674', 'meera@gmail.com', 'Meera Ahuja', '12/03/1999', 'Professor', 'female', 'India', '5_1665073092_wo3.jpg', '23', 'I am a Professor at IIT.\r\nContact: +91-343638932'),
(6, 'sathish', '61b2345ba5c91191680fe0d9c96a82e1', 'sathish@gmail.com', 'Sathish Raj', '12/12/1997', 'Accountant', 'male', 'India', '6_1665073243_mo3.jpg', '25', 'Accountant at JP Moragan Chase. \r\nContact: +91-734273931'),
(7, 'lakshmi', '9a08d00b4f7fadebd205a8680334b07d', 'lakshmi@gmail.com', 'Lakshmi Devi', '13/04/1999', 'Nurse', 'female', 'India', '7_1665073398_wo4.jpg', '23', 'Nurse at NMC hospital.\r\nContact: +91-790253722'),
(8, 'sanvi', '6bcfc22749c68ec6307bb909753adc1b', 'sanvi@gmail.com', 'Sanvi Kumar', '22/10/1997', 'Pilot', 'female', 'India', '8_1665073525_wo12.jpg', '25', 'Pilot at Indian Airways'),
(9, 'aryan', '8997b120f1514ea6dae32e21565e0d77', 'aryan@gmail.com', 'Aryan Rai', '13/11/1997', 'Data Scientist', 'male', 'India', '9_1665073631_mo1.jpg', '25', 'Data Scientist at Goldman Sachs.\r\nContact: +91-08353729'),
(10, 'ravi', 'd3e84c0c980d335c6fc7f9f791627b28', 'ravi@gmail.com', 'Ravi Gupta', '19/01/1991', 'Entrepreuner', 'male', 'India', '10_1665073787_mo4.jpg', '30', 'Entrepreuner at my own start up neurostellar.io\r\nContact: +91-036427393');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`mem_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
