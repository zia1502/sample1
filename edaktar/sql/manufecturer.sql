-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 21, 2021 at 01:59 PM
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
-- Table structure for table `manufecturer`
--

CREATE TABLE `manufecturer` (
  `cid` int(11) NOT NULL,
  `class_id` int(11) DEFAULT NULL,
  `cat_name` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `manufecturer_title` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `short_desc` varchar(250) DEFAULT NULL,
  `sequence` int(11) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `banImage` varchar(200) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `create_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufecturer`
--

INSERT INTO `manufecturer` (`cid`, `class_id`, `cat_name`, `manufecturer_title`, `short_desc`, `sequence`, `image`, `banImage`, `status`, `create_date`) VALUES
(1, NULL, 'Acme Laboratories Ltd.', 'Acme Laboratories Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(2, NULL, 'Acme Specialized Pharmaceuticals Ltd.', 'Acme Specialized Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(3, NULL, 'Acmunio International Ltd.', 'Acmunio International Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(4, NULL, 'Active Fine Chemicals Ltd.', 'Active Fine Chemicals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(5, NULL, 'Ad-din Pharmaceuticals Ltd.', 'Ad-din Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(6, NULL, 'Advent Pharma Ltd.', 'Advent Pharma Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(7, NULL, 'Al-Madina Pharmaceuticals Ltd.', 'Al-Madina Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(8, NULL, 'Albion Laboratories Ltd.', 'Albion Laboratories Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(9, NULL, 'Alco Pharma Limited', 'Alco Pharma Limited', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(10, NULL, 'Alkad Laboratories', 'Alkad Laboratories', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(11, NULL, 'Allied Pharmaceuticals Ltd.', 'Allied Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(12, NULL, 'Ambee Pharmaceuticals Ltd.', 'Ambee Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(13, NULL, 'Amico Laboratories Ltd.', 'Amico Laboratories Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(14, NULL, 'Amulet Pharmaceuticals Ltd.', 'Amulet Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(15, NULL, 'APC Pharma Limited', 'APC Pharma Limited', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(16, NULL, 'Apex Pharmaceuticals Ltd.', 'Apex Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(17, NULL, 'Apollo Pharmaceutical Laboratories Ltd.', 'Apollo Pharmaceutical Laboratories Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(18, NULL, 'Aristopharma Limited', 'Aristopharma Limited', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(19, NULL, 'Aristopharma Limited, Gazipur', 'Aristopharma Limited, Gazipur', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(20, NULL, 'Asiatic Laboratories Ltd.', 'Asiatic Laboratories Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(21, NULL, 'Astra Biopharmaceuticals Ltd.', 'Astra Biopharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(22, NULL, 'Aztec Pharmaceuticals Ltd.', 'Aztec Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(23, NULL, 'Bangladesh Antibiotic Industries Limited', 'Bangladesh Antibiotic Industries Limited', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(24, NULL, 'Beacon Pharmaceuticals Ltd.', 'Beacon Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(25, NULL, 'Belsen Pharmaceuticals Ltd.', 'Belsen Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(26, NULL, 'Bengal Drugs & Chemical Works Pharm. Ltd.', 'Bengal Drugs & Chemical Works Pharm. Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(27, NULL, 'Bengal Remedies Ltd.', 'Bengal Remedies Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(28, NULL, 'Benham Pharmaceuticals Ltd.', 'Benham Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(29, NULL, 'Beximco Pharmaceuticals Ltd.', 'Beximco Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(30, NULL, 'Beximco Pharmaceuticals Ltd., Kaliakoir', 'Beximco Pharmaceuticals Ltd., Kaliakoir', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(31, NULL, 'Biogen Pharmaceuticals Ltd.', 'Biogen Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(32, NULL, 'Biopharma Ltd.', 'Biopharma Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(33, NULL, 'Bios Pharmaceuticals Ltd.', 'Bios Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(34, NULL, 'Bridge Pharmaceuticals Ltd.', 'Bridge Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(35, NULL, 'Bristol Pharma Ltd.', 'Bristol Pharma Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(36, NULL, 'BS Industries Ltd.', 'BS Industries Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(37, NULL, 'Centeon Pharma Limited', 'Centeon Pharma Limited', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(38, NULL, 'Central Pharmaceutical Ltd.', 'Central Pharmaceutical Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(39, NULL, 'Chemist Laboratories Ltd.', 'Chemist Laboratories Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(40, NULL, 'Cipla Ltd.', 'Cipla Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(41, NULL, 'City Pharmaceuticals', 'City Pharmaceuticals', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(42, NULL, 'Concord Pharmaceuticals Ltd.', 'Concord Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(43, NULL, 'Cosmic Pharma Ltd.', 'Cosmic Pharma Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(44, NULL, 'Cosmo Pharma Laboratories Ltd.', 'Cosmo Pharma Laboratories Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(45, NULL, 'Crystal Pharmaceuticals Ltd.', 'Crystal Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(46, NULL, 'Decent Pharma Laboratories Ltd.', 'Decent Pharma Laboratories Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(47, NULL, 'Delta Chemicals Ltd.', 'Delta Chemicals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(48, NULL, 'Delta Pharma Limited', 'Delta Pharma Limited', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(49, NULL, 'Desh Pharmaceuticals Ltd.', 'Desh Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(50, NULL, 'Doctor Tims Pharmaceuticals Ltd.', 'Doctor Tims Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(51, NULL, 'Doctor\'s Chemicals Works Ltd.', 'Doctor\'s Chemicals Works Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(52, NULL, 'Drug International Ltd.', 'Drug International Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(53, NULL, 'Drug International Ltd. Unit-2', 'Drug International Ltd. Unit-2', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(54, NULL, 'EDCL (Bogra)', 'EDCL (Bogra)', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(55, NULL, 'EDCL (Dhaka)', 'EDCL (Dhaka)', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(56, NULL, 'Edruc Ltd.', 'Edruc Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(57, NULL, 'EMCS Pharma Limited', 'EMCS Pharma Limited', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(58, NULL, 'Eon Pharmaceuticals Ltd.', 'Eon Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(59, NULL, 'Eskayef Bangladesh Ltd., Tongi', 'Eskayef Bangladesh Ltd., Tongi', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(60, NULL, 'Eskayef Pharmaceuticals Ltd. Mirpur.', 'Eskayef Pharmaceuticals Ltd. Mirpur.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(61, NULL, 'Eskayef Pharmaceuticals Ltd., Narayanganj', 'Eskayef Pharmaceuticals Ltd., Narayanganj', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(62, NULL, 'Ethical Drug Ltd.', 'Ethical Drug Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(63, NULL, 'Euro Pharma Ltd.', 'Euro Pharma Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(64, NULL, 'Everest Pharmaceuticals Ltd.', 'Everest Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(65, NULL, 'FnF Pharmaceuticals Ltd.', 'FnF Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(66, NULL, 'G. A. Company Ltd.', 'G. A. Company Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(67, NULL, 'General Pharmaceuticals Ltd, Unit-2', 'General Pharmaceuticals Ltd, Unit-2', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(68, NULL, 'General Pharmaceuticals Ltd.', 'General Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(69, NULL, 'Gentry Pharmaceuticals Ltd.', 'Gentry Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(70, NULL, 'Genvio Pharma Ltd.', 'Genvio Pharma Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(71, NULL, 'Get Well Limited', 'Get Well Limited', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(72, NULL, 'GlaxoSmithKline Bangladesh Ltd.', 'GlaxoSmithKline Bangladesh Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(73, NULL, 'Global Capsules Ltd.', 'Global Capsules Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(74, NULL, 'Global Capsules Ltd., Gelatin Division', 'Global Capsules Ltd., Gelatin Division', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(75, NULL, 'Global Heavy Chemicals Ltd.', 'Global Heavy Chemicals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(76, NULL, 'Globe Pharmaceuticals Ltd.', 'Globe Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(77, NULL, 'Globex Pharmaceuticals Ltd.', 'Globex Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(78, NULL, 'Gonoshasthaya Antibiotic Ltd.', 'Gonoshasthaya Antibiotic Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(79, NULL, 'Gonoshasthaya Chemical Ltd.', 'Gonoshasthaya Chemical Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(80, NULL, 'Gonoshasthaya Pharmaceuticals Ltd.', 'Gonoshasthaya Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(81, NULL, 'Goodman Pharmaceuticals Ltd', 'Goodman Pharmaceuticals Ltd', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(82, NULL, 'Greenland Pharmaceuticals Ltd.', 'Greenland Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(83, NULL, 'Guardian Healthcare Ltd.', 'Guardian Healthcare Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(84, NULL, 'Hallmark Pharmaceuticals Ltd.', 'Hallmark Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(85, NULL, 'Healthcare Pharmaceuticals Ltd.', 'Healthcare Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(86, NULL, 'Hope Pharmaceuticals Ltd.', 'Hope Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(87, NULL, 'Hudson Pharmaceuticals Ltd.', 'Hudson Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(88, NULL, 'Hydroxide Ltd.', 'Hydroxide Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(89, NULL, 'Ibn Sina Pharmaceutical Ind. Ltd.', 'Ibn Sina Pharmaceutical Ind. Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(90, NULL, 'Incepta Pharmaceuticals Ltd.', 'Incepta Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(91, NULL, 'Incepta Pharmaceuticals Ltd. (Dhamrai Unit)', 'Incepta Pharmaceuticals Ltd. (Dhamrai Unit)', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(92, NULL, 'Incepta Vaccine Limited', 'Incepta Vaccine Limited', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(93, NULL, 'Indo-Bangla Pharmaceuticals Ltd.', 'Indo-Bangla Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(94, NULL, 'Innova Phrmaceutical Ltd.', 'Innova Phrmaceutical Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(95, NULL, 'Institute of Public Health', 'Institute of Public Health', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(96, NULL, 'Islam Oxygen (Pvt) Ltd.', 'Islam Oxygen (Pvt) Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(97, NULL, 'Jalalabad Pharmaceuticals Ltd.', 'Jalalabad Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(98, NULL, 'Jayson Pharmaceuticals Ltd.', 'Jayson Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(99, NULL, 'JMI Industrial Gas Ltd.', 'JMI Industrial Gas Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(100, NULL, 'JMI Syringes & Medical Devices Ltd.', 'JMI Syringes & Medical Devices Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(101, NULL, 'Julphar Bangladesh Ltd.', 'Julphar Bangladesh Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(102, NULL, 'Kemiko Pharmaceuticals Ltd.', 'Kemiko Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(103, NULL, 'Kumudini Pharma Ltd.', 'Kumudini Pharma Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(104, NULL, 'Labaid Pharmaceuticals Ltd.', 'Labaid Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(105, NULL, 'Leon Pharmaceuticals Ltd.', 'Leon Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(106, NULL, 'Libra Pharmaceuticls Ltd.', 'Libra Pharmaceuticls Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(107, NULL, 'Linde Bangladesh Limited', 'Linde Bangladesh Limited', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(108, NULL, 'Maks Drugs Ltd.', 'Maks Drugs Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(109, NULL, 'Marker Pharmaceuticals Ltd.', 'Marker Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(110, NULL, 'Marksman Pharmaceutical Ltd.', 'Marksman Pharmaceutical Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(111, NULL, 'Medicon Pharmaceuticals Ltd.', 'Medicon Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(112, NULL, 'Medimet Pharmaceuticals Ltd.', 'Medimet Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(113, NULL, 'MedRx Life Science Ltd.', 'MedRx Life Science Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(114, NULL, 'Millat Pharmaceuticals Ltd.', 'Millat Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(115, NULL, 'Modern Pharmaceuticals Ltd.', 'Modern Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(116, NULL, 'Momotaz Pharmaceuticals Ltd.', 'Momotaz Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(117, NULL, 'Monicopharma Limited', 'Monicopharma Limited', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(118, NULL, 'Monomedi Bangladesh Ltd.', 'Monomedi Bangladesh Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(119, NULL, 'MST Pharma and Healthcare Ltd.', 'MST Pharma and Healthcare Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(120, NULL, 'Mundipharma (Bangladesh) Pvt. Ltd.', 'Mundipharma (Bangladesh) Pvt. Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(121, NULL, 'Mystic Pharmaceuticals Ltd.', 'Mystic Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(122, NULL, 'Naafco Pharma Ltd.', 'Naafco Pharma Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(123, NULL, 'National Laboratories Ltd.', 'National Laboratories Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(124, NULL, 'Navana Health Care Limited', 'Navana Health Care Limited', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(125, NULL, 'Navana Pharmaceuticals Ltd.', 'Navana Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(126, NULL, 'Newtec Pharmaceuticals Ltd.', 'Newtec Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(127, NULL, 'Nip Chemicals And Pharmaceuticals Ltd.', 'Nip Chemicals And Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(128, NULL, 'Nipa Pharmaceuticals Ltd.', 'Nipa Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(129, NULL, 'NIPRO JMI Company Ltd.', 'NIPRO JMI Company Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(130, NULL, 'NIPRO JMI Pharma Limited', 'NIPRO JMI Pharma Limited', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(131, NULL, 'Novartis  (Bangladesh) Ltd.', 'Novartis  (Bangladesh) Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(132, NULL, 'Novelta Bestway Pharmaceuticals Ltd.', 'Novelta Bestway Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(133, NULL, 'Novo Healthcare and Pharma Ltd.', 'Novo Healthcare and Pharma Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(134, NULL, 'Novo Healthcare and Pharma Ltd. (Unit-2)', 'Novo Healthcare and Pharma Ltd. (Unit-2)', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(135, NULL, 'Novus Pharmaceuticals Ltd.', 'Novus Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(136, NULL, 'Nuvista Pharma Ltd', 'Nuvista Pharma Ltd', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(137, NULL, 'One Pharma Ltd.', 'One Pharma Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(138, NULL, 'Opso Saline Ltd.', 'Opso Saline Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(139, NULL, 'Opsonin Bulk Drugs Ltd.', 'Opsonin Bulk Drugs Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(140, NULL, 'Opsonin Pharma Limited', 'Opsonin Pharma Limited', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(141, NULL, 'Orbit Pharmaceuticals Ltd.', 'Orbit Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(142, NULL, 'Organic Health Care', 'Organic Health Care', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(143, NULL, 'Orion Infusion Ltd.', 'Orion Infusion Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(144, NULL, 'Orion Pharma Ltd.', 'Orion Pharma Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(145, NULL, 'Oyster Pharmaceuticals Ltd.', 'Oyster Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(146, NULL, 'Pacific Pharmaceuticals Ltd.', 'Pacific Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(147, NULL, 'Peoples Pharma Ltd.', 'Peoples Pharma Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(148, NULL, 'Pharmacil Ltd.', 'Pharmacil Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(149, NULL, 'Pharmadesh Laboratories Ltd.', 'Pharmadesh Laboratories Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(150, NULL, 'Pharmasia Ltd.', 'Pharmasia Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(151, NULL, 'Pharmatek Chemicals Ltd.', 'Pharmatek Chemicals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(152, NULL, 'Pharmik Laboratories Ltd.', 'Pharmik Laboratories Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(153, NULL, 'Phoenix Chemicals Laboratory (BD) Ltd.', 'Phoenix Chemicals Laboratory (BD) Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(154, NULL, 'Popular Pharmaceuticals Ltd.', 'Popular Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(155, NULL, 'Premier Pharmaceuticals', 'Premier Pharmaceuticals', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(156, NULL, 'Prime Pharmaceuticals Ltd.', 'Prime Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(157, NULL, 'Quality Pharmaceuticals (Pvt) Ltd.', 'Quality Pharmaceuticals (Pvt) Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(158, NULL, 'Radiant Pharmaceutical Ltd.', 'Radiant Pharmaceutical Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(159, NULL, 'Rahman Chemicals Ltd.', 'Rahman Chemicals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(160, NULL, 'Rampart-Power Bangladesh Ltd.', 'Rampart-Power Bangladesh Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(161, NULL, 'Rangs Pharmaceuticals Ltd.', 'Rangs Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(162, NULL, 'Reckitt & Benckiser Bangladesh Ltd.', 'Reckitt & Benckiser Bangladesh Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(163, NULL, 'Reliance Pharmaceuticals Ltd.', 'Reliance Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(164, NULL, 'Reman Drug Laboratories Ltd.', 'Reman Drug Laboratories Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(165, NULL, 'Remo Chemical Ltd.', 'Remo Chemical Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(166, NULL, 'Renata Limited', 'Renata Limited', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(167, NULL, 'Renata Limited, Gazipur', 'Renata Limited, Gazipur', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(168, NULL, 'Renata Oncology Limited', 'Renata Oncology Limited', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(169, NULL, 'Rephco Pharmaceuticals Ltd.', 'Rephco Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(170, NULL, 'RN Pharmaceuticals', 'RN Pharmaceuticals', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(171, NULL, 'S. N. Pharmaceuticals Ltd.', 'S. N. Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(172, NULL, 'Salton Pharmaceuticals Ltd.', 'Salton Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(173, NULL, 'Sanofi Bangladesh Ltd.', 'Sanofi Bangladesh Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(174, NULL, 'Save Pharmaceutical', 'Save Pharmaceutical', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(175, NULL, 'Seba Laboratories Ltd.', 'Seba Laboratories Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(176, NULL, 'Seema Pharmaceuticals Ltd.', 'Seema Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(177, NULL, 'Sharif Pharmaceuticals Ltd.', 'Sharif Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(178, NULL, 'Silco Pharmaceuticlas Ltd.', 'Silco Pharmaceuticlas Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(179, NULL, 'Silva Pharmaceuticals Ltd.', 'Silva Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(180, NULL, 'SMC Enterprise Limited', 'SMC Enterprise Limited', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(181, NULL, 'Sodical Chemical Ltd.', 'Sodical Chemical Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(182, NULL, 'Somatec Pharmaceuticals Ltd.', 'Somatec Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(183, NULL, 'Sonear Laboratories Ltd.', 'Sonear Laboratories Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(184, NULL, 'Spectra Oxygen Limited', 'Spectra Oxygen Limited', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(185, NULL, 'Square Cephalosporins Ltd.', 'Square Cephalosporins Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(186, NULL, 'Square Formulations Ltd.', 'Square Formulations Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(187, NULL, 'Square Pharmaceuticals Ltd. (Chemical Division)', 'Square Pharmaceuticals Ltd. (Chemical Division)', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(188, NULL, 'Square Pharmaceuticals Ltd. Gazipur', 'Square Pharmaceuticals Ltd. Gazipur', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(189, NULL, 'Square Pharmaceuticals Ltd. Pabna', 'Square Pharmaceuticals Ltd. Pabna', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(190, NULL, 'Standard Laboratories Ltd.', 'Standard Laboratories Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(191, NULL, 'Sun Pharmaceutical (Bangladesh) Ltd.', 'Sun Pharmaceutical (Bangladesh) Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(192, NULL, 'Sunman-Birdem Pharma Ltd.', 'Sunman-Birdem Pharma Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(193, NULL, 'Super Power Pharmaceuticals Ltd.', 'Super Power Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(194, NULL, 'Supreme Pharmaceuticals Ltd.', 'Supreme Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(195, NULL, 'Team Pharmaceuticals Ltd.', 'Team Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(196, NULL, 'Techno Drugs (Unit-3)', 'Techno Drugs (Unit-3)', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(197, NULL, 'Techno Drugs Ltd.', 'Techno Drugs Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(198, NULL, 'Techno Drugs Ltd., Unit-2', 'Techno Drugs Ltd., Unit-2', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(199, NULL, 'Theraputics (BD) Ltd.', 'Theraputics (BD) Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(200, NULL, 'Unimed & Unihealth Manufacturers Ltd.', 'Unimed & Unihealth Manufacturers Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(201, NULL, 'Union Pharmaceuticals Ltd.', 'Union Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(202, NULL, 'Unique Pharmaceutical Ltd.', 'Unique Pharmaceutical Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(203, NULL, 'United Chemicals & Pharmaceuticals Ltd.', 'United Chemicals & Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(204, NULL, 'Veritas Pharmaceuticals Ltd.', 'Veritas Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(205, NULL, 'Virgo Pharmaceuticals Ltd.', 'Virgo Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(206, NULL, 'White Horse Pharma', 'White Horse Pharma', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(207, NULL, 'Zenith Pharmaceuticals Ltd.', 'Zenith Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(208, NULL, 'Ziska Pharmaceuticals Ltd.', 'Ziska Pharmaceuticals Ltd.', NULL, NULL, NULL, NULL, 1, '2018-01-11'),
(210, NULL, 'ACI Limited\r\n', 'ACI Limited\r\n', NULL, NULL, NULL, NULL, 1, '2018-03-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manufecturer`
--
ALTER TABLE `manufecturer`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manufecturer`
--
ALTER TABLE `manufecturer`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
