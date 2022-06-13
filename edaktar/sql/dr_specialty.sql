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
-- Table structure for table `dr_specialty`
--

CREATE TABLE `dr_specialty` (
  `id` int(11) NOT NULL,
  `specialty` varchar(100) CHARACTER SET utf8 NOT NULL,
  `specialistDetails` text DEFAULT NULL,
  `entry_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dr_specialty`
--

INSERT INTO `dr_specialty` (`id`, `specialty`, `specialistDetails`, `entry_time`, `update_time`) VALUES
(1, 'Allergy and Asthma', 'Conducts the diagnosis, treatment of allergic conditions.', 1217998170, 1439096471),
(2, 'Acupuncture', 'Acupuncture is a form of ancient Chinese \r\nmedicine', 1217998182, 1439096516),
(3, 'Anatomy', NULL, 1217998189, 0),
(4, 'Anesthesiology', 'Treats chronic pain syndromes', 1217998197, 1439096483),
(5, 'Cardiology (Heart)', 'Treats heart disease ', 1217998208, 1439017174),
(6, 'Cardiovascular and Thoracic Surgery', 'Surgery of the heart and blood vessels. ', 1217998217, 1439097415),
(7, 'Dental', NULL, 1217998225, 0),
(8, 'Dermatology', 'Treats skin diseases, including some skin cancers', 1217998233, 1439097469),
(9, 'Diabetology and Endocrinology', 'Treatment of \r\ndiseases', 1217998243, 1439097443),
(10, 'ENT', NULL, 1217998258, 0),
(11, 'Embryologist', NULL, 1217998266, 0),
(12, 'Family Practice', 'Family medicine physicians', 1217998274, 1439017789),
(13, 'Gastroenterology', 'specialize in the diagnosis and treatment of diseases', 1217998280, 1439017881),
(14, 'General Surgery', 'Specialize in evaluating people', 1217998290, 1439017895),
(15, 'Hair Grafting', NULL, 1217998325, 0),
(16, 'Haematology', 'Treatment of diseases of the blood and blood system', 1217998337, 1439017939),
(17, 'Hepatobiliary and Pancreatic Surgery', NULL, 1217998345, 0),
(18, 'Herbal', NULL, 1217998351, 0),
(19, 'Hepatology', 'Treatment of diseases of the liver', 1217998358, 1439097516),
(20, 'Homoeopathic', NULL, 1217998366, 0),
(21, 'Infectious Disease', 'Treatment of complex infections', 1217998374, 1439097495),
(22, 'Medicine', NULL, 1217998381, 0),
(23, 'Nephrology (Kidney)', 'Treatment of diseases of the kidney and urinary system', 1217998388, 1439018062),
(24, 'Neurology', 'Treatment of brain, spinal cord, and nervous system diseases', 1217998394, 1439018092),
(25, 'Nuclear Medicine and Ultrasound', 'Treatment of certain problems. ', 1217998401, 1439097368),
(26, 'Gynae and Obstetrics', 'Female reproductive system. ', 1217998409, 1439097318),
(27, 'Oncology (Cancer/Tumour)', 'Treatment of cancer.', 1217998417, 1439097345),
(28, 'Ophthalmology ( Eye )', 'Treatment of eye problems, diseases, and injuries. ', 1217998424, 1442128508),
(29, 'Oral and Maxillofacial Surgery', 'Specialize in surgery of the mouth and jaw. ', 1217998433, 1439018177),
(30, 'Orthopaedic Surgery', NULL, 1217998440, 0),
(31, 'Pathology', NULL, 1217998446, 0),
(32, 'Pain Management', NULL, 1217998454, 0),
(33, 'Paediatrics', NULL, 1217998459, 0),
(34, 'Paediatric Surgery', NULL, 1217998467, 0),
(35, 'Pharmacology', NULL, 1217998478, 0),
(36, 'Physiotherapy', NULL, 1217998484, 0),
(37, 'Piles (Colon and Rectal Surgery)', NULL, 1217998492, 0),
(38, 'Plastic Surgery', NULL, 1217998500, 0),
(39, 'Psychiatry (Mental Health)', NULL, 1217998507, 0),
(40, 'Radiology (X-Ray)', NULL, 1217998514, 0),
(41, 'Spinal Surgery', NULL, 1217998524, 0),
(42, 'Urology', NULL, 1217998531, 0),
(43, 'Virology', NULL, 1217998537, 0),
(44, 'Consultant', NULL, 1217998543, 0),
(45, 'Hematology & Transfusion', NULL, 1218339873, 1220436427),
(46, 'Transfusion', NULL, 1218339954, 1220436449),
(47, 'Transfusion Medicine', NULL, 1218339976, 1220436438),
(52, 'Prosthodontics', NULL, 1220436491, 0),
(48, 'Clinical Transfusion Medicine', NULL, 1218340029, 1220436415),
(49, 'Diabetology', NULL, 1218340059, 0),
(50, 'Endocrinology', NULL, 1218340075, 0),
(51, 'Laboratory Services', NULL, 1218340091, 0),
(53, 'Vascular Surgery', NULL, 1220436518, 0),
(54, 'Oral & Maxillofacial', NULL, 1220436529, 0),
(55, 'Gynaelogy', NULL, 1220436550, 0),
(56, 'Children & Preventive Dentistry', NULL, 1220436562, 0),
(57, 'Clinical Hematology', NULL, 1220436576, 0),
(58, 'Orthodontics', NULL, 1220436586, 0),
(59, 'Cardiac Surgery', NULL, 1220436594, 0),
(60, 'Conservative & Endodontics', NULL, 1220436609, 0),
(61, 'Colorectal Surgery', NULL, 1220951185, 0),
(62, 'Colorectal and Laparoscopic Surgery', NULL, 1220951240, 0),
(63, 'Physical Medicine', NULL, 1221274463, 0),
(64, 'Head and Neck Surgery', NULL, 1221279570, 0),
(65, 'Rheumatology, Chest& Medicine', NULL, 1229847136, 0),
(66, 'Orthopaedics', NULL, 1232189350, 0),
(67, 'Hepatobiliary and Pancreatic Surgery & Liver Transplant', NULL, 1333525946, 0),
(68, 'Medical Officer', NULL, 1411469625, 0),
(70, 'Chest Diseases', NULL, 1411904443, 0),
(71, 'Medical Microbiology', NULL, 1412071278, 0),
(72, 'Neuromedicine', NULL, 1412075971, 0),
(73, 'Neurosurgery', NULL, 1412156672, 1414902396),
(74, 'Cardiology', NULL, 1412244871, 0),
(75, 'Biochemistry', NULL, 1413007868, 0),
(76, 'Anaesthesiology', NULL, 1413008518, 0),
(77, 'Neurosurgeon, Brain & Spain Surgeon', NULL, 1413010650, 0),
(78, 'Medicine & Kidney', NULL, 1413107487, 0),
(79, 'Psychiatrist', NULL, 1413195363, 0),
(80, 'Occupational Therapist', NULL, 1413198989, 1413199172),
(81, 'Forensic Psychiatry', NULL, 1413373392, 0),
(82, 'Clinical psychology & Psycothrey', NULL, 1413712341, 0),
(83, 'Paediatric Neurology', NULL, 1413798089, 0),
(84, 'Interventional Radiology & Ultrasiend Imeging', NULL, 1414054560, 0),
(85, 'Junior Consultant', NULL, 1414229557, 0),
(86, 'Pediatric Neurosurgury', NULL, 1414402730, 0),
(87, 'Neurology & Medicine', NULL, 1414905640, 0),
(88, 'Surgery (অস্রপচার)', NULL, 1416228395, 1425373599),
(89, 'Pediatric Nephrology', NULL, 1416307120, 0),
(90, 'Pediatric Neonatology', NULL, 1416307387, 0),
(91, 'Paediatric Oncology', NULL, 1416823599, 0),
(92, 'Paediatric Hematology', NULL, 1416823638, 0),
(93, 'CHILD (Paediatric)', NULL, 1416823677, 0),
(94, 'ENT & Head Neck Surgery', NULL, 1416826373, 0),
(97, 'Addiction Psychiatrist', 'Addiction psychiatrists are medical doctors', 1439017567, 1439096559),
(98, 'Adolescent Medicine Specialist', 'Specialize in the diagnosis and treatment', 1439017582, 1439096599),
(99, 'Chest Surgery', 'Chest Surgery', 1442745556, 1442745556),
(100, 'Interventional Cardiology', 'Interventional Cardiology', 1442902985, 1442902985),
(101, 'Pediatric Gastroenterology', 'Pediatric Gastroenterology', 1443953413, 1443953413),
(102, 'General Physician', 'General Physician', 1444754441, 1444754441),
(104, 'Skin & Hair Transparent Surgeon ', 'Skin & Hair Transparent Surgeon ', 1446977905, 1446977905),
(105, 'Consultant Orthopaedic Surgeon', 'Consultant Orthopaedic Surgeon', 1447995844, 1447996058),
(106, 'Obstetrics & Gynaecology', 'Obstetrics & Gynaecology', 1448179847, 1448179847),
(107, 'Cancer Specialist', 'Cancer Specialist', 1448193854, 1448193854),
(109, 'Pulmonology', 'Pulmonology', 1449139402, 1449139402),
(111, 'Sonology ', 'Sonology ', 1450349869, 1450349869);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dr_specialty`
--
ALTER TABLE `dr_specialty`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dr_specialty`
--
ALTER TABLE `dr_specialty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
