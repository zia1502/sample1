-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 21, 2021 at 01:58 PM
-- Server version: 10.3.32-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mdspbd_edaktar`
--

-- --------------------------------------------------------

--
-- Table structure for table `dr_designation`
--

CREATE TABLE `dr_designation` (
  `id` int(11) NOT NULL,
  `designation` varchar(100) CHARACTER SET utf8 NOT NULL,
  `entry_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dr_designation`
--

INSERT INTO `dr_designation` (`id`, `designation`, `entry_time`, `update_time`) VALUES
(1, 'Professor', 1438594695, 1438594695),
(2, 'Associate Professor', 1438594710, 1438594710),
(3, 'Assistant Professor', 1438594722, 1438594825),
(5, 'PhD Research Fellow', 1439103365, 1439103365),
(6, 'Medical Officer', 1439103377, 1439103377),
(7, 'Others', 1439115357, 1439115357),
(8, 'Professor CUM Director', 1439706941, 1439706941),
(9, 'Cardiac Surgeon', 1439708185, 1439708185),
(10, 'Perfusionist', 1439709116, 1439709116),
(11, 'Resident Sergeon', 1439800286, 1439800286),
(12, 'Professor Of Urology', 1439801107, 1439801107),
(13, 'Registrar', 1439801652, 1439801662),
(14, 'Psychiatry(Mental Health)', 1439805007, 1439805007),
(15, 'Consultant & Laparoscopy Surgeon', 1439806268, 1439806268),
(16, 'Assistan Registrar (Cardiology)', 1439807375, 1439807375),
(17, 'Senior Consultant Surgon', 1439809210, 1439809210),
(18, 'Consultant', 1439810628, 1439810628),
(19, 'Director', 1439870615, 1439870615),
(20, 'Professor Cardio Thoracic & Vascular Surgery & Chairman', 1439874641, 1439874641),
(21, 'Cardiac Surgery', 1439874648, 1439874648),
(22, 'Chairman & Professor', 1439876673, 1451143493),
(23, 'Medicine Consultant', 1439879020, 1439879020),
(24, 'Dental Surgeon', 1439881005, 1439881005),
(25, 'Professor & Consultant Clinical Hematology', 1439882311, 1439882311),
(26, 'Lecturer,Dept Of Orthodentics', 1439883510, 1439883510),
(27, 'MS trainee doctor', 1439894922, 1439894922),
(28, 'Paediatric Surgery', 1439897552, 1439897552),
(29, 'Assistant professor & Head', 1439899504, 1439899504),
(30, 'Associate Professor of Surgery', 1439961911, 1439961911),
(31, 'Cardiology', 1439962299, 1439962299),
(32, 'Professor of Surgery', 1439964934, 1439964934),
(33, 'Associate Professor & Head', 1439967715, 1439967715),
(34, 'Professor of Dentistry', 1439975094, 1439975094),
(35, 'ASSOCIATE PROFESSOR OF MEDICINE', 1440249373, 1440249373),
(36, 'Lecturer', 1440393456, 1440393456),
(37, 'Research Officer', 1442423156, 1442423156),
(38, 'Junior Consultant', 1442825112, 1442825112),
(39, 'Deputy Secretary of the Govt.', 1443860777, 1443860777),
(40, 'Resident', 1444565192, 1444565192),
(41, 'Chairman', 1444752124, 1444752124),
(42, 'Director', 1447841286, 1447841286),
(43, 'Assistant Director', 1447841294, 1447841294),
(44, 'Assistant Register', 1447841361, 1447841361),
(45, 'Senior Consultant', 1447841376, 1447841376),
(46, 'Chief Consultant', 1447841397, 1447841397),
(47, 'MD (Cardiology)', 1448443282, 1448443282),
(48, 'Professor of Cardiology', 1448869344, 1448869344),
(49, 'Professor & Head', 1448945101, 1450174563),
(50, 'Professor, Department of Medicine', 1448945114, 1448948979),
(51, 'Diabetologist', 1449044284, 1449044284),
(52, 'Research Assistant  ', 1449305998, 1449305998),
(53, 'Department of Phisiotherapy', 1449337579, 1449337579),
(54, 'Neuro Surgeon', 1449652420, 1449652420),
(55, 'Pro-vice Chancellor', 1450153442, 1450153442),
(57, 'FCPS Surgery', 1450676760, 1450676760),
(58, 'Managing Director', 1450863187, 1450863187),
(59, 'Chairman & Associate Professor', 1451143594, 1451143594);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dr_designation`
--
ALTER TABLE `dr_designation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dr_designation`
--
ALTER TABLE `dr_designation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
